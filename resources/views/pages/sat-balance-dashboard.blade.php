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
                            <h2 class="cmn-heading-title">SAT Balance — Customers</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{-- values --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses grid-cmn-4">
                        <div class="card--item d-flex align-items-center gap-3">
                            <span class="icon bg--blue-light">
                                <img src="{{ asset('assets/images/icons/total-customers.svg') }}" width="26"
                                    height="26" alt="icons">
                            </span>
                            <div>
                                <h3 class="title text--grey">Total Customers</h3>
                                <p class="value text--black">04</p>
                            </div>
                        </div>
                        <div class="card--item d-flex align-items-center gap-3">
                            <span class="icon bg--red-light">
                                <img src="{{ asset('assets/images/icons/error-warning-line.svg') }}" width="26"
                                    height="26" alt="icons">
                            </span>
                            <div>
                                <h3 class="title text--grey">Negative Balance</h3>
                                <p class="value text--red">04</p>
                            </div>
                        </div>
                        <div class="card--item d-flex align-items-center gap-3">
                            <span class="icon bg--blue-light">
                                <img src="{{ asset('assets/images/icons/auto-conversations-up.svg') }}" width="26"
                                    height="26" alt="icons">
                            </span>
                            <div>
                                <h3 class="title text--grey">Total Positive Balance</h3>
                                <p class="value text--black">$62,830.00</p>
                            </div>
                        </div>
                        <div class="card--item d-flex align-items-center gap-3">
                            <span class="icon bg--red-light">
                                <img src="{{ asset('assets/images/icons/auto-conversations-down.svg') }}" width="26"
                                    height="26" alt="icons">
                            </span>
                            <div>
                                <h3 class="title text--grey">Total Outstanding Balance</h3>
                                <p class="value text--red">-$10,550.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- filters --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="search--filters justify-content-between">
                        <div class="search--item mw-100">
                            <input type="text" placeholder="Search by name, ID. email, or phone..."
                                class="form-control">
                            <img src="{{ asset('assets/images/icons/search-lg.svg') }}" width="16" height="16"
                                loading="lazy" alt="search-icon">
                        </div>
                        <select class="form-select fw-bold" style="min-width: 180px">
                            <option value="All Statuses" selected="">All Statuses</option>
                            <option value="Positive Balance">Positive Balance</option>
                            <option value="Outstanding">Outstanding</option>
                            <option value="Neutral">Neutral (Zero)</option>
                            <option value="Withdrawal Pending">Withdrawal Pending</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- table --}}
            <div class="row">
                <div class="col-12">
                    <div class="table--sat-balance">
                        <table style="min-width:1337px">
                            <thead>
                                <tr>
                                    <th>Customer </th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Balance</th>
                                    <th>Total Added</th>
                                    <th>Total Used</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Acme Corporation </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--green">$18,000.00</td>
                                    <td class="text--black">$6,900.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status won-status">Positive balance</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Stark Industries </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--green">$18,000.00</td>
                                    <td class="text--black">$18,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status pending-status">Withdrawal Pending</span>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Wayne Enterprises </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$1,200.00</td>
                                    <td class="text--black">$15,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status rejected-status">Outstanding</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Umbrella Corp </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$350.00</td>
                                    <td class="text--black">$2,200.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status won-status">Positive balance</span>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Cyberdyne Systems </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$2,802.00</td>
                                    <td class="text--black">$30,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status rejected-status">Outstanding</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Initech LLC </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$1,200.00</td>
                                    <td class="text--black">$4,500.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status modal-manual-status">Neutral</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Acme Corporation </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--green">$18,000.00</td>
                                    <td class="text--black">$6,900.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status won-status">Positive balance</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Stark Industries </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--green">$18,000.00</td>
                                    <td class="text--black">$18,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status pending-status">Withdrawal Pending</span>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Wayne Enterprises </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$1,200.00</td>
                                    <td class="text--black">$15,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status rejected-status">Outstanding</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Umbrella Corp </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$350.00</td>
                                    <td class="text--black">$2,200.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status won-status">Positive balance</span>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Cyberdyne Systems </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$2,802.00</td>
                                    <td class="text--black">$30,000.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status rejected-status">Outstanding</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold"><a href="/sat-balance-status" class="text--black">Initech LLC </a></td>
                                    <td class="text--black">billing@acmecorp.com</td>
                                    <td class="text--black">+1 (555) 012-3456</td>
                                    <td class="text--red fw-bold">-$1,200.00</td>
                                    <td class="text--black">$4,500.00</td>
                                    <td class="text--green">$3,400.00</td>
                                    <td class="text--green">
                                        <span class="sat-status modal-manual-status">Neutral</span>
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
</body>

</html>
