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
                        <button class="sat-btn primary">New Bid</button>
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
            <div class="row mb-3">
                <div class="col-12">
                    <div class="auction--table">
                        <table>
                            <thead>
                                <tr>
                                    <th>BID ID</th>
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
                                    <td class="text-nowrap">BID-101</td>
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
                                    <td class="text-nowrap">BID-102</td>
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
                                    <td class="text-nowrap">BID-103</td>
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
                                    <td class="text-nowrap">BID-104</td>
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
                                        BID-104
                                        <br>
                                        <span class="sat-status pending-status">MANUL</span>
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
                                        BID-103
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
                                        BID-103
                                        <br>
                                        <span class="sat-status pending-status">MANUL</span>
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
                                        BID-103
                                        <br>
                                        <span class="sat-status pending-status">MANUL</span>
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
                                        BID-103
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
        </div>
    </div>
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script>
        const menu = document.querySelector('.main-content');
        const sidebar = document.querySelector('.sidebar-dashboard');

        function handleMenu(x) {
            x.classList.toggle("open");
            menu.classList.toggle("ms-0");
            sidebar.classList.toggle("closed");
        }
    </script>
</body>

</html>
