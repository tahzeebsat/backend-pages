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
        <div class="main-section w-100 vh-100">
            {{-- heading --}}
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between sat--sheet h-100">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg class="cursor-pointer" onclick="window.location.href='/order-dashboard'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                                <div>
                                    <h2 class="cmn-heading-title">Create Reservation</h2>
                                    <p>Reserve a vehicle for a customer (48-hour payment window)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-3 pb-3">
                <div class="col-12">
                    <div class="sat--sheet h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Customer</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name">Name</label>
                                <input type="email" placeholder="Customer Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Email">Email</label>
                                <input type="email" placeholder="Email" class="form-control fs-14">
                            </div>
                             <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Vehicle</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Stock ID">Stock ID</label>
                                <input type="text" placeholder="Stock ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Vehicle">Vehicle</label>
                                <input type="text" placeholder="Vehicle" class="form-control fs-14" disabled>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Reservation Amount">Reservation Amount</label>
                                <input type="number" placeholder="0.00" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Payment Method">Payment Method</label>
                                <select class="form-select">
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Notes">Notes</label>
                               <textarea class="form-control fs-14" placeholder="Optional Notes..." style="height: auto" rows="6"></textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            {{-- action buttons --}}
            <div class="row g-3 pb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <button class="sat-btn grey-light text--red">Cancel</button>
                        <button class="sat-btn primary gap-1"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>Create Reservation</button>
                    </div>
                </div>
            </div>
    </div>
    </div>
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    {{-- modals --}}
    @component('components.order-modals.consignee')
        consignee
    @endcomponent
    @component('components.order-modals.notify-party')
        notify party
    @endcomponent
    @component('components.order-modals.add-shipment')
        add shipment
    @endcomponent
    @component('components.order-modals.courier-modal')
        courier modal
    @endcomponent
    @component('components.order-modals.upload-doc-modal')
        upload doc modal
    @endcomponent
    @component('components.order-modals.upload-payment-proof')
        upload payment proof
    @endcomponent
    @component('components.order-modals.add-payment')
        add payment
    @endcomponent
    @component('components.order-modals.preview-order-invoice')
        preview-order-invoice
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
</body>

</html>
