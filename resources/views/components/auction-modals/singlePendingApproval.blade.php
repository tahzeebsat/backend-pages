    <div class="modal fade cmn--modal" id="single_pendingapproval" tabindex="-1"
        aria-labelledby="single_pendingapprovalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">BID-114 — Accra Motors Ghana</h1>
                        <span class="sat-status pending-status border--status">PENDING APPROVAL</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                                    <div class="fs-14 fw-noraml text--black">Accra Motors Ghana</div>
                                                </div>
                                            </td>
                                            <td class="pb-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="fs-14 fw-noraml text--grey">Email:</div>
                                                    <div class="fs-14 fw-noraml text--black">buy@accramotors.gh</div>
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
                                        <div class="fs-14 fw-noraml text--blue">STK-4421</div>
                                        <div class="fs-14 fw-noraml text--black">Toyota RAV4 ACA36 (2017)</div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="fs-14 fw-noraml text--grey">Lot:</div>
                                        <div class="fs-14 fw-noraml d-flex align-items-center gap-2">
                                            <span class="text--black">LOT-8832</span>
                                            <span class="text--grey">TAA Yokohama</span>
                                            <span class="sat-status approved-status">x1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="fs-14 fw-noraml text--grey">Bid Price:</div>
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
                                    <p class="fs-6 fw-bold text--black">$8,500</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">DEPOSIT (10%)</label>
                                    <p class="fs-6 fw-bold text--black">$850</p>
                                    <span class="sat-status pending-status">Pending</span>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">PAYMENT</label>
                                    <p class="fs-6 fw-bold text--black">Bank Transfer</p>
                                </div>
                                <div class="cmn--card">
                                    <label class="text--grey fw-normal">SAT BALANCE</label>
                                    <p class="fs-6 fw-bold text--blue">$0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="fw-noraml text--black">PAYMENT PROOF</label>
                            <div class="payment--proof-card image-upload">

                                <input type="file" class="file-input" accept="image/png, image/jpeg" hidden>

                                <div class="upload--textarea drop-area">

                                    <div class="upload--img">
                                        <img src="{{ asset('assets/images/icons/upload_image.svg') }}" height="40"
                                            width="40" alt="upload icon" class="preview-image">
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
                            <label class="fw-noraml text--grey">NOTES</label>
                            <div class="cmn--card">
                                <p class="text--grey">First-time customer</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center gap-2">
                                <button class="sat-btn primary">Approve Payment</button>
                                <button class="sat-btn light text--red">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
