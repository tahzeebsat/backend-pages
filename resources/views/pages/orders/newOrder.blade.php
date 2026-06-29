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
                                    <h2 class="cmn-heading-title">Create Order</h2>
                                    <p>Create a new order manually</p>
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
                                <h5 class="fs-6 text--grey fw-normal mb-0">Customer Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name">Name</label>
                                <input type="number" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Email">Email</label>
                                <input type="emaol" placeholder="Email" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Customer Type">Customer Type</label>
                                <input type="text" placeholder="Customer Type" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Country">Country</label>
                                <input type="text" placeholder="Country" class="form-control fs-14">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Vehicle Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Stock ID">Stock ID</label>
                                <input type="text" placeholder="Stock ID" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Vehicle">Vehicle</label>
                                <input type="text" placeholder="Vehicle" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Chassis">Chassis</label>
                                <input type="text" placeholder="Chassis" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Inspection">Inspection</label>
                                <input type="text" placeholder="Inspection" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Availability">Availability</label>
                                <input type="text" placeholder="Availability" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Quantity">Quantity</label>
                                <input type="text" placeholder="Quantity" class="form-control fs-14">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Financial Breakdown</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Car Price">Car Price</label>
                                <input type="text" placeholder="Car Price" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping">Shipping</label>
                                <input type="text" placeholder="Shipping" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Insurance">Insurance</label>
                                <input type="text" placeholder="Insurance" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Warranty">Warranty</label>
                                <input type="text" placeholder="Warranty" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Additional">Additional</label>
                                <input type="text" placeholder="Additional" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Handling Fee">Handling Fee</label>
                                <input type="text" placeholder="Handling Fee" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                            </div>
                              <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium text-center w-100" for="Insurance">Insurance</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold">
                                    1000
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium text-center w-100" for="Warranty">Warranty</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold">
                                    1000
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium text-center w-100" for="Additional">Additional</label>
                                <div class="sat--sheet text-center fs-4 fw-semibold bg--blue-light2 border--blue">
                                    1000
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Paid Amount">Paid Amount</label>
                                <input type="text" placeholder="Paid Amount" class="form-control fs-14">
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Payment Status">Payment Status</label>
                                <select class="form-select fs-14">
                                    <option value="">UnPaid</option>
                                    <option value="">Partial</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Payment Method">Payment Method</label>
                                <select class="form-select fs-14">
                                    <option value="">Bank Transfer</option>
                                    <option value="">Card</option>
                                    <option value="">Crypto</option>
                                    <option value="">SAT Balance</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="sat--sheet h-100 px-4">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <h5 class="fs-5 fw-semibold mb-0">Payment Proof</h5>
                                        <button class="sat-btn light px-4 py-2" data-bs-target="#upload_payment_proof" data-bs-toggle="modal"><img src="http://127.0.0.1:8000/assets/images/icons/upload-line-black.svg" height="18" width="18" alt="desktop"> Upload</button>
                                    </div>
                                    <table class="w-100">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom fs-6 fw-semibole p-2">
                                                    Date
                                                </th>
                                                <th class="border-bottom fs-6 fw-semibole p-2">
                                                    Amount
                                                </th>
                                                <th class="border-bottom fs-6 fw-semibole p-2">
                                                    Method
                                                </th>
                                                <th class="border-bottom fs-6 fw-semibole p-2">
                                                    Reference
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-2 border-bottom fs-6 fw-normal">
                                                    Mar 18.2026
                                                </td>
                                                <td class="p-2 border-bottom fs-6 fw-normal">
                                                    $82,000
                                                </td>
                                                <td class="p-2 border-bottom fs-6 fw-normal">
                                                    Card
                                                </td>
                                                <td class="p-2 border-bottom fs-6 fw-normal">
                                                    Txn-card-88
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex flex-column gap-1 mt-2 pt-1">
                                            <div class="fs-6 fw-normal text--black-light">Previous Orders <span class="text--blue">(2)</span> </div>
                                            <div class="d-flex gap-1">
                                                <a href="/" class="fs-14 fw-normal text--blue">ORD-1001</a>
                                                <a href="/" class="fs-14 fw-normal text--blue">Ored-1002</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                         <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Shipping Information</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping Type">Shipping Type</label>
                                <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping">Shipping</label>
                                <input type="text" placeholder="Shipping" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Departure">Departure</label>
                                <input type="text" placeholder="Departure" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Destination Country">Destination Country</label>
                                <input type="text" placeholder="Destination Country" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Destination Country">Destination Country</label>
                                <input type="text" placeholder="Destination Country" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Handling Fee">Handling Fee</label>
                                <input type="text" placeholder="Handling Fee" class="form-control fs-14">
                            </div>
                        </div>

                         <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Consignee</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping Type">Shipping Type</label>
                                <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name">Name</label>
                                <input type="text" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Country">Country</label>
                                <input type="text" placeholder="Country" class="form-control fs-14">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Notify Party (Optional)</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping Type">Shipping Type</label>
                                <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name">Name</label>
                                <input type="text" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control fs-14">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control fs-14">
                            </div>
                             <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Country">Country</label>
                                <input type="text" placeholder="Country" class="form-control fs-14">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Add-on services</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Created By">Created By</label>
                                <input type="text" placeholder="Created By" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Support Agent">Support Agent</label>
                                <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Created By</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Created By">Created By</label>
                                <input type="text" placeholder="Created By" class="form-control fs-14">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Support Agent">Support Agent</label>
                                <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-12 col-sm-6 col-12">
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
                        <button class="sat-btn primary gap-1">Save Order</button>
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
