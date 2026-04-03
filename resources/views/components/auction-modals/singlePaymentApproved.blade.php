    <div class="modal fade cmn--modal" id="single_paymentapproved" tabindex="-1"
        aria-labelledby="single_paymentapprovedLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">BID-250 — Dar es Salaam Trade</h1>
                        <span class="sat-status approved-status border--status">Payment Approved</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="payment--approved-1">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="fw-noraml text--black">CUSTOMER</label>
                                <div class="cmn--card">
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td class="pb-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="fs-14 fw-noraml text--grey">Name:</div>
                                                        <div class="fs-14 fw-noraml text--black">Dar es Salaam Trade
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pb-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="fs-14 fw-noraml text--grey">Email:</div>
                                                        <div class="fs-14 fw-noraml text--black">
                                                            daressalaamtrade@example.com</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="fs-14 fw-noraml text--grey">Total Bids:</div>
                                                        <div class="fs-14 fw-noraml text--black">31</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="fs-14 fw-noraml text--grey">Win Rate:</div>
                                                        <div class="fs-14 fw-noraml text--black">11%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fw-noraml text--black">VEHICLE</label>
                                <div class="cmn--card">
                                    <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="fs-14 fw-noraml text--blue">STK-25001</div>
                                            <div class="fs-14 fw-noraml text--black">Suzuki Wagon R MH55S (2021)</div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="fs-14 fw-noraml text--grey">Lot:</div>
                                            <div class="fs-14 fw-noraml d-flex align-items-center gap-2"><span
                                                    class="text--black">LOT-3656</span> <span class="text--grey">USS
                                                    Nagoya</span> <span class="sat-status approved-status">x1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="fs-14 fw-noraml text--grey">Total Bids:</div>
                                            <div class="fs-14 fw-noraml text--black">$8,500</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fw-noraml text--black">FINANCIAL</label>
                                <div class="grid-cmn-4">
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">BID AMOUNT</label>
                                        <p class="fs-6 fw-bold text--black">$28,017</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">DEPOSIT (10%)</label>
                                        <p class="fs-6 fw-bold text--black">$2,802</p>
                                        <span class="sat-status won-status">Paid</span>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">PAYMENT</label>
                                        <p class="fs-6 fw-bold text--black">SAT Balance</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">SAT BALANCE</label>
                                        <p class="fs-6 fw-bold text--blue">$2,735</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fw-noraml text--black">SOLD PRICE & CURRENCY</label>
                                <div class="d-flex align-items-center gap-2">
                                    <select class="form-select" style="width: max-content">
                                        <option value="¥ JPY" selected>¥ JPY</option>
                                        <option value="¥ JPY">¥ JPY</option>
                                        <option value="¥ JPY">¥ JPY</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Enter sold price..." />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <button class="sat-btn success" data-bs-target="#single_deposithandling"
                                        data-bs-toggle="modal" onclick="showWon()">
                                        Mark Won
                                    </button>

                                    <button class="sat-btn grey" data-bs-target="#single_deposithandling"
                                        data-bs-toggle="modal" onclick="showLost()">
                                        Mark Lost
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cmn--modal" id="single_deposithandling" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 726px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">Deposit Handling — BID-250</h1>
                        <div class="sat-status won-status d-flex align-items-center gap-1"><span
                                class="status--dots won"></span> Step 2 of 2
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="payment--approved-2">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="grid-cmn-2">
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">TOTAL DEPOSIT PAID</label>
                                        <p class="fs-6 fw-bold text--black">$2,802</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">SAT BALANCE</label>
                                        <p class="fs-6 fw-bold text--black">$2,735</p>
                                    </div>
                                    <div class="cmn--card mark-won">
                                        <label class="text--grey fw-normal">RESULT</label>
                                        <p class="fs-6 fw-bold text--green">Won</p>
                                    </div>
                                    <div class="cmn--card mark-lost d-none">
                                        <label class="text--grey fw-normal">RESULT</label>
                                        <p class="fs-6 fw-bold text--red">Lost</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">SOLD PRICE</label>
                                        <p class="fs-6 fw-bold text--blue">¥6,516</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <label class="fw-noraml text--black mb-0">DEPOSIT HANDLING</label>
                                    <span class="sat-status approved-status">$2,802</span>
                                </div>
                            </div>
                            <div class="col-12 mark-lost d-none">
                                <div class="cmn--card bg--white-secondary">
                                    <div class="text--black mb-1">
                                        Deposit → SAT Balance
                                    </div>
                                    <div class="text--grey">
                                        Deposit of <span class="text--black">$887</span> will be refunded to the
                                        customer's SAT Balance.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mark-won">
                                <div class="bid--type-selection">
                                    <input type="radio" class="btn-check bid-type-toggle" name="deposit_handling"
                                        id="deposit_payment" data-type="single" checked />
                                    <label class="btn mb-0" for="deposit_payment">
                                        <h3 class="title">Use deposit for payment</h3>
                                        <p class="para">Reduce remaining payment by $2,802</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mark-won">
                                <div class="bid--type-selection">
                                    <input type="radio" class="btn-check bid-type-toggle" name="deposit_handling"
                                        id="deposit_sat_balance" data-type="bundle">
                                    <label class="btn mb-0" for="deposit_sat_balance">
                                        <h3 class="title">Keep deposit in SAT Balance</h3>
                                        <p class="para">Reduce remaining payment by $2,802</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fw-noraml text--black mb-2">BALANCE SUMMARY</label>
                                <div class="balance--summary">
                                    <div
                                        class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 border-bottom">
                                        <span class="text--grey">Current SAT Balance</span>
                                        <span class="text--black">$2,735</span>
                                    </div>
                                    <div
                                        class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 border-bottom">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="sat-status won-status px-2">→ SAT Balance</span>
                                            <span class="text--grey">Deposit</span>
                                        </div>
                                        <span class="text--green">(+$2,802)</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 bg--white-secondary">
                                        <span class="text--black fw-bold">Final SAT Balance</span>
                                        <span class="text--blue fw-bold">$5,537</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <button class="sat-btn light" data-bs-target="#single_paymentapproved"
                                        data-bs-toggle="modal">Back</button>
                                    <button class="sat-btn primary">Confirm & Finalize</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
