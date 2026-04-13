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
                        </div>
                    </div>
                </div>
            </div>
            {{-- balance negative --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="cmn--card bg--red-light">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="sat-status rejected-status bg--red-warning border-0 p-0" style="height:30px;width:30px">
                                    <img src="{{asset('/assets/images/icons/error-warning-line.svg')}}" style="filter: brightness(100)" height="16" width="16" loading="lazy" alt="icon">
                                </span>
                                <div>
                                    <p class="title--balance">Customer has outstanding balance  </p>
                                    <p class="subtitle--balance">Outstanding amount <span class="text--red">$2,802</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <button class="sat-btn danger btn--sm"><img
                                        src="{{ asset('/assets/images/icons/send-plane-fill.svg') }}" height="18"
                                        width="18" alt="icon">Send Payment Reminder</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- balance --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="cmn--card">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="title--balance">Cyberdyne Systems</p>
                                <p class="subtitle--balance">Available Balance</p>
                                <p class="value--balance text--green">$18,000.00</p>
                                <p class="value--balance text--red d-none">-$2,802</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <button class="sat-btn primary btn--sm"><img
                                        src="{{ asset('/assets/images/icons/edit-2-fill.svg') }}" height="18"
                                        width="18" alt="icon">Manual Transection</button>
                                <button class="sat-btn primary btn--sm"><img
                                        src="{{ asset('/assets/images/icons/plus-icon.svg') }}" height="20"
                                        width="20" alt="icon"> Add Balance</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- values --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses grid-cmn-5">
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Available Balance</h3>
                                <p class="value text--black">$620.00</p>
                            </div>
                            <p class="text--black fs-12 mb-0 mt-1">Available After pending withdrawal</p>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Pending Withdrawal</h3>
                                <p class="value text--black">$60.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Total withdrawal</h3>
                                <p class="value text--black">$60.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Total Added</h3>
                                <p class="value text--black">$60.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Total Used</h3>
                                <p class="value text--black">$700.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses grid-cmn-5">
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">From Top-Ups</h3>
                                <p class="value text--black">$60.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">From Lost Bids</h3>
                                <p class="value text--black">$60.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Manual Adjustments</h3>
                                <p class="value text--black">$700.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Used For Orders</h3>
                                <p class="value text--red">-$00.00</p>
                            </div>
                        </div>
                        <div class="card--item">
                            <div>
                                <h3 class="title text--grey">Used For Deposits</h3>
                                <p class="value text--red">-$00.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- table 1 --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <h2 class="mb-0 fs-6 fw-bold text--black">Withdrawal History</h2>
                        <button class="sat-btn primary btn--sm"><img
                                src="{{ asset('/assets/images/icons/download-cloud.svg') }}" alt=""> Download
                            Statement</button>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="table--sat-balance" style="height: auto">
                        <table style="min-width:1337px">
                            <thead>
                                <tr>
                                    <th>Date & Time </th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Balance after</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--green fw-bold">$180.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status won-status">Completed</span>
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        <div
                                            class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer">
                                            <img src="{{ asset('/assets/images/icons/eye-blue.svg') }}" height="16"
                                                width="16" alt="icon">
                                            View Receipt
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--green fw-bold">$180.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status won-status">Completed</span>
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        <div
                                            class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer">
                                            <img src="{{ asset('/assets/images/icons/eye-blue.svg') }}" height="16"
                                                width="16" alt="icon">
                                            View Receipt
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--red fw-bold">$500.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status rejected-status">Rejected</span>
                                    </td>
                                    <td class="text--black fw-bold">$16,000.00</td>
                                    <td class="text--grey">
                                        <div
                                            class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer">
                                            <img src="{{ asset('/assets/images/icons/error-warning-line.svg') }}"
                                                height="16" width="16" alt="icon">
                                            View Reason
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--red fw-bold">$500.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status pending-status">Pending</span>
                                    </td>
                                    <td class="text--black fw-bold">$16,000.00</td>
                                    <td class="text--grey">
                                        <div class="d-flex align-items-center gap-2">
                                            <button class="sat-btn btn--sm success-outline">Accepted</button>
                                            <button class="sat-btn btn--sm danger-outline">Rejected</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- table 2 --}}
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="mb-0 fs-6 fw-bold text--black mb-3">Transaction History</h2>
                </div>
                <div class="col-12">
                    <div class="search--filters justify-content-between">
                        <div class="search--item mw-100">
                            <input type="text" placeholder="Search by name, ID. email, or phone..."
                                class="form-control">
                            <img src="{{asset('/assets/images/icons/search-lg.svg')}}" width="16"
                                height="16" loading="lazy" alt="search-icon">
                        </div>
                        <select class="form-select fw-bold" style="min-width: 180px">
                            <option value="All Types" selected="">All Types</option>
                            <option value="Credit">Credit</option>
                            <option value="Debit">Debit</option>
                        </select>
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
            <div class="row pb-3">
                <div class="col-12">
                    <div class="table--sat-balance" style="height: auto">
                        <table style="min-width:1337px">
                            <thead>
                                <tr>
                                    <th>Date & Time </th>
                                    <th>Type</th>
                                    <th>Source</th>
                                    <th>Reference</th>
                                    <th>Amount</th>
                                    <th>Balance after</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--black">Balance Added</td>
                                    <td class="text--grey">Used for order Payment</td>
                                    <td class="text--grey">QDR-2869</td>
                                    <td class="text--green fw-bold">
                                        +$180.00
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        Order Payment for Shipment.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="text--black">Balance Withdrawal</td>
                                    <td class="text--grey">Used for Deposit</td>
                                    <td class="text--grey">QDR-2869</td>
                                    <td class="text--red fw-bold">
                                        -$180.00
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        Order Payment for Shipment.
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.querySelector(".search--item input");
            const statusSelect = document.querySelector(".form-select");
            const rows = document.querySelectorAll("table tbody tr");

            function filterTable() {
                const searchValue = searchInput.value.toLowerCase();
                const selectedStatus = statusSelect.value.toLowerCase();

                rows.forEach(row => {
                    const rowText = row.innerText.toLowerCase();

                    // Get status text (2nd column)
                    const statusCell = row.children[1].innerText.toLowerCase();

                    let matchesSearch = rowText.includes(searchValue);
                    let matchesStatus =
                        selectedStatus === "all statuses" ||
                        statusCell.includes(selectedStatus);

                    if (matchesSearch && matchesStatus) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            // Events
            searchInput.addEventListener("keyup", filterTable);
            statusSelect.addEventListener("change", filterTable);
        });
    </script>
</body>

</html>
