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
                                    <h2 class="cmn-heading-title">Create Order Invoice</h2>
                                    <p class="fs-14 text--grey">Generate invoice for this order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-4 pb-3">
                <div class="col-md-6">
                    <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Order selection</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Order ID">Order ID</label>
                                <input type="text" placeholder="Order ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Stock ID">Stock ID</label>
                                <input type="text" placeholder="Stock ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Customer">Customer</label>
                                <input type="text" placeholder="Customer" class="form-control fs-14">
                            </div>
                        </div>
                    </div>
                    <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                           <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Customer Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Name">Name</label>
                                <input type="text" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Name Company">Name Company</label>
                                <input type="text" placeholder="Name Company" class="form-control fs-14">
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
                    <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Financial Breakdown</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Car Price">Car Price</label>
                                <input type="number" placeholder="Car Price" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Shipping">Shipping</label>
                                <input type="text" placeholder="Shipping" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Insurance">Insurance</label>
                                <input type="text" placeholder="Insurance" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Warranty">Warranty</label>
                                <input type="text" placeholder="Warranty" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Additional">Additional</label>
                                <input type="text" placeholder="Additional" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Handling Fee">Handling Fee</label>
                                <input type="text" placeholder="Handling Fee" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Tax (%)">Tax (%)</label>
                                <input type="text" placeholder="Tax (%)" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Tax Amount">Tax Amount</label>
                                <input type="text" placeholder="Tax Amount" class="form-control fs-14">
                            </div>
                  
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold text-center w-100" for="Insurance">Insurance</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold">
                                    1000
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold text-center w-100" for="Warranty">Warranty</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold">
                                    1000
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold text-center w-100" for="Additional">Additional</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold bg--blue-light2 border--blue">
                                    1000
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Payment Status">Payment Status</label>
                                <select class="form-select fs-14">
                                    <option value="">UnPaid</option>
                                    <option value="">Partial</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Payment Method">Payment Method</label>
                                <select class="form-select fs-14">
                                    <option value="">Bank Transfer</option>
                                    <option value="">Card</option>
                                    <option value="">Crypto</option>
                                    <option value="">SAT Balance</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Currency">Currency</label>
                                <select class="form-select fs-14">
                                    <option value="">USD</option>
                                    <option value="">USD</option>
                                    <option value="">USD</option>
                                </select>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                       <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Invoice Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Invoice Number">Invoice Number</label>
                                <input type="text" placeholder="Invoice Number" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Order Number">Order Number</label>
                                <input type="text" placeholder="Order Number" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Invoice Date">Invoice Date</label>
                                <input type="date" placeholder="Invoice Date" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--grey fw-medium" for="Due">Due Date</label>
                                <input type="date" placeholder="Due" class="form-control fs-14">
                            </div>
                        </div>
                       </div>
                       <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-semibold mb-0">Shipping Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Departure Location">Departure Location</label>
                                <input type="text" placeholder="Departure Location" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Destination">Destination</label>
                                 <select class="form-select fs-14">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Port of Loading">Port of Loading</label>
                                 <select class="form-select fs-14">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Port of Destination">Port of Destination</label>
                                 <select class="form-select fs-14">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                        </div>
                     </div>
                       <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-3">
                                    <h5 class="fs-6 text--grey fw-semibold mb-0">Letter of Credit (LC)</h5>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" role="switch" id="switchLC">
                                        <label class="form-check-label" for="switchLC">Use LC</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12 lc-input">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="HS Code">HS Code</label>
                                <input type="text" placeholder="HS Code" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12 lc-input">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Date of Shipment">Date of Shipment</label>
                                <input type="date" class="form-control fs-14">
                            </div>
                        </div>
                     </div>
                     <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Notes">Notes</label>
                                <textarea class="form-control fs-14" placeholder="Optional Notes..." style="height: auto" rows="6"></textarea>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black mb-2 fw-semibold" for="Terms & Conditions">Terms & Conditions</label>
                                <textarea class="form-control fs-14" placeholder="Payment Terms, delivery terms..." style="height: auto" rows="6"></textarea>
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
                        <button class="sat-btn grey-light gap-2" data-bs-target="#preview_order_invoice" data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg> Preview Invoice</button>
                        <button class="sat-btn primary gap-1"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>Generate Invoice</button>
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
    <script>
    const switchLC = document.getElementById('switchLC');
    const lcInputs = document.querySelectorAll('.lc-input');

    function toggleLCInputs() {
        lcInputs.forEach(input => {
            input.classList.toggle('d-none', !switchLC.checked);
        });
    }

    // Run on switch change
    switchLC.addEventListener('change', toggleLCInputs);

    // Run once on page load
    toggleLCInputs();
</script>
</body>

</html>
