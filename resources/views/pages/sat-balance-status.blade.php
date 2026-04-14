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
                                <span class="sat-status rejected-status bg--red-warning border-0 p-0"
                                    style="height:30px;width:30px">
                                    <img src="{{ asset('/assets/images/icons/error-warning-line.svg') }}"
                                        style="filter: brightness(100)" height="16" width="16" loading="lazy"
                                        alt="icon">
                                </span>
                                <div>
                                    <p class="title--balance">Customer has outstanding balance </p>
                                    <p class="subtitle--balance">Outstanding amount <span
                                            class="text--red">$2,802</span></p>
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
                                <button class="sat-btn primary btn--sm" data-bs-toggle="modal"
                                    data-bs-target="#manual_transaction"><img
                                        src="{{ asset('/assets/images/icons/edit-2-fill.svg') }}" height="18"
                                        width="18" alt="icon">Manual Transaction</button>
                                <button class="sat-btn primary btn--sm" data-bs-toggle="modal"
                                    data-bs-target="#add_balance"><img
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
                                <h3 class="title text--grey">Total Withdrawal</h3>
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
                        <button class="sat-btn primary btn--sm" data-bs-target="#download_statement"
                            data-bs-toggle="modal"><img src="{{ asset('/assets/images/icons/download-cloud.svg') }}"
                                alt=""> Download
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
                                    <td class="fw-bold">$180.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status won-status">Completed</span>
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        <div class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer"
                                            data-bs-target="#payment_success" data-bs-toggle="modal">
                                            <img src="{{ asset('/assets/images/icons/eye-blue.svg') }}" height="16"
                                                width="16" alt="icon">
                                            View Receipt
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="fw-bold">$180.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status won-status">Completed</span>
                                    </td>
                                    <td class="text--black fw-bold">$19,000.00</td>
                                    <td class="text--grey">
                                        <div class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer"
                                            data-bs-target="#payment_success" data-bs-toggle="modal">
                                            <img src="{{ asset('/assets/images/icons/eye-blue.svg') }}"
                                                height="16" width="16" alt="icon">
                                            View Receipt
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="fw-bold">$500.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status rejected-status">Rejected</span>
                                    </td>
                                    <td class="text--black fw-bold">$16,000.00</td>
                                    <td class="text--grey">
                                        <div class="d-flex align-items-center gap-2 fw-normal text--blue fs-14 cursor-pointer"
                                            data-bs-target="#transation_history" data-bs-toggle="modal">
                                            <img src="{{ asset('/assets/images/icons/error-warning-line.svg') }}"
                                                height="16" width="16" alt="icon">
                                            View Reason
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text--black">04-06-2026 12:00AM</td>
                                    <td class="fw-bold">$500.00</td>
                                    <td class="text--grey">Bank Transfer</td>
                                    <td class="text--grey">
                                        <span class="sat-status pending-status">Pending</span>
                                    </td>
                                    <td class="text--black fw-bold">$16,000.00</td>
                                    <td class="text--grey">
                                        <div class="d-flex align-items-center gap-2">
                                            <button class="sat-btn btn--sm success-outline"
                                                data-bs-target="#complete_withdrawal"
                                                data-bs-toggle="modal">Accepted</button>
                                            <button class="sat-btn btn--sm danger-outline"
                                                data-bs-target="#enter_rejection"
                                                data-bs-toggle="modal">Rejected</button>
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
                            <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                                height="16" loading="lazy" alt="search-icon">
                        </div>
                        <select class="form-select fw-bold" style="min-width: 180px">
                            <option value="All Types" selected="">All Types</option>
                            <option value="Credit">Credit</option>
                            <option value="Debit">Debit</option>
                        </select>
                        <select class="form-select fw-bold" style="min-width: 180px">
                            <option value="All Sources" selected="">All Sources</option>
                            <option value="Top-Up">Top-Up</option>
                            <option value="Lost Bid">Lost Bid</option>
                            <option value="Manual Adjustment">Manual Adjustment</option>
                            <option value="Deposit">Deposit</option>
                            <option value="Order Payment">Order Payment</option>
                            <option value="Manual Deduction">Manual Deduction</option>
                            <option value="Withdrawal">Withdrawal</option>
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
    {{-- Add balance --}}
    <div class="modal fade cmn--modal" id="add_balance" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Add balance Top up</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="">Balance Amount</label>
                            <input type="text" class="form-control" placeholder="e.g 100000">
                        </div>
                        <div class="col-12">
                            <label for="">Select Payment method</label>
                            <select class="form-select">
                                <option value="Wire Transfer">Wire Transfer</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="ACH">ACH</option>
                                <option value="Check">Check</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label>Payment Proof</label>
                            <div class="payment--proof-card image-upload">

                                <input type="file" class="file-input" accept="image/png, image/jpeg"
                                    hidden="">

                                <div class="upload--textarea drop-area">

                                    <div class="upload--img">
                                        <img src="http://127.0.0.1:8000/assets/images/icons/upload_image.svg"
                                            height="40" width="40" alt="upload icon" class="preview-image">
                                    </div>

                                    <div class="payment--upload-text">
                                        <p class="upload_para text--blue-secondary-light">
                                            Click to upload
                                            <span class="ms-1 text--grey">or drag and drop</span>
                                        </p>
                                        <p class="upload_restriction text--grey">
                                            PNG, JPG (max. 800x400px)
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn primary" data-bs-target="#payment_success"
                                    data-bs-toggle="modal">Add Balance</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Download Statement --}}
    <div class="modal fade cmn--modal" id="download_statement" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Transaction History</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="mb-2">Cyberdyne Systems</label>
                            <div
                                class="d-flex align-items-center gap-2 border px-3 py-2 rounded text--black fw-bold fs-14">
                                <img src="{{ asset('assets/images/icons/doc-icon.png') }}" width="24"
                                    height="24" alt="icon">
                                Transaction_History_WDR001.pdf
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn primary">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Transaction History --}}
    <div class="modal fade cmn--modal" id="transation_history" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Transaction History</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="mb-2 text--red">Reason</label>
                            <div
                                class="d-flex align-items-center gap-2 border px-3 py-2 rounded text--black fw-normal fs-14 bg--red-light">
                                Incorrect payment details - account number mismatch
                                Withdrawal WDR-003 -- Rejected 2026-03-09 09:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Reject Withdrawal --}}
    <div class="modal fade cmn--modal" id="enter_rejection" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Reject Withdrawal</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="mb-2 text--black">Rejection Reason <span class="text--red">*</span></label>
                            <select class="form-select">
                                <option value="Insufficient available balance">Insufficient available balance</option>
                                <option value="Incorrect payment details">Incorrect payment details</option>
                                <option value="Compliance issue">Compliance issue</option>
                                <option value="Duplicate request">Duplicate request</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="mb-2 text--black">Enter the rejection reason</label>
                            <textarea placeholder="Message" class="form-control h-auto" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn danger">Confirm Rejection</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Complete Withdrawal --}}
    <div class="modal fade cmn--modal" id="complete_withdrawal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Complete Withdrawal</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="mb-2 text--black">Payment Proof</label>
                            <div class="payment--proof-card image-upload">
                                <input type="file" class="file-input" accept="image/png, image/jpeg"
                                    hidden="">
                                <div class="upload--textarea drop-area">
                                    <div class="upload--img">
                                        <img src="http://127.0.0.1:8000/assets/images/icons/upload_image.svg"
                                            height="40" width="40" alt="upload icon" class="preview-image">
                                    </div>
                                    <div class="payment--upload-text">
                                        <p class="upload_para text--blue-secondary-light">
                                            Click to upload
                                            <span class="ms-1 text--grey">or drag and drop</span>
                                        </p>
                                        <p class="upload_restriction text--grey">
                                            PNG, JPG (max. 800x400px)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="mb-2 text--black">Notes (optional)</label>
                            <textarea placeholder="processing notes..." class="form-control h-auto" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn success">Confirm Completion</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Payment Success! --}}
    <div class="modal fade cmn--modal" id="payment_success" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Payment Success!</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/success-icon.svg') }}" height="93"
                                    width="93" loading="lazy" alt="icon">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <span class="fs-14 fw-normal mb-2 text--grey">Ref Number</span>
                                <span class="fs-14 fw-normal mb-2 text--black">000085752257</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <span class="fs-14 fw-normal mb-2 text--grey">Payment Time</span>
                                <span class="fs-14 fw-normal mb-2 text--black">25-02-2023, 13:22:16</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <span class="fs-14 fw-normal mb-2 text--grey">Payment Method</span>
                                <span class="fs-14 fw-normal mb-2 text--black">Bank Transfer</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <span class="fs-14 fw-normal mb-2 text--grey">Sender Name</span>
                                <span class="fs-14 fw-normal mb-2 text--black">Cyberdyne Systems</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn primary">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Manual Transaction -->
    <div class="modal fade cmn--modal" id="manual_transaction" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 503px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Add Manual Transaction</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="">Transaction Type</label>
                            <div class="d-flex">
                                <div class="bid--type-selection w-50 pe-1">
                                    <input type="radio" class="btn-check d-none" name="transaction-type"
                                        id="single_bid" data-type="single" checked="">
                                    <label class="btn mb-0 ps-3" for="single_bid">
                                        <h3 class="title mb-0 fw-bold fs-14">Credit</h3>
                                    </label>
                                </div>
                                <div class="bid--type-selection w-50 ps-1">
                                    <input type="radio" class="btn-check d-none" name="transaction-type"
                                        id="bundle_bid" data-type="bundle">
                                    <label class="btn mb-0 ps-3" for="bundle_bid">
                                        <h3 class="title mb-0 fw-bold fs-14">Debit</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Amount (USD)</label>
                            <input type="text" class="form-control" placeholder="0.00$">
                        </div>
                        <div class="col-12">
                            <label for="">Notes (Required, Min 10 Characters)</label>
                            <textarea class="form-control h-auto" placeholder="Describe the reason for this adjustment..." rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <label>Payment Proof</label>
                            <div class="payment--proof-card image-upload">

                                <input type="file" class="file-input" accept="image/png, image/jpeg"
                                    hidden="">

                                <div class="upload--textarea drop-area">

                                    <div class="upload--img">
                                        <img src="http://127.0.0.1:8000/assets/images/icons/upload_image.svg"
                                            height="40" width="40" alt="upload icon" class="preview-image">
                                    </div>

                                    <div class="payment--upload-text">
                                        <p class="upload_para text--blue-secondary-light">
                                            Click to upload
                                            <span class="ms-1 text--grey">or drag and drop</span>
                                        </p>
                                        <p class="upload_restriction text--grey">
                                            PNG, JPG (max. 800x400px)
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Reference (Optional)</label>
                            <input type="text" class="form-control" placeholder="e.g. , ADJ-84784">
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="sat-btn primary">Log Transaction</button>
                            </div>
                        </div>
                    </div>
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
</body>

</html>
