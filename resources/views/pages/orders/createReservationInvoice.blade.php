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
        <div class="main-section w-100 bg--grey">
            {{-- heading --}}
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between sat--sheet shadow--sm p-4 br-8">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg class="cursor-pointer" onclick="window.location.href='/order-dashboard'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                                <div>
                                    <h2 class="cmn-heading-title">Create Reservation Invoice</h2>
                                    <p class="fs-14 text--grey">Generate invoice for reservation payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-3 pb-3">
                <div class="col-md-7">
                    <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Reservation Selection</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Reservation ID">Reservation ID</label>
                                <input type="text" placeholder="Reservation ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Stock ID">Stock ID</label>
                                <input type="text" placeholder="Stock ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Car Name">Car Name</label>
                                <input type="text" placeholder="Car Name" class="form-control fs-14">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                     <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Invoice Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Invoice Number">Invoice Number</label>
                                <input type="text" placeholder="Invoice Number" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Invoice Date">Invoice Date</label>
                                <input type="date" placeholder="Invoice Date" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Due">Due Date</label>
                                <input type="date" placeholder="Due" class="form-control fs-14">
                            </div>
                        </div>
                     </div>
                </div>
                <div class="col-md-7">
                    <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Customer Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Name">Name</label>
                                <input type="text" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Email">Email</label>
                                <input type="email" placeholder="Email" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Country">Country</label>
                                <select class="form-select fs-14">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control fs-14">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                     <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Reservation Details</h5>
                            </div>
                            <div class="col-12">
                                <div class="sat--sheet p-4 br-8">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <div class="d-flex flex-column gap-2">
                                            <span class="fs-14 text--black fw-semibold">Stock ID</span>
                                            <span class="fs-14 text--black-light fw-medium">STK-1199</span>
                                        </div>
                                        <div class="d-flex flex-column gap-2">
                                            <span class="fs-14 text--black fw-semibold">Car Name</span>
                                            <span class="fs-14 text--black-light fw-medium">2025 Toyota Camry Hybrid</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="col-md-7">
                    <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                            <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Financial</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Reservation Amount">Reservation Amount</label>
                                <select class="form-select fs-14">
                                    <option value="">1000</option>
                                    <option value="">2000</option>
                                    <option value="">3000</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Currency">Currency</label>
                                <select class="form-select fs-14">
                                    <option value="">USD</option>
                                    <option value="">PKR</option>
                                    <option value="">EUR</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Payment Status">Payment Status</label>
                                <select class="form-select fs-14">
                                    <option value="">UnPaid</option>
                                    <option value="">Partial</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Payment Method">Payment Method</label>
                                <select class="form-select fs-14">
                                    <option value="">Bank Transfer</option>
                                    <option value="">Card</option>
                                    <option value="">Paypal</option>
                                    <option value="">Crypto</option>
                                </select>
                            </div>
                             <div class="col-md-12 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Notes">Notes</label>
                                <textarea class="form-control fs-14" placeholder="Additional notes..." style="height: auto" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                {{-- action buttons --}}
                <div class="row g-3">
                    <div class="col-12">
                    <div class="sat--sheet shadow--sm p-4 br-8 h-100">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <button class="sat-btn grey-light text--red">Cancel</button>
                                <button class="sat-btn grey-light gap-2" data-bs-target="#preview_reservation_invoice" data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg> Preview Invoice</button>
                                <button class="sat-btn primary gap-1"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>Generate Invoice</button>
                            </div>
                        </div>
                    </div>
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
    @component('components.order-modals.reservation-invoice')
        reservation-invoice
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
