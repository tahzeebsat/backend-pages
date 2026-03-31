<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/auction.css') }}">
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
            <div class="row mb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <h2 class="cmn-heading-title">All Bidding </h2>
                        </div>
                        <button class="sat-btn primary" data-bs-toggle="modal" data-bs-target="#new_bid">New
                            Bid</button>
                    </div>
                </div>
            </div>
            {{-- values --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses">
                        <div class="card--item">
                            <h3 class="title text--grey">TOTAL BIDS</h3>
                            <p class="value text--black">580</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">WON</h3>
                            <p class="value text--green">99</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">LOST</h3>
                            <p class="value text--black">90</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">PENDING APPROVAL</h3>
                            <p class="value text--yellow">16</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">PENDING DEPOSITS</h3>
                            <p class="value text--yellow">$1,530,312</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tabs filter --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="tabs--main">
                        <input type="radio" class="btn-check" name="tabs_main" id="All_sub" autocomplete="off"
                            checked>
                        <label class="btn" for="All_sub">
                            <div class="d-flex align-items-center gap-2">
                                All <span>580</span>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="tabs_main" id="Today" autocomplete="off">
                        <label class="btn" for="Today">
                            <div class="d-flex align-items-center gap-2">
                                Today <span>8</span>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="tabs_main" id="EndedToday" autocomplete="off">
                        <label class="btn" for="EndedToday">
                            <div class="d-flex align-items-center gap-2">
                                Ended Today <span>13</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            {{-- tabs filter 2 --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="tabs--sub">
                        <input type="radio" class="btn-check" name="tabs_sub" id="All" autocomplete="off"
                            checked>
                        <label class="btn" for="All">All</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Submitted" autocomplete="off">
                        <label class="btn" for="Submitted">Submitted</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Pending Approval"
                            autocomplete="off">
                        <label class="btn" for="Pending Approval">Pending Approval</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Payment Approved"
                            autocomplete="off">
                        <label class="btn" for="Payment Approved">Payment Approved</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Won" autocomplete="off">
                        <label class="btn" for="Won">Won</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Lost" autocomplete="off">
                        <label class="btn" for="Lost">Lost</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Rejected" autocomplete="off">
                        <label class="btn" for="Rejected">Rejected</label>
                    </div>
                </div>
            </div>
            {{-- filter search --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="search--filters">
                        {{-- search --}}
                        <div class="search--item">
                            <input type="text" placeholder="Search bids, customers, stock IDs"
                                class="form-control" />
                            <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                                height="16" loading="lazy" alt="search-icon" />
                        </div>
                        {{-- All Payments --}}
                        <select class="form-select">
                            <option value="All Payments" selected>All Payments</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Card">Card</option>
                            <option value="Crypto">Crypto</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="SAT Balance">SAT Balance</option>
                        </select>
                        {{-- All Types --}}
                        <select class="form-select">
                            <option value="" selected>All Types</option>
                            <option value="Single">Single</option>
                            <option value="Bundle">Bundle</option>
                        </select>
                        {{-- All Sites --}}
                        <select class="form-select">
                            <option value="All Sites" selected>All Sites</option>
                            <option value="HAA Kobe">HAA Kobe</option>
                            <option value="JU Saitama">JU Saitama</option>
                            <option value="JU Tokyo">JU Tokyo</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- tables --}}
            <div class="row">
                <div class="col-12">
                    <div class="auction--table">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check_all">
                                            <label class="form-check-label mb-0 ms-1" for="check_all">
                                                BID ID
                                            </label>
                                        </div>
                                    </th>
                                    <th>CUSTOMER</th>
                                    <th>TYPE</th>
                                    <th>STOCK / LOT</th>
                                    <th>SITE</th>
                                    <th>REQ <br> QTY</th>
                                    <th>BID/CAR</th>
                                    <th>TOTAL</th>
                                    <th>DEPOSIT</th>
                                    <th>PAYMENT</th>
                                    <th>SAT BAL</th>
                                    <th>STATUS</th>
                                    <th>TIMER</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="bid101">
                                            <label class="form-check-label mb-0 ms-1" for="bid101">
                                                BID-101
                                            </label>
                                        </div>
                                    </td>
                                    <td>Tanaka Motors</td>
                                    <td><span class="sat-status single-status">SINGLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-4421</span>
                                        <br>
                                        <span class="text--grey">LOT-8832</span>
                                    </td>
                                    <td>USS Tokyo</td>
                                    <td>1</td>
                                    <td>$8,500</td>
                                    <td>$8,500</td>
                                    <td>
                                        <span class="text--green">Paid</span>
                                        <br>
                                        <span>$850</span>
                                    </td>
                                    <td>Card</td>
                                    <td class="text--blue-secondary-light">$1,500</td>
                                    <td>
                                        <span class="sat-status submitted-status">SUBMITTED</span>
                                    </td>
                                    <td>
                                        Ended 20h ago
                                    </td>
                                    <td>
                                        <button class="sat-btn btn--sm light">Review</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-102">
                                            <label class="form-check-label mb-0 ms-1" for="BID-102">
                                                BID-102
                                            </label>
                                        </div>
                                    </td>
                                    <td>Pacific Auto Group</td>
                                    <td><span class="sat-status bundle-status">BUNDLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-5501 +1</span>
                                        <br>
                                        <span class="text--grey">LOT-9001</span>
                                    </td>
                                    <td>TAA Yokohama</td>
                                    <td>8</td>
                                    <td>$5,250</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--yellow">Pending</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>Bank Transfer</td>
                                    <td class="text--blue-secondary-light">$3,200</td>
                                    <td>
                                        <span class="sat-status pending-status">PENDING APPROVAL</span>
                                    </td>
                                    <td>
                                        <div class="text--yellow">Waiting for approval</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm primary">Approve</button>
                                            <button class="sat-btn btn--sm danger">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-103">
                                            <label class="form-check-label mb-0 ms-1" for="BID-103">
                                                BID-103
                                            </label>
                                        </div>
                                    </td>
                                    <td>Oceania Exports Ltd</td>
                                    <td><span class="sat-status single-status">SINGLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--green">Paid</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>PayPal</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status won-status">WON</span>
                                    </td>
                                    <td>
                                        Ended 3d ago
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm success">Create Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-104">
                                            <label class="form-check-label mb-0 ms-1" for="BID-104">
                                                BID-104
                                            </label>
                                        </div>
                                    </td>
                                    <td>Euro Car Imports</td>
                                    <td><span class="sat-status single-status">SINGLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--green">Paid</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>PayPal</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status lost-status">LOST</span>
                                    </td>
                                    <td>
                                        Ended 3d ago
                                    </td>
                                    <td>
                                        <div class="text--grey">Sold: $16,200 (+8%)</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-105">
                                            <label class="form-check-label mb-0 ms-1" for="BID-105">
                                                BID-105
                                                <br>
                                                <span class="sat-status pending-status">MANUL</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Euro Car Imports</td>
                                    <td><span class="sat-status single-status">SINGLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--yellow">Pending</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>PayPal</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status pending-status">PENDING APPROVAL</span>
                                    </td>
                                    <td>
                                        Waiting for approval
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm primary">Approve</button>
                                            <button class="sat-btn btn--sm danger">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-106">
                                            <label class="form-check-label mb-0 ms-1" for="BID-106">
                                                BID-106
                                            </label>
                                        </div>
                                    </td>
                                    <td>Oceania Exports Ltd</td>
                                    <td><span class="sat-status bundle-status">BUNDLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--green">Paid</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>SAT Balance</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status won-status">Won</span>
                                    </td>
                                    <td>
                                        Ended 3d ago
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm success">Create Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-107">
                                            <label class="form-check-label mb-0 ms-1" for="BID-107">
                                                BID-107
                                                <br>
                                                <span class="sat-status pending-status">MANUL</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Oceania Exports Ltd</td>
                                    <td><span class="sat-status bundle-status">BUNDLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--yellow">Pending</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>SAT Balance</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status approved-status">Payment Approved</span>
                                    </td>
                                    <td>
                                        Ended 3d ago
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm danger">Update Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-107">
                                            <label class="form-check-label mb-0 ms-1" for="BID-107">
                                                BID-107
                                                <br>
                                                <span class="sat-status pending-status">MANUL</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Oceania Exports Ltd</td>
                                    <td><span class="sat-status bundle-status">BUNDLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--green">Paid</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>SAT Balance</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status submitted-status">SUBMITTED</span>
                                    </td>
                                    <td>
                                        Ended 20h ago
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm light">Review</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="BID-108">
                                            <label class="form-check-label mb-0 ms-1" for="BID-108">
                                                BID-108
                                            </label>
                                        </div>
                                    </td>
                                    <td>Oceania Exports Ltd</td>
                                    <td><span class="sat-status single-status">SINGLE</span></td>
                                    <td>
                                        <span class="text--blue-secondary-light">STK-3310</span>
                                        <br>
                                        <span class="text--grey">LOT-7741</span>
                                    </td>
                                    <td>USS Nagoya</td>
                                    <td>1</td>
                                    <td>$12,500</td>
                                    <td>$42,000</td>
                                    <td>
                                        <span class="text--yellow">Pending</span>
                                        <br>
                                        <span>$4,200</span>
                                    </td>
                                    <td>SAT Balance</td>
                                    <td class="text--blue-secondary-light">$800</td>
                                    <td>
                                        <span class="sat-status rejected-status">Rejected</span>
                                    </td>
                                    <td>
                                        Ended 20h ago
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-column gap-2">
                                            <button class="sat-btn btn--sm grey">View</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- pagination --}}
            <div class="row">
                <div class="col-12">
                    <div class="txn-pagination">
                        <!-- <button class="page-btn is-disabled" aria-label="First page"><i class="fas fa-angle-double-left"></i></button> -->
                        <button class="page-btn is-disabled" aria-label="Previous page">
                            ‹ Previous
                        </button>

                        <button class="page-btn">1</button>
                        <button class="page-btn is-active">2</button>
                        <button class="page-btn">3</button>
                        <span class="page-ellipsis">...</span>
                        <button class="page-btn">12</button>

                        <button class="page-btn" aria-label="Next page">
                            Next Page ›
                        </button>
                        <!-- <button class="page-btn" aria-label="Last page"><i class="fas fa-angle-double-right"></i></button> -->
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
    {{-- new bid modal --}}
    <div class="modal fade new_bid" id="new_bid" tabindex="-1" aria-labelledby="new_bidLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">New Bid</h1>
                        <span class="sat-status modal-manual-status">Manual</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- tabs --}}
                    <div>
                        <ul class="nav nav-tabs" id="newbid_tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="customer" data-bs-toggle="tab"
                                    data-bs-target="#customer-pane" type="button" role="tab"
                                    aria-controls="customer-pane" aria-selected="true">
                                    <span class="count">1</span>
                                    Customer
                                </button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bid-type" data-bs-toggle="tab"
                                    data-bs-target="#bid-type-pane" type="button" role="tab"
                                    aria-controls="bid-type-pane" aria-selected="false">
                                    <span class="count">2</span>
                                    Bid Type</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="car-details" data-bs-toggle="tab"
                                    data-bs-target="#car-details-pane" type="button" role="tab"
                                    aria-controls="car-details-pane" aria-selected="false">
                                    <span class="count">3</span>
                                    Car Details</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bid-details" data-bs-toggle="tab"
                                    data-bs-target="#bid-details-pane" type="button" role="tab"
                                    aria-controls="bid-details-pane" aria-selected="false">
                                    <span class="count">4</span>
                                    Bid Details</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="deposit" data-bs-toggle="tab"
                                    data-bs-target="#deposit-pane" type="button" role="tab"
                                    aria-controls="deposit-pane" aria-selected="false"><span
                                        class="count">5</span>Deposit</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="notes" data-bs-toggle="tab"
                                    data-bs-target="#notes-pane" type="button" role="tab"
                                    aria-controls="notes-pane" aria-selected="false"><span
                                        class="count">6</span>Notes</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="submit" data-bs-toggle="tab"
                                    data-bs-target="#submit-pane" type="button" role="tab"
                                    aria-controls="submit-pane" aria-selected="false"><span
                                        class="count">7</span>Submit</button>
                            </li>
                        </ul>
                    </div>
                    {{-- tabs items --}}
                    <div class="tab-content" id="newbid_tabs_items">
                        {{-- customer --}}
                        <div class="tab-pane show active" id="customer-pane" role="tabpanel"
                            aria-labelledby="customer-pane" tabindex="0">
                            {{-- search action --}}
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="tab--title">Customer</h2>
                                <button id="toggle_customer" class="sat-btn btn--sm primary-outline"><img
                                        src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                                        style="filter: brightness(0%);" loading="lazy" height="16" width="16"
                                        alt="icon">New Customer</button>
                            </div>
                            {{-- for existing customer --}}
                            <div class="toggle-existing">
                                {{-- search --}}
                                <div class="search--item">
                                    <input type="text" placeholder="Search by name or email..."
                                        class="form-control">
                                    <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                                        height="16" loading="lazy" alt="search-icon" />
                                </div>
                                {{-- customer listing --}}
                                <ul class="customer--listing">
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                </ul>
                                {{-- selected customer --}}
                                <div class="selected--customer">
                                    <div class="customer--item">
                                        <h2 class="title">Pacific Auto Group</h2>
                                        <p class="para">info@pacificauto.com <span>+81-3-1234-5678</span></p>
                                        <p class="sat--balance">SAT Balance: $1500</p>
                                    </div>
                                    <div class="value">SAT $1500</div>
                                </div>
                            </div>
                            {{-- for new customer --}}
                            <div class="toggle-new d-none">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="text--grey fw-normal">Customer Name</label>
                                        <input type="text" class="form-control" placeholder="e.g. STK-4421">
                                    </div>
                                    <div class="col-6">
                                        <label class="text--grey fw-normal">Email</label>
                                        <input type="text" class="form-control"
                                            placeholder="e.g. info@pacificauto.com">
                                    </div>
                                    <div class="col-6">
                                        <label class="text--grey fw-normal">Phone</label>
                                        <input type="text" class="form-control"
                                            placeholder="e.g. +81-3-1234-5678">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bid type --}}
                        <div class="tab-pane" id="bid-type-pane" role="tabpanel" aria-labelledby="bid-type-pane"
                            tabindex="0">
                            <div class="bid--type">
                                <h2 class="tab--title">BID TYPE</h2>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="bid--type-selection">
                                            <input type="radio" class="btn-check" name="bid_type" id="single_bid"
                                                autocomplete="off">
                                            <label class="btn mb-0" for="single_bid">
                                                <h3 class="title">Single Bid</h3>
                                                <p class="para">Bid on one specific vehicle</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bid--type-selection">
                                            <input type="radio" class="btn-check" name="bid_type" id="bundle_bid"
                                                checked autocomplete="off">
                                            <label class="btn mb-0" for="bundle_bid">
                                                <h3 class="title">Bundle Bid</h3>
                                                <p class="para">Bid on multiple vehicles as a package</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- car details --}}
                        <div class="tab-pane" id="car-details-pane" role="tabpanel"
                            aria-labelledby="car-details-pane" tabindex="0">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="tab--title">Car Details</h2>
                                <button class="sat-btn btn--sm secondary-light-outline"><img
                                        src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                                        style="filter: brightness(0%);" loading="lazy" height="16" width="16"
                                        alt="icon">Add Another Car</button>
                            </div>
                            {{-- car list --}}
                            <div class="cardetail_listing mt-3">
                                <div class="car--detail-card">
                                    <div class="title--detail-card mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="sat-status approved-status car--count">Car 1</span>
                                            <span class="stock-number">STK-4421</span>
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center gap-2">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                            <label class="form-check-label mb-0" for="Manual Entry">Manual
                                                Entry</label>
                                        </div>
                                    </div>
                                    {{-- manual entry --}}
                                    <div class="manual--entry">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="text--grey fw-normal">Lot Number *</label>
                                                <input type="text" class="form-control"
                                                    placeholder="LOT-8832">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="text--grey fw-normal">Auction Site *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label class="text--grey fw-normal">Car Details (optional)</label>
                                                <textarea rows="4" class="form-control" placeholder="Car Detail"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- not manual entry --}}
                                    <div class="manual--entry d-none">
                                          <div class="row g-3">
                                            <div class="col-12">
                                                <label class="text--grey fw-normal">Stock ID *</label>
                                                <input type="text" class="form-control" placeholder="STK-4421">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bid details --}}
                        <div class="tab-pane" id="bid-details-pane" role="tabpanel"
                            aria-labelledby="bid-details-pane" tabindex="0">Bid Details</div>
                        {{-- deposit --}}
                        <div class="tab-pane" id="deposit-pane" role="tabpanel" aria-labelledby="deposit-pane"
                            tabindex="0">Deposit</div>
                        {{-- notes --}}
                        <div class="tab-pane" id="notes-pane" role="tabpanel" aria-labelledby="notes-pane"
                            tabindex="0">Notes</div>
                        {{-- submit --}}
                        <div class="tab-pane" id="submit-pane" role="tabpanel" aria-labelledby="submit-pane"
                            tabindex="0">Submit</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="sat-btn grey text--blue" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="sat-btn primary">Next</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    {{-- menu show hide --}}
    <script>
        const menu = document.querySelector('.main-content');
        const sidebar = document.querySelector('.sidebar-dashboard');

        function handleMenu(x) {
            x.classList.toggle("open");
            menu.classList.toggle("ms-0");
            sidebar.classList.toggle("closed");
        }
    </script>
    {{-- customer show hide --}}
    <script>
        const btn = document.getElementById('toggle_customer');
        const existingDiv = document.querySelector('.toggle-existing');
        const newDiv = document.querySelector('.toggle-new');

        btn.addEventListener('click', function() {

            existingDiv.classList.toggle('d-none');
            newDiv.classList.toggle('d-none');

            // Change button text
            if (existingDiv.classList.contains('d-none')) {
                btn.innerHTML = `Search Existing`;
                btn.classList.remove('primary-outline')
                btn.classList.add('primary')
            } else {
                btn.innerHTML = `
                <img src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                style="filter: brightness(0%);" height="16" width="16">
                New Customer
                `;
                btn.classList.remove('primary')
                btn.classList.add('primary-outline')
            }
        });
    </script>
    {{-- manual entry cardetail + new cards --}}
    <script>
        document.addEventListener('change', function (e) {
            if (e.target.matches('.form-check-input')) {
                const card = e.target.closest('.car--detail-card');
                const sections = card.querySelectorAll('.manual--entry');

                sections.forEach((section, index) => {
                    section.classList.toggle('d-none', index === 0 ? !e.target.checked : e.target.checked);
                });
            }
        });
        document.querySelector('.secondary-light-outline').addEventListener('click', function () {
            const container = document.querySelector('.cardetail_listing');
            const count = container.querySelectorAll('.car--detail-card').length + 1;

            const card = `
                <div class="car--detail-card">
                    <div class="title--detail-card mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="sat-status approved-status car--count">Car ${count}</span>
                            <span class="stock-number">STK-XXXX</span>
                        </div>
                        <div class="form-check form-switch d-flex align-items-center gap-2">
                            <input class="form-check-input" type="checkbox" role="switch" checked>
                            <label class="form-check-label mb-0">Manual Entry</label>
                        </div>
                    </div>

                    <div class="manual--entry">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="text--grey fw-normal">Lot Number *</label>
                                <input type="text" class="form-control" placeholder="LOT-8832">
                            </div>
                            <div class="col-md-6">
                                <label class="text--grey fw-normal">Auction Site *</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="text--grey fw-normal">Car Details (optional)</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="manual--entry d-none">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="text--grey fw-normal">Stock ID *</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', card);
        });
    </script>
</body>

</html>
