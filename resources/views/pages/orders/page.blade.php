<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/auction.css') }}">
    <script>
         if (localStorage.getItem("sidebarState") === "closed") {
          document.documentElement.classList.add("sidebar-preclosed");
        }
    </script>
    <title>Order</title>
</head>

<body>
    <aside class="sidebar-dashboard d-md-block d-sm-none d-none">
        @component('components.common.main-sidebar')
            Main Sidebar
        @endcomponent
    </aside>

    <div class="main-content">
        <div class="main-section w-100">
            {{-- heading --}}
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <div>
                                <h2 class="cmn-heading-title">Orders </h2>
                                <p>Manage all orders, payments, and shipments</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 justify-content-end flex-wrap">
                        <a href="/order-dashboard/create-order-invoice" target="_blank" class="sat-btn grey-light opacity-100"><img src="{{asset('/assets/images/icons/money-dollar-circle-blue.svg')}}" width="20" height="20" loading="lazy" alt="icon sat"> Create Order Invoice</a>
                        <a href="/order-dashboard/create-reservation-invoice" target="_blank" class="sat-btn grey-light opacity-100"><img src="{{asset('/assets/images/icons/doc-list-blue.svg')}}" width="20" height="20" loading="lazy" alt="icon sat"> Create Reservation Invoice</a>
                        <a href="/order-dashboard/change-car-order" target="_blank" class="sat-btn grey-light opacity-100"><img src="{{asset('/assets/images/icons/exchange-icon.svg')}}" width="20" height="20" loading="lazy" alt="icon sat"> Change Car in Order</a>
                        <a href="/order-dashboard/create-reservation" target="_blank" class="sat-btn grey-light opacity-100"><img src="{{asset('/assets/images/icons/bookmark-blue.svg')}}" width="20" height="20" loading="lazy" alt="icon sat"> Create Reservation</a>
                        <a href="/order-dashboard/create" target="_blank" class="sat-btn primary opacity-100"><img src="{{asset('/assets/images/icons/plus-icon.svg')}}" width="20" height="20" loading="lazy" alt="icon sat"> New Order</a>
                    </div>
                    </div>
                </div>
            </div>
            {{-- values --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses">
                        <div class="card--item white--variant border--blue-light shadow--sm">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Total Orders</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                            </div>
                            <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/shopping-cart-bg-blue.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--red">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Pending Payment</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                                <p class="action--text text--red mt-1">Need Action</p>
                            </div>
                            <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/time-bg-red.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--yellow">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Awaiting proof</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                                <p class="action--text text--red mt-1">Review Required</p>
                            </div>
                             <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/doc-bg-blue.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--blue-light">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Confirmed</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                            </div>
                             <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/task-bg-blue.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--blue-light">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Ready for shipment</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                            </div>
                             <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/time-bg-blue.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--blue-light">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Shipped</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                            </div>
                             <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/plan-bg-blue.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="card--item white--variant shadow--sm border--green">
                            <div class="text--wrapper">
                                <h3 class="fs-12 fw-medium text--black-light">Completed</h3>
                                <p class="value text--black fs-2 lh-1 mt-2">23</p>
                            </div>
                             <div class="img--wrapper">
                                <img src="{{asset('assets/images/icons/delivery-bg-green.svg')}}" width="27" height="27" loading="lazy" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- filters tabs --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="bg-white p-1 order--filter-tab">
                        <div class="tabs--sub">
                            <input type="radio" class="btn-check" name="tabs_sub" id="All" autocomplete="off"
                                checked>
                            <label class="btn" for="All">All</label>
                            {{-- active --}}
                            <input type="radio" class="btn-check" name="tabs_sub" id="SUBMITTED" autocomplete="off">
                            <label class="btn" for="SUBMITTED">Submitted</label>
    
                            <input type="radio" class="btn-check" name="tabs_sub" id="PENDINGAPPROVAL"
                                autocomplete="off">
                            <label class="btn" for="PENDINGAPPROVAL">Pending Approval</label>
    
                            <input type="radio" class="btn-check" name="tabs_sub" id="PaymentApproved"
                                autocomplete="off">
                            <label class="btn" for="PaymentApproved">Payment Approved</label>
    
                            <input type="radio" class="btn-check" name="tabs_sub" id="WON" autocomplete="off">
                            <label class="btn" for="WON">Won</label>
    
                            <input type="radio" class="btn-check" name="tabs_sub" id="LOST" autocomplete="off">
                            <label class="btn" for="LOST">Lost</label>
    
                            <input type="radio" class="btn-check" name="tabs_sub" id="Rejected" autocomplete="off">
                            <label class="btn" for="Rejected">Rejected</label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- search dropdown --}}
            <div class="bg-white p-1 order--filter mb-2">
            {{-- search --}}
            <div class="search--filters">
                <div class="search--item">
                    <input type="text" placeholder="Search bids, customers, stock IDs"
                        class="form-control" />
                    <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                        height="16" loading="lazy" alt="search-icon" />
                </div>
                {{-- All Method --}}
                <select class="form-select">
                    <option value="All Method" selected>All Method</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Card">Card</option>
                    <option value="Crypto">Crypto</option>
                    <option value="SAT Balance">SAT Balance</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
                {{-- All Sources --}}
                <select class="form-select">
                    <option value="" selected>All Sources</option>
                    <option value="From Bid">From Bid</option>
                    <option value="Manual">Manual</option>
                    <option value="Reservation">Reservation</option>
                    <option value="Buy Now">Buy Now</option>
                </select>
            </div>
            {{-- All Time --}}
            <div class="d-flex align-items-center gap-2">
                <select class="form-select" id="timeFilter">
                    <option value="All Time" selected>All Time</option>
                    <option value="Last 1 Month">Last 1 Month</option>
                    <option value="Specific Date">Specific Date</option>
                </select>
                <input type="date" id="specificDate" class="form-control d-none"/>
            </div>
            </div>
            @component('components.auction-common.order-table')
                auction table
            @endcomponent
        </div>
    </div>
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    @component('components.order-modals.add-payment')
        add payment
    @endcomponent
    @component('components.order-modals.reject-payment')
        reject payment
    @endcomponent
    <div class="img-lightbox" id="imgLightbox">
        <span class="img-lightbox__close" id="imgLightboxClose">&times;</span>
        <img src="" alt="Full screen proof" id="imgLightboxImg">
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
     <script>
        const menu = document.querySelector('.main-content');
        const sidebar = document.querySelector('.sidebar-dashboard');
        const burger = document.querySelector('.menu--burger');

        document.addEventListener("DOMContentLoaded", () => {

            const closed = localStorage.getItem("sidebarState") === "closed";

            if (closed) {
                sidebar.classList.add("closed");
                menu.classList.add("ms-0");

                // IMPORTANT
                burger.classList.add("open");
            } else {
                sidebar.classList.remove("closed");
                menu.classList.remove("ms-0");
                burger.classList.remove("open");
            }
        });

        function handleMenu(x) {

            x.classList.toggle("open");
            menu.classList.toggle("ms-0");
            sidebar.classList.toggle("closed");

            const closed = sidebar.classList.contains("closed");

            localStorage.setItem(
                "sidebarState",
                closed ? "closed" : "open"
            );

            document.documentElement.classList.toggle(
                "sidebar-preclosed",
                closed
            );
        }
    </script>
    <script>
    document.getElementById('timeFilter').addEventListener('change', function () {
        const dateInput = document.getElementById('specificDate');

        if (this.value === 'Specific Date') {
            dateInput.classList.remove('d-none');
        } else {
            dateInput.classList.add('d-none');
            dateInput.value = '';
        }
    });
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
</body>

</html>
