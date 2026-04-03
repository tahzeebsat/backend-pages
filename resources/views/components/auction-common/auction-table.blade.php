{{-- tables --}}
<div class="row">
    <div class="col-12">
        <div class="auction--table">
            <table>
                <thead>
                    <tr>
                        <th>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="check_all">
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
                    <tr data-status="SUBMITTED">
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
                            <span class="sat-status submitted-status cursor-pointer"
                                data-bs-target="#single_Submitted" data-bs-toggle="modal">SUBMITTED</span>
                        </td>
                        <td>
                            Ended 20h ago
                        </td>
                        <td>
                            <button class="sat-btn btn--sm light" data-bs-target="#single_Submitted" data-bs-toggle="modal">Review</button>
                        </td>
                    </tr>
                    <tr data-status="PENDINGAPPROVAL">
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
                            <span class="sat-status pending-status cursor-pointer"
                                data-bs-target="#bundle_pendingapproval" data-bs-toggle="modal">PENDING
                                APPROVAL</span>
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
                    <tr data-status="WON">
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
                            <span class="sat-status won-status cursor-pointer" data-bs-target="#single_won"
                                data-bs-toggle="modal">WON</span>
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
                    <tr data-status="LOST">
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
                            <span class="sat-status lost-status cursor-pointer"
                                data-bs-target="#single_lost" data-bs-toggle="modal">LOST</span>
                        </td>
                        <td>
                            Ended 3d ago
                        </td>
                        <td>
                            <div class="text--grey">Sold: $16,200 (+8%)</div>
                        </td>
                    </tr>
                    <tr data-status="PENDINGAPPROVAL">
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
                            <span class="sat-status pending-status cursor-pointer"
                                data-bs-target="#single_pendingapproval" data-bs-toggle="modal">PENDING
                                APPROVAL</span>
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
                    <tr data-status="WON">
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
                            <span class="sat-status won-status cursor-pointer"
                                data-bs-target="#bundle_won" data-bs-toggle="modal">Won</span>
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
                    <tr data-status="LOST">
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
                            <span class="sat-status lost-status cursor-pointer"
                                data-bs-target="#bundle_lost" data-bs-toggle="modal">LOST</span>
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
                    <tr data-status="PAYMENTAPPROVED">
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
                            <span class="sat-status approved-status cursor-pointer"
                                data-bs-target="#bundle_paymentapproved" data-bs-toggle="modal">Payment
                                Approved</span>
                        </td>
                        <td>
                            Ended 3d ago
                        </td>
                        <td>
                            <div class="d-flex align-items-center flex-column gap-2">
                                <button class="sat-btn btn--sm danger" data-bs-target="#bundle_paymentapproved" data-bs-toggle="modal">Update Result</button>
                            </div>
                        </td>
                    </tr>
                    <tr data-status="PAYMENTAPPROVED">
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
                        <td><span class="sat-status single-status">Single</span></td>
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
                            <span class="sat-status approved-status cursor-pointer"
                                data-bs-target="#single_paymentapproved" data-bs-toggle="modal">Payment
                                Approved</span>
                        </td>
                        <td>
                            Ended 3d ago
                        </td>
                        <td>
                            <div class="d-flex align-items-center flex-column gap-2">
                                <button class="sat-btn btn--sm danger" data-bs-target="#single_paymentapproved" data-bs-toggle="modal">Update Result</button>
                            </div>
                        </td>
                    </tr>
                    <tr data-status="SUBMITTED">
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
                            <span class="sat-status submitted-status cursor-pointer"
                                data-bs-target="#bundle_submitted" data-bs-toggle="modal">SUBMITTED</span>
                        </td>
                        <td>
                            Ended 20h ago
                        </td>
                        <td>
                            <div class="d-flex align-items-center flex-column gap-2">
                                <button class="sat-btn btn--sm light" data-bs-target="#bundle_submitted" data-bs-toggle="modal">Review</button>
                            </div>
                        </td>
                    </tr>
                    <tr data-status="REJECTED">
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
                            <span class="sat-status rejected-status cursor-pointer"
                                data-bs-target="#single_rejected" data-bs-toggle="modal">Rejected</span>
                        </td>
                        <td>
                            Ended 20h ago
                        </td>
                        <td>
                            <div class="d-flex align-items-center flex-column gap-2">
                                <button class="sat-btn btn--sm grey" data-bs-target="#single_rejected" data-bs-toggle="modal">View</button>
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
