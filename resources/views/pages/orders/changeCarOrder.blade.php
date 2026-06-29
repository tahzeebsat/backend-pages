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
                                    <h2 class="cmn-heading-title">Change Car in Order</h2>
                                    <p>Replace the current vehicle in this order</p>
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
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th class="fs-6 fw-semibole p-2">
                                        Order ID
                                    </th>
                                    <th class="fs-6 fw-semibole p-2">
                                        Customer
                                    </th>
                                    <th class="fs-6 fw-semibole p-2">
                                        Total
                                    </th>
                                    <th class="fs-6 fw-semibole p-2">
                                        Paid
                                    </th>
                                    <th class="fs-6 fw-semibole p-2">
                                        Due
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 fs-6 fw-normal">
                                        ORD-1001
                                    </td>
                                    <td class="p-2 fs-6 fw-normal">
                                        Ahmad Rashid
                                    </td>
                                    <td class="p-2 fs-6 fw-normal">
                                        $85,000
                                    </td>
                                    <td class="p-2 fs-6 fw-normal">
                                        $85,000
                                    </td>
                                    <td class="p-2 fs-6 fw-normal">
                                        $0
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="fs-6 text--grey fw-normal mb-3">Select New car</h5>
                    <div class="sat--sheet h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="bg-white order--filter mb-2">
                                <div class="search--filters mw-100">
                                    <div class="search--item">
                                        <input type="text" placeholder="Search by Customer ID, Stock, Chassis, Email..." class="form-control">
                                        <img src="http://127.0.0.1:8000/assets/images/icons/search-lg.svg" width="16" height="16" loading="lazy" alt="search-icon">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                            <div class="sat--sheet h-100" style="background:#F3FAFF">
                                    <table class="w-100">
                                        <thead>
                                            <tr>
                                                <th width="30%" class="fs-6 fw-semibole p-2">
                                                    Vehicle
                                                </th>
                                                <th width="30%" class="fs-6 fw-semibole p-2">
                                                    Price
                                                </th>
                                                <th width="30%" class="fs-6 fw-semibole p-2">
                                                    Availability
                                                </th>
                                                <th width="30%" class="fs-6 fw-semibole p-2">
                                                    Inspection
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-2 fs-6 fw-normal">
                                                    STK-100
                                                </td>
                                                <td class="p-2 fs-6 fw-normal">
                                                   $85,000
                                                </td>
                                                <td class="p-2 fs-6 fw-normal">
                                                    <span class="sat-status px-4 won-status">Available</span>
                                                </td>
                                                <td class="p-2 fs-6 fw-normal">
                                                    <span class="sat-status px-4 won-status">Passed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="fs-6 text--grey fw-normal mb-3">Current Car</h5>
                    <div class="sat--sheet">
                            <table class="w-100">
                                <thead>
                                    <tr>
                                        <th width="30%" class="fs-6 fw-semibole p-2">
                                            Stock ID
                                        </th>
                                        <th width="30%" class="fs-6 fw-semibole p-2">
                                            Vehicle
                                        </th>
                                        <th width="30%" class="fs-6 fw-semibole p-2">
                                            Price
                                        </th>
                                        <th width="30%" class="fs-6 fw-semibole p-2">
                                            Qty
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 fs-6 fw-normal">
                                            STK-100
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            Toyota Camry
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            $85,000
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            01
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="fs-6 text--grey fw-normal mb-3">Order Adjustment</h5>
                    <div class="sat--sheet">
                            <table class="w-100">
                                <thead>
                                    <tr>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            Old Car Price
                                        </th>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            New Car Price
                                        </th>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            Difference
                                        </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 fs-6 fw-normal">
                                            STK-100
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            Toyota Camry
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            $85,000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="fs-6 text--grey fw-normal mb-3">Payment Impact</h5>
                    <div class="sat--sheet">
                            <table class="w-100">
                                <thead>
                                    <tr>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            Already Paid
                                        </th>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            New Total
                                        </th>
                                        <th width="40%" class="fs-6 fw-semibole p-2">
                                            New Due
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 fs-6 fw-normal">
                                            $78,000
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                            $72,000
                                        </td>
                                        <td class="p-2 fs-6 fw-normal">
                                           $0
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="fs-6 text--grey fw-normal mb-3">Previous Car Status</h5>
                    <div class="sat--sheet">
                         <select class="form-select">
                            <option value="">Return to Inventory</option>
                            <option value="">keep as Sold</option>
                         </select>
                         <p class="fs-14 fw-normal mt-2 mb-0 text--black">Choose what to do with the previous vehicle</p>
                         <p class="fs-14 fw-normal mt-2 mb-0 text--yellow">This action will update the order, pricing, and vehicle details</p>
                    </div>
                </div>
            </div>
            {{-- action buttons --}}
            <div class="row g-3 pb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <button class="sat-btn grey-light text--red">Cancel</button>
                        <button class="sat-btn primary gap-1"><svg xmlns="http://www.w3.org/2000/svg" style="height: 16px;width:16px" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>Confirm Change</button>
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
