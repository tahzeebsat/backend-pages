    <div class="modal fade cmn--modal" id="bundle_paymentapproved" tabindex="-1"
        aria-labelledby="bundle_paymentapprovedLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">BID-254 — Windhoek Auto</h1>
                        <span class="sat-status approved-status border--status">Payment Approved</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="fw-noraml text--black">BUNDLE SUMMARY</label>
                            <div class="grid-cmn-5">
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">REQUESTED QTY</label>
                                    <p class="fs-6 fw-bold text--black">8</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">BID / CAR</label>
                                    <p class="fs-6 fw-bold text--black">$21,128</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">TOTAL BID</label>
                                    <p class="fs-6 fw-bold text--black">$169,020</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">DEPOSIT PAID</label>
                                    <p class="fs-6 fw-bold text--black">$16,902</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">SAT BALANCE</label>
                                    <p class="fs-6 fw-bold text--blue">$2,634</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center gap-2 justify-content-between mb-3">
                                <label class="fw-noraml text--black mb-0">CAR RESULTS — 2 VEHICLES</label>
                                <div>
                                    <select class="form-select">
                                        <option value="" selected>CURRENCY:¥ JPY</option>
                                        <option value="">CURRENCY:PKR</option>
                                        <option value="">CURRENCY: EUR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table--modal">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STOCK / CAR</th>
                                            <th>LOT</th>
                                            <th>AUCTION</th>
                                            <th>BID PRICE</th>
                                            <th>SOLD PRICE</th>
                                            <th>RESULT</th>
                                            <th>NOTES</th>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="text--blue-secondary-light">STK-6602</span>
                                                <p class="d-flex align-items-center gap-2 text--grey">2020 Daihatsu
                                                    Tanto LA650S <span class="sat-status approved-status">x2</span>
                                                </p>
                                            </td>
                                            <td class="text--black">LOT-2211</td>
                                            <td class="text--black">TAA Yokohama</td>
                                            <td class="text--black">
                                                $2,634
                                            </td>
                                            <td class="text--black">
                                                <input type="number" class="form-control" />
                                            </td>
                                            <td>
                                                <select class="form-select status-select">
                                                    <option value="">Select</option>
                                                    <option value="won">Won</option>
                                                    <option value="lost">Lost</option>
                                                </select>
                                            </td>
                                            <td class="text--grey">
                                                <input type="text" class="form-control" placeholder="Note" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text--blue-secondary-light">STK-6602</span>
                                                <p class="d-flex align-items-center gap-2 text--grey">2020 Daihatsu
                                                    Tanto LA650S <span class="sat-status approved-status">x2</span>
                                                </p>
                                            </td>
                                            <td class="text--black">LOT-2211</td>
                                            <td class="text--black">TAA Yokohama</td>
                                            <td class="text--black">
                                                $2,634
                                            </td>
                                            <td class="text--black">
                                                <input type="number" class="form-control" />
                                            </td>
                                            <td>
                                                <select class="form-select status-select">
                                                    <option value="">Select</option>
                                                    <option value="won">Won</option>
                                                    <option value="lost">Lost</option>
                                                </select>
                                            </td>
                                            <td class="text--grey">
                                                <input type="text" class="form-control" placeholder="Note" />
                                            </td>
                                        </tr>
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="fw-noraml text--black">RESULTS SUMMARY</label>
                            <div class="grid-cmn-4">
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">TOTAL CARS</label>
                                    <p class="fs-6 fw-bold text--black">8</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">WON</label>
                                    <p class="fs-6 fw-bold text--green">1</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">LOST</label>
                                    <p class="fs-6 fw-bold text--red">1</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">REMAINING</label>
                                    <p class="fs-6 fw-bold text--grey">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="sat-btn primary" data-bs-target="#bundle_deposithandling" data-bs-toggle="modal">
                                Save Results
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cmn--modal" id="bundle_deposithandling" tabindex="-1" aria-hidden="true">
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
                                <div class="grid-cmn-4">
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">TOTAL DEPOSIT PAID</label>
                                        <p class="fs-6 fw-bold text--black">$2,802</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">SAT BALANCE</label>
                                        <p class="fs-6 fw-bold text--black">$2,735</p>
                                    </div>
                                      <div class="cmn--card">
                                        <label class="text--grey fw-normal">Won Cars</label>
                                        <p class="fs-6 fw-bold text--green">1</p>
                                    </div>
                                    <div class="cmn--card">
                                        <label class="text--grey fw-normal">Lost Cars</label>
                                        <p class="fs-6 fw-bold text--red">¥6,516</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <label class="fw-noraml text--black mb-0">DEPOSIT HANDLING</label>
                                    <span class="sat-status approved-status">$2,802</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cmn--card bg--white-secondary">
                                    <div class="text--black mb-1">
                                        Lost Car Deposits → SAT Balance
                                    </div>
                                    <div class="text--grey">
                                        1 lost car x $244 = $244 added to wallet
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bid--type-selection">
                                    <input type="radio" class="btn-check bid-type-toggle" name="deposit_paymenthandling"
                                        id="deposit_paymentapproved" data-type="single" checked />
                                    <label class="btn mb-0" for="deposit_paymentapproved">
                                        <h3 class="title">Use deposit for payment</h3>
                                        <p class="para">Reduce remaining payment by $2,802</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bid--type-selection">
                                    <input type="radio" class="btn-check bid-type-toggle" name="deposit_paymenthandling"
                                        id="deposit_sat_balancepayment" data-type="bundle">
                                    <label class="btn mb-0" for="deposit_sat_balancepayment">
                                        <h3 class="title">Keep deposit in SAT Balance</h3>
                                        <p class="para">$1,800 stays in customer wallet</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fw-noraml text--black mb-2">BALANCE SUMMARY</label>
                                <div class="balance--summary">
                                    <div
                                        class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 border-bottom">
                                        <span class="text--grey">Total Deposit Paid</span>
                                        <span class="text--black">$2,735</span>
                                    </div>

                                    <div
                                        class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 border-bottom">
                                        <span class="text--grey">Lost Cars → SAT Balance</span>
                                        <span class="text--black">+$23,000</span>
                                    </div>
                                    <div
                                        class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 border-bottom">
                                        <span class="text--grey">Won Cars Deposit</span>
                                        <span class="text--black">→ Payment (-$1,150)</span>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 justify-content-between p-3 pb-2 bg--white-secondary">
                                        <span class="text--black fw-bold">Final SAT Balance</span>
                                        <span class="text--blue fw-bold">$5,537</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <button class="sat-btn light" data-bs-target="#bundle_paymentapproved"
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
