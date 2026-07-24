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
                                    <h2 class="cmn-heading-title">Create Order</h2>
                                    <p class="fs-14 text--grey">Create a new order manually</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-3 pb-3">
                <div class="col-md-6">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-16 text--black fw-semibold mb-0">Customer Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Name">Name</label>
                                <input type="number" placeholder="Name" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Email">Email</label>
                                <input type="emaol" placeholder="Email" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Customer Type">Customer Type</label>
                                <input type="text" placeholder="Customer Type" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Country">Country</label>
                                <input type="text" placeholder="Country" class="form-control fs-14">
                            </div>
                        </div>
                        </div>
                        <div class="sat--sheet shadow--sm p-4 br-8 mt-4">
                         <div class="row g-3">
                            <div class="col-12 d-flex align-items-center justify-content-between gap-2">
                                <h5 class="fs-16 text--black fw-semibold mb-0">Vehicle Information</h5>
                                <button type="button" id="addVehicleButton" class="sat-btn primary p-2" aria-label="Add vehicle information" title="Add vehicle information">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                </button>
                            </div>
                            <div id="vehicleInformationList" class="col-12 d-grid gap-3">
                                <div class="vehicle-information-item row g-3 border-bottom pb-3">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="button" class="remove-vehicle-button sat-btn grey-light text--red p-2" aria-label="Remove vehicle information" title="Remove vehicle information">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path></svg>
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Stock ID</label>
                                        <input type="text" placeholder="Stock ID" class="form-control fs-14">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Vehicle</label>
                                        <input type="text" placeholder="Vehicle" class="form-control fs-14">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Chassis</label>
                                        <input type="text" placeholder="Chassis" class="form-control fs-14">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Inspection</label>
                                        <input type="text" placeholder="Inspection" class="form-control fs-14">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Availability</label>
                                        <input type="text" placeholder="Availability" class="form-control fs-14">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <label class="fs-14 text--black-light mb-2 fw-medium">Quantity</label>
                                        <input type="text" placeholder="Quantity" class="form-control fs-14">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sat--sheet shadow--sm p-4 br-8 mt-4">
                         <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-16 text--black fw-semibold mb-0">Shipping Information</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Destination Country">Destination Country</label>
                                 <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                             <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Destination Country">Destination Country</label>
                                 <select class="form-select">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-16 text--black fw-semibold mb-0">Financial Breakdown</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Car Price">Car Price</label>
                                <input type="text" placeholder="Car Price" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Shipping">Shipping</label>
                                <input type="text" placeholder="Shipping" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Insurance">Insurance</label>
                                <input type="text" placeholder="Insurance" class="form-control fs-14">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Warranty">Warranty</label>
                                <input type="text" placeholder="Warranty" class="form-control fs-14">
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Additional">Additional</label>
                                <input type="text" placeholder="Additional" class="form-control fs-14">
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Handling Fee">Handling Fee</label>
                                <input type="text" placeholder="Handling Fee" class="form-control fs-14">
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Paid Amount">Paid Amount</label>
                                <input type="text" placeholder="Paid Amount" class="form-control fs-14">
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Payment Status">Payment Status</label>
                                <select class="form-select fs-14">
                                    <option value="">UnPaid</option>
                                    <option value="">Partial</option>
                                    <option value="">Paid</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-14 text--black-light mb-2 fw-medium" for="Payment Method">Payment Method</label>
                                <select class="form-select fs-14">
                                    <option value="">Bank Transfer</option>
                                    <option value="">Card</option>
                                    <option value="">Crypto</option>
                                    <option value="">SAT Balance</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sat--sheet shadow--sm p-4 br-8 mt-4">
                        <div class="row g-3">
                            <div class="col-md-12 col-sm-6 col-12">
                                <label class="fs-16 text--black fw-semibold mb-3" for="Notes">Notes</label>
                                <textarea class="form-control fs-14" placeholder="Optional Notes..." style="height: auto" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-16 text--black fw-semibold mb-0">Add-on services</h5>
                            </div>
                            <div class="col-12">
                                <div class='d-flex align-items-center gap-3 flex-wrap' id="addonServicesList">

                                        <label class="form-check-label add--onservices" for="insurance_service">
                                        <input class="form-check-input" type="checkbox" value="" id="insurance_service">
                                           Insurance service
                                        </label>

                                        <label class="form-check-label add--onservices" for="storage_service">
                                        <input class="form-check-input" type="checkbox" value="" id="storage_service">
                                            Storage service
                                        </label>

                                        <label class="form-check-label add--onservices" for="finance_service">
                                        <input class="form-check-input" type="checkbox" value="" id="finance_service">
                                            Finance service
                                        </label>

                                        <label class="form-check-label add--onservices" for="car_carrier">
                                        <input class="form-check-input" type="checkbox" value="" id="car_carrier">
                                            Car Carrier
                                        </label>

                                        <label class="form-check-label add--onservices" for="custom_clearance">
                                        <input class="form-check-input" type="checkbox" value="" id="custom_clearance">
                                            Custom Clearance
                                        </label>

                                        <label class="form-check-label add--onservices" for="pre_export_inspection">
                                        <input class="form-check-input" type="checkbox" value="" id="pre_export_inspection">
                                            Custom Clearance
                                        </label>

                                        <label class="form-check-label add--onservices" for="marine_insurance">
                                        <input class="form-check-input" type="checkbox" value="" id="marine_insurance">
                                            Marine Insurance
                                        </label>

                                        <label class="form-check-label add--onservices" for="non_stolen_check">
                                        <input class="form-check-input" type="checkbox" value="" id="non_stolen_check">
                                            Non Stolen Check
                                        </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-3" id="addonServicesFields"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- action buttons --}}
                <div class="col-md-12">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="sat-btn grey-light text--red gap-1">Cancel</button>
                                    <button class="sat-btn primary gap-1"><svg xmlns="http://www.w3.org/2000/svg" style="width: 20px;height: 20px" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>Save Order</button>
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

        document.addEventListener("DOMContentLoaded", () => {
            const vehicleList = document.getElementById("vehicleInformationList");
            const addVehicleButton = document.getElementById("addVehicleButton");
            const vehicleTemplate = vehicleList.querySelector(".vehicle-information-item").cloneNode(true);

            const updateRemoveButtons = () => {
                const vehicleItems = vehicleList.querySelectorAll(".vehicle-information-item");

                vehicleItems.forEach((vehicleItem, index) => {
                    vehicleItem.querySelector(".remove-vehicle-button").classList.toggle("d-none", index === 0);
                });
            };

            addVehicleButton.addEventListener("click", () => {
                const vehicleItem = vehicleTemplate.cloneNode(true);

                vehicleItem.querySelectorAll("input").forEach((input) => {
                    input.value = "";
                });

                vehicleList.appendChild(vehicleItem);
                updateRemoveButtons();
            });

            vehicleList.addEventListener("click", (event) => {
                const removeButton = event.target.closest(".remove-vehicle-button");

                if (removeButton) {
                    removeButton.closest(".vehicle-information-item").remove();
                    updateRemoveButtons();
                }
            });

            updateRemoveButtons();
        });

        document.addEventListener("DOMContentLoaded", () => {
            const addonServicesList = document.getElementById("addonServicesList");
            const addonServicesFields = document.getElementById("addonServicesFields");

            if (!addonServicesList || !addonServicesFields) {
                return;
            }

            addonServicesList.addEventListener("change", (event) => {
                const checkbox = event.target.closest('input[type="checkbox"]');

                if (!checkbox) {
                    return;
                }

                const fieldId = `addon-field-${checkbox.id}`;
                const existingField = document.getElementById(fieldId);

                if (checkbox.checked) {
                    if (existingField) {
                        return;
                    }

                    const label = addonServicesList.querySelector(`label[for="${checkbox.id}"]`);
                    const serviceName = label ? label.textContent.trim() : checkbox.id;

                    const field = document.createElement("div");
                    field.className = "col-md-4 col-sm-6 col-12";
                    field.id = fieldId;
                    field.innerHTML = `
                        <label class="fs-14 text--black-light mb-2 fw-medium" for="${checkbox.id}_value">${serviceName}</label>
                        <input type="text" id="${checkbox.id}_value" name="${checkbox.id}_value" placeholder="${serviceName}" class="form-control fs-14">
                    `;

                    addonServicesFields.appendChild(field);
                } else if (existingField) {
                    existingField.remove();
                }
            });
        });
    </script>
</body>

</html>
