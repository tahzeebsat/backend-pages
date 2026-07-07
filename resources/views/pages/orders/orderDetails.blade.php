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
        <div class="main-section w-100 bg-grey">
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
                                <h2 class="cmn-heading-title">Orders Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-4 pb-3">
                {{-- title --}}
                <div class="col-12">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="d-flex align-items-center gap-2">
                            <svg class="cursor-pointer" onclick="window.history.back()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-5 w-5"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                            <div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="text--blue fs-4 fw-semibold lh-sm">ORD-301</span>
                                    <span class="sat-status lh-1 lh-1 from-status">Preparing</span>
                                    <span class="sat-status lh-1 lh-1 won-status px-4">Paid</span>
                                    <span class="sat-status lh-1 lh-1 manual-status gap-1"><img src="{{asset('/assets/images/icons/computer-line.svg')}}" height="18" width="18" alt="desktop"> Desktop</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 mt-1">
                                <span class="fs-14 text--grey"> Created : Apr 24-2026-08:45:00</span>
                                <span class="sat-status lh-1 lh-1 from-status">From Bid</span>
                            </div>
                            </div>
                            </div>
                    </div>
                </div>
                {{-- customer info / Financial breakdown --}}
                 <div class="col-md-7">
                    <div class="sat--sheet h-100 shadow--sm p-4 br-8">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <h5 class="fs-16 fw-semibold mb-0">Customer Information</h5>
                            <div>
                                <span class="sat-status lh-1 lh-1 manual-status gap-1">
                                    Dealer
                                </span>
                            </div>
                        </div>
                        <div class="mt-2 pt-1">
                            <div class="grid-cmn-2">
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Name</span>
                                    <span class="fs-14 fw-semibold text--black">Ahmad Rashid</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Phone</span>
                                    <span class="fs-14 fw-semibold text--black">+092-1254-988</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Email</span>
                                    <span class="fs-14 fw-semibold text--black">Ahmadrashid@gmail.com</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Customer ID </span>
                                    <span class="fs-14 fw-semibold text--black">C-1001</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">SAT Balance</span>
                                    <span class="fs-14 fw-semibold text--black">$12,000</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-1 mt-2 pt-1">
                                <div class="fs-14 fw-normal text--black-light">Previous Orders <span class="text--blue">(2)</span> </div>
                                <div class="d-flex gap-1">
                                    <a href="/" class="fs-14 fw-normal text--blue">ORD-1001</a>
                                    <a href="/" class="fs-14 fw-normal text--blue">Ored-1002</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5">
                    <div class="sat--sheet shadow--sm p-4 br-8">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <h5 class="fs-16 fw-semibold mb-0">Financial Breakdown</h5>
                            <button class="sat-btn btn--sm light" data-bs-target="#add_new_charge" data-bs-toggle="modal">Add New Charge</button>
                        </div>
                        <div class="mt-2 pt-1">
                            <div class="sat--sheet p-0 rounded">
                                <div class="border-bottom bg--blue-light px-2 py-2 rounded-top">
                                    <h3 class="mb-0 fs-6 fw-semibold">Charges</h3>
                                </div>
                                <div>
                                    <table class="w-100">
                                        <thead>
                                            <tr>
                                                <th width="20%" class="fw-semibold fs-14 p-2 border-bottom">Charge</th>
                                                <th width="20%" class="fw-semibold fs-14 p-2 border-bottom">Amount</th>
                                                <th width="20%" class="fw-semibold fs-14 p-2 border-bottom">Paid</th>
                                                <th width="20%" class="fw-semibold fs-14 p-2 border-bottom">Due</th>
                                                <th width="20%" class="fw-semibold fs-14 p-2 border-bottom">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    Car Price
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    $78,000
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    $78,000
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    $0
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    <span class="sat-status lh-1 won-status">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                  Shipping
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom text--blue" data-charge-id="123" data-title="Shipping Cost" onclick="handleAskClick(this)">
                                                   <span class="cursor-pointer" data-bs-target="#ask_modal" data-bs-toggle="modal">ASK</span>
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    --
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    --
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    <span class="sat-status lh-1 from-status">Awaiting Quote</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    Handling Fee
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom text--blue" data-charge-id="345" data-title="Handling Fee" onclick="handleAskClick(this)">
                                                   <span class="cursor-pointer" data-bs-target="#ask_modal" data-bs-toggle="modal">ASK</span>
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    $78,000
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    $0
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                    <span class="sat-status lh-1 won-status">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-2 fs-14 fw-semibold border-bottom">
                                                    Total
                                                </td>
                                                <td class="p-2 fs-14 fw-semibold border-bottom">
                                                    $156,000
                                                </td>
                                                <td class="p-2 fs-14 fw-semibold border-bottom">
                                                    $156,000
                                                </td>
                                                <td class="p-2 fs-14 fw-semibold border-bottom">
                                                    $0
                                                </td>
                                                <td class="p-2 fs-14 fw-medium border-bottom">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 pt-1">
                            <p class="text--black-light fs-14 fw-medium mb-0">
                                Order Total is shown as <b class="text--blue">ASK</b> bcz one required charge does not have a fixed amount yet. The customer has already paid $78,000 against the confirmed charges.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Vehicle information / Status --}}
                   <div class="col-md-7">
                     <div class="sat--sheet shadow--sm p-4 br-8 mb-4">
                        <h5 class="fs-16 fw-semibold mb-0">Vehicle information</h5>
                        <div class="mt-2 pt-1">
                            <div class="grid-cmn-2 mb-3">
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Vehicle</span>
                                    <span class="fs-14 fw-semibold text--black">2024 Toyota Land Cruiser</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Stock ID</span>
                                    <span class="fs-14 fw-semibold text--black">1001002</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Chassis</span>
                                    <span class="fs-14 fw-semibold text--black">dfg424542453245fgfd</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Quantity</span>
                                    <span class="fs-14 fw-semibold text--black">01</span>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Inspection</span>
                                     <select class="form-select">
                                        <option value="" selected>Passed</option>
                                        <option value="">Failed</option>
                                        <option value="">Pending</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <span class="fs-14 fw-normal text--black-light">Availability</span>
                                     <select class="form-select">
                                        <option value="" selected>Available</option>
                                        <option value="">Not Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Payment Proof / Payment History /Selected Services --}}
                    <div class="sat--sheet p-4 br-8 shadow--sm mb-4">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <h5 class="fs-16 fw-semibold mb-0">Payment Proof</h5>
                            <button class="sat-btn light px-4 py-2" data-bs-target="#upload_payment_proof" data-bs-toggle="modal"><img src="{{asset('/assets/images/icons/upload-line-black.svg')}}" height="18" width="18" alt="desktop"> Upload</button>
                        </div>
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th class="border-bottom fs-6 fw-semibold p-2">Date</th>
                                    <th class="border-bottom fs-6 fw-semibold p-2">Status</th>
                                    <th class="border-bottom fs-6 fw-semibold p-2">Image</th>
                                    <th class="border-bottom fs-6 fw-semibold p-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        Mar 18, 2026
                                    </td>

                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        <span class="sat-status lh-1 pending-status">Pending Review</span>
                                    </td>

                                  <td class="p-2 border-bottom fs-6 fw-normal">
                                        <img 
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-4TRet4nlXB-nUYD0kruE3j8aHu7caQeTesPhIOMyqA&s=10"
                                            class="cursor-pointer object-fit-contain rounded border"
                                            width="60"
                                            height="60"
                                            loading="lazy"
                                            alt="img proof"
                                            data-bs-target="#show_proof_payment"
                                            data-bs-toggle="modal"
                                            onclick="showProofPayment(this)"
                                        >
                                    </td>

                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('/assets/images/icons/check-circle-green.svg') }}"
                                                height="18"
                                                width="18"
                                                alt="confirm"
                                                class="cursor-pointer">

                                            <img src="{{ asset('/assets/images/icons/cancel-cross.svg') }}"
                                                data-bs-target="#reject_payment"
                                                data-bs-toggle="modal"
                                                height="18"
                                                width="18"
                                                alt="reject"
                                                class="cursor-pointer">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        Mar 20, 2026
                                    </td>

                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        <span class="sat-status lh-1 pending-status">Pending Review</span>
                                    </td>

                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        <img 
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ic3rdykGMB-cl2ZzQUPc8ryBvWCxBw_BEs2aGQtS7w&s=10"
                                            class="cursor-pointer object-fit-contain rounded border"
                                            width="60"
                                            height="60"
                                            loading="lazy"
                                            alt="img proof"
                                            data-bs-target="#show_proof_payment"
                                            data-bs-toggle="modal"
                                            onclick="showProofPayment(this)"
                                        >
                                    </td>

                                    <td class="p-2 border-bottom fs-6 fw-normal">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('/assets/images/icons/check-circle-green.svg') }}"
                                                height="18"
                                                width="18"
                                                alt="confirm"
                                                class="cursor-pointer">

                                            <img src="{{ asset('/assets/images/icons/cancel-cross.svg') }}"
                                                data-bs-target="#reject_payment"
                                                data-bs-toggle="modal"
                                                height="18"
                                                width="18"
                                                alt="reject"
                                                class="cursor-pointer">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-center d-none">
                            <p class="fs-6 text--black-light mb-3">No Proof uploaded yet</p>
                        </div>
                    </div>
                    {{-- payment history --}}
                    <div class="sat--sheet p-4 shadow--sm br-8 mb-4">
                       <div class="d-flex align-items-center gap-2 justify-content-between mb-2 pb-1">
                        <h5 class="fs-16 fw-semibold">Payment History</h5>
                        <button class="sat-btn light px-4 py-2" data-bs-target="#add_payment" data-bs-toggle="modal"><img src="{{asset('/assets/images/icons/upload-line-black.svg')}}" height="18" width="18" alt="desktop"> Upload</button>
                        </div>
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Date
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Amount
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Method
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Reference
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Allocations
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="valign-baseline">
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Mar 18.2026
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        $82,000
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Card
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Txn-card-88
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Car Price (USD) = 78,000
                                        <br>
                                        Handling Fee (USD) = 78,000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex flex-column gap-1 mt-2 pt-1">
                                <div class="fs-14 fw-normal text--black-light">Previous Orders <span class="text--blue">(2)</span> </div>
                                <div class="d-flex gap-1">
                                    <a href="/" class="fs-14 fw-normal text--blue">ORD-1001</a>
                                    <a href="/" class="fs-14 fw-normal text--blue">Ored-1002</a>
                                </div>
                            </div>
                    </div>
                    {{-- selected services --}}
                    <div class="sat--sheet p-4 br-8 shadow--sm br-8 mb-4">
                        <h5 class="fs-16 fw-semibold mb-0">Selected Services</h5>
                        <div class="d-flex align-items-center flex-wrap gap-2 mt-2">
                            <span class="sat-status lh-1 approved-status fw-semibold">Insurance service</span>
                            <span class="sat-status lh-1 approved-status fw-semibold">Pre export inspection</span>
                        </div>
                    </div>
                    {{-- Consignee / Notify Party / Team / Notes --}}
                    <div class="grid-cmn-2 mb-4 gap-3">
                        <div class="sat--sheet p-4 shadow--sm br-8">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                           <h5 class="fs-16 fw-semibold mb-0">Consignee</h5>
                             <img src="{{asset('/assets/images/icons/edit-pencil-black.svg')}}" class="cursor-pointer" height="24" width="24" alt="icon" data-bs-toggle="modal" data-bs-target="#consignee">
                            </div>
                              <div class="mt-2 pt-1">
                                <p class="fs-14 fw-semibold mb-1 text--black">Ahmad Rashid Trading</p>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">Ahmad.com</a>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">+3254643464354</a>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">UAE</a>
                              </div>
                              <div class="mt-2 pt-1 d-none">
                                <p class="mb-3 fs-6 text--black-light">Not set</p>
                            </div>
                        </div>
                        <div class="sat--sheet p-4 shadow--sm br-8">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <h5 class="fs-16 fw-semibold mb-0">Notify Party</h5>
                                <img src="{{asset('/assets/images/icons/edit-pencil-black.svg')}}" class="cursor-pointer" height="24" width="24" alt="icon" data-bs-toggle="modal" data-bs-target="#notify_party">
                            </div>
                             <div class="mt-2 pt-1">
                                <p class="fs-14 fw-semibold mb-1 text--black">Ahmad Rashid Trading</p>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">Ahmad.com</a>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">+3254643464354</a>
                                <a href="" class="fs-12 text-decoration-none d-block fw-normal text--grey">UAE</a>
                              </div>
                            <div class="mt-2 pt-1 d-none">
                                <p class="mb-3 fs-6 text--black-light">Not set</p>
                            </div>
                       </div>
                    </div>
                    <div class="grid-cmn-2 mb-4 gap-3">
                         <div class="sat--sheet p-4 shadow--sm br-8">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <h5 class="fs-16 fw-semibold mb-0">Shipment</h5>
                                <button class="sat-btn light px-4 py-2" data-bs-target="#add_shipment" data-bs-toggle="modal">Add</button>
                            </div>
                             <div class="mt-2 pt-1">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Carrier</span>
                                    <span class="text--black fw-semibold fs-14">Maersk Shipping</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Vessel</span>
                                    <span class="text--black fw-semibold fs-14">Maersk Sealand</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Voyage</span>
                                    <span class="text--black fw-semibold fs-14">V-2026-112</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Type</span>
                                    <span class="sat-status lh-1 manual-status">RORO</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">From</span>
                                    <span class="text--black fw-semibold fs-14">Yokohama, Japan</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">To</span>
                                    <span class="text--black fw-semibold fs-14">Shanghai, China</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">ETD</span>
                                    <span class="text--black fw-semibold fs-14">2026-03-17</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">ETA</span>
                                    <span class="text--black fw-semibold fs-14">2026-03-17</span>
                                </div>
                              </div>
                            <div class="mt-2 pt-1 d-none">
                                <p class="fs-6 text--black-light mb-3 text-center">Not Shipment yet</p>
                            </div>
                        </div>
                        <div class="sat--sheet p-4 shadow--sm br-8">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <h5 class="fs-16 fw-semibold mb-0">Courier</h5>
                                <button class="sat-btn light px-4 py-2" data-bs-target="#courier_modal" data-bs-toggle="modal">Add</button>
                            </div>
                            <div class="mt-2 pt-1">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Name</span>
                                    <span class="text--black fw-semibold fs-14">DHL Express</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text--black-light fw-medium fs-14">Tracking</span>
                                    <span class="text--black fw-semibold fs-14">DHL-99283746</span>
                                </div>
                              </div>
                            <div class="mt-2 pt-1 d-none">
                                <p class="fs-6 text--black-light mb-3 text-center">Not Courier yet</p>
                            </div>
                       </div>
                    </div>
                    {{-- Documents --}}
                    <div class="sat--sheet p-4 shadow--sm br-8 mb-4">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                                <h5 class="fs-16 fw-semibold mb-0">Documents</h5>
                                <button class="sat-btn light px-4 py-2" data-bs-target="#upload_doc_modal" data-bs-toggle="modal"><img src="{{asset('/assets/images/icons/upload-line-black.svg')}}" height="18" width="18" alt="desktop"/> Upload</button>
                            </div>
                             <div class="mt-2 pt-1">
                          <table class="w-100">
                             <thead>
                                <tr>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Type
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        File
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Uploaded By
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Date
                                    </th>
                                    <th class="border-bottom fs-14 fw-semibold p-2">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                              <tbody>
                                <tr>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        <span class="sat-status lh-1 approved-status fw-semibold">Pre export inspection</span>
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                       Invoice-pdf
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Sara Ali
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Mar19,26
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{asset('/assets/images/icons/eye-blue.svg')}}" class="cursor-pointer" height="18" width="18" alt="icon">
                                            <img src="{{asset('/assets/images/icons/download-line-blue.svg')}}" height="18" width="18" alt="icon">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        <span class="sat-status lh-1 approved-status fw-semibold">Pre export inspection</span>
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                       Invoice-pdf
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Sara Ali
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        Mar19,26
                                    </td>
                                    <td class="p-2 border-bottom fs-14 fw-normal">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{asset('/assets/images/icons/eye-blue.svg')}}" class="cursor-pointer" height="18" width="18" alt="icon">
                                            <img src="{{asset('/assets/images/icons/download-line-blue.svg')}}" class="cursor-pointer" height="18" width="18" alt="icon">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    {{-- Activity Log --}}
                    <div class="sat--sheet p-4 shadow--sm br-8">
                        <h5 class="fs-16 fw-semibold mb-0">Activity Log</h5>
                        <div class="mt-2 pt-1">
                            <ul class="activity-log list-unstyled mb-0">

                                <li class="activity-item">
                                    <span class="activity-dot activity-dot--blue"></span>
                                    <div class="activity-content">
                                        <p class="activity-title">Document uploaded : invoice-ord001.pdf</p>
                                        <p class="activity-meta">Created : Apr 24-2026-08:45:00</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <span class="activity-dot activity-dot--blue"></span>
                                    <div class="activity-content">
                                        <p class="activity-title">Document uploaded : invoice-ord001.pdf</p>
                                        <p class="activity-meta">Created : Apr 24-2026-08:45:00</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <span class="activity-dot activity-dot--blue"></span>
                                    <div class="activity-content">
                                        <p class="activity-title">Document uploaded : invoice-ord001.pdf</p>
                                        <p class="activity-meta">Created : Apr 24-2026-08:45:00</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <span class="activity-dot activity-dot--blue"></span>
                                    <div class="activity-content">
                                        <p class="activity-title">Order Created</p>
                                        <p class="activity-meta">Source: Bid</p>
                                        <p class="activity-meta">Created : Apr 24-2026-08:45:00</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <span class="activity-dot activity-dot--green"></span>
                                    <div class="activity-content">
                                        <p class="activity-title">Payment of $85,000 received</p>
                                        <p class="activity-meta">Method: Card . Ref Txn-card-88321</p>
                                        <p class="activity-meta">Created : Apr 24-2026-08:45:00.System</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                  </div>
                 <div class="col-md-5">
                    <div class="sat--sheet p-4 br-8 mb-4 shadow--sm br-8">
                        <h5 class="fs-16 fw-semibold mb-0">Status</h5>
                        <div class="mt-2 pt-1">
                           <div class="sat--sheet">
                                <h4 class="text--black-light fw-semibold fs-14 mb-2">Order Status</h4>
                                <select class="form-select bg--grey">
                                    <option value="" selected>Preparing</option>
                                </select>
                           </div>
                        </div>
                    </div>
                    <div class="sat--sheet p-4 mb-4 shadow--sm br-8">
                        <h5 class="fs-16 fw-semibold mb-0">Team</h5>
                        <div class="mt-2 pt-1">
                            <div class="sat--sheet mb-3">
                                <p class="fs-14 fw-semibold mb-1 text--black-light">Created by</p>
                                <p class="fs-14 fw-semibold mb-1 text--black">Admin</p>
                                <p class="fs-12 fw-semibold mb-0 text--grey">Admin@company.com</p>
                            </div>
                            <div class="order--separator mb-3" style="border-color: #aeb1b845"></div>
                            <div class="sat--sheet">
                                <p class="fs-14 fw-semibold mb-1 text--black-light">Support agent</p>
                                <p class="fs-14 fw-semibold mb-1 text--black">Admin</p>
                                <p class="fs-12 fw-semibold mb-0 text--grey">Admin@company.com</p>
                            </div>
                        </div>
                       </div>
                        <div class="sat--sheet p-4 br-8">
                            <h5 class="fs-16 fw-semibold mb-0">Notes</h5>
                           <div class="mt-2 pt-1">
                            <textarea class="form-control bg--grey py-2 px-3 fs-14" placeholder="Add internal notes" style="height: auto" rows="6"></textarea>
                            <button class="sat-btn primary w-100 mt-3">Save Notes</button>
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
    {{-- notify / consignee --}}
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
    @component('components.order-modals.ask-modal')
        ask_modal
    @endcomponent
    @component('components.order-modals.reject-payment')
        reject payment
    @endcomponent
    @component('components.order-modals.show-proof')
        Show Proof
    @endcomponent
    @component('components.order-modals.add-new-charge')
        add_new_charge
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
        document.querySelectorAll('.swap--wrapper-img').forEach(wrapper => {
        const upload        = wrapper.querySelector('.image-upload');
        const dropArea      = wrapper.querySelector('.drop-area');
        const fileInput     = wrapper.querySelector('.file-input');
        const uploadSection = wrapper.querySelector('.payment--proof-upload');
        const proofSection  = wrapper.querySelector('.uploaded--image-proof');

        if (!upload || !proofSection) return; // wrapper missing required parts

        const proofImg  = proofSection.querySelector('.proof-img');
        const removeBtn = proofSection.querySelector('.proof--remove-btn');

        dropArea.addEventListener("click", () => fileInput.click());

        fileInput.addEventListener("change", (e) => {
            handleFileImage(e.target.files[0], proofSection, proofImg, uploadSection);
        });

        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropArea.style.border = "2px dashed #4A90E2";
        });

        dropArea.addEventListener("dragleave", () => {
            dropArea.style.border = "1px solid var(--color-grey-border)";
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            dropArea.style.border = "1px solid var(--color-grey-border)";
            handleFileImage(e.dataTransfer.files[0], proofSection, proofImg, uploadSection);
        });

        if (removeBtn) {
            removeBtn.addEventListener("click", () => {
                proofImg.src = "";
                proofSection.style.display = "none";
                uploadSection.style.display = "";
                fileInput.value = "";
            });
        }
    });

    function handleFileImage(file, proofSection, proofImg, uploadSection) {
        if (!file) return;

        const validTypes = ["image/png", "image/jpeg"];
        if (!validTypes.includes(file.type)) {
            alert("Only PNG and JPG files are allowed.");
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            proofImg.src = e.target.result;
            proofSection.style.display = "";
            uploadSection.style.display = "none";
        };
        reader.readAsDataURL(file);
    }

    </script>
      <script>
        (function () {
        const lightbox = document.getElementById('imgLightbox');
        const lightboxImg = document.getElementById('imgLightboxImg');
        const closeBtn = document.getElementById('imgLightboxClose');

        function openLightbox(src, alt) {
            lightboxImg.src = src;
            lightboxImg.alt = alt || 'Full screen image';
            lightbox.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        // Works for one or many .proof-img images on the page
        document.querySelectorAll('.proof-img').forEach(function (img) {
            img.addEventListener('click', function () {
                openLightbox(this.src, this.alt);
            });
        });

        closeBtn.addEventListener('click', closeLightbox);

        // Close when clicking the dark backdrop (but not the image itself)
        lightbox.addEventListener('click', function (e) {
            if (e.target !== lightboxImg) closeLightbox();
        });

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeLightbox();
        });
        })();
    </script>
    <script>
    function handleAskClick(element) {
        // parent td that contains the data attributes
        const td = element.closest("td");

        if (!td) return;

        const title = td.getAttribute("data-title") || "Payment";
        const chargeId = td.getAttribute("data-charge-id") || "";

        // Update modal headings/labels
        const modalTitle = document.getElementById("title_modal_payment");
        const amountTitle = document.getElementById("title_amount");
        const chargeInput = document.getElementById("charge_id");

        if (modalTitle) {
        modalTitle.textContent = title;
        }

        if (amountTitle) {
        amountTitle.textContent = `${title} Amount`;
        }

        if (chargeInput) {
        chargeInput.value = chargeId;
        }
    }
    </script>
    <script>
    function showProofPayment(element) {
        const imageSrc = element.getAttribute("src");
        const imageAlt = element.getAttribute("alt") || "Payment Proof";

        const modalImage = document.getElementById("show_proof_payment_image");
        const modalTitle = document.getElementById("show_proof_payment_title");

        if (modalImage) {
            modalImage.src = imageSrc;
            modalImage.alt = imageAlt;
        }

        if (modalTitle) {
            modalTitle.textContent = "Payment Proof";
        }
    }
</script>
</body>

</html>
