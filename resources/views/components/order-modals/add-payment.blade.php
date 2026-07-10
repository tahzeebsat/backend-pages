    <div class="modal fade cmn--modal sm--modal" id="add_payment" tabindex="-1" aria-labelledby="add_paymentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <h4 class="fs-5 mb-0 fw-semibold text--black d-flex align-items-center gap-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>Add Payment</h4>
                            <span class="btn-close fs-14" data-bs-dismiss="modal"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Amount">Amount</label>
                        <input type="number" placeholder="Amount" class="form-control"/>
                        <small class="fs-12 text--grey fw-normal mt-1">Due: $72,000</small>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Payment Method">Payment Method</label>
                        <select class="form-select">
                            <option value="Bank Transfer" selected>Bank Transfer</option>
                            <option value="Card">Card</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Crypto">Crypto</option>
                            <option value="SAT Balance">SAT Balance</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Reference">Reference</label>
                        <input type="text" placeholder="Reference" class="form-control"/>
                    </div>

                    <div class="col-12">
                            <div class="swap--wrapper-img">
                                <!-- Uploaded preview (hidden until a file is chosen) -->
                                <div class="uploaded--image-proof" style="display: none;">
                                    <h4 class="text--black fw-bold fs-6 mb-3">Uploaded Proof</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="proof--img-wrap">
                                            <img src=""
                                                style="max-width: 100%;max-height: 200px;cursor: zoom-in"
                                                class="img-fluid object-fit-contain proof-img"
                                                height="200" width="100%" loading="eager" alt="Uploaded proof">
                                            <button type="button" class="proof--remove-btn" aria-label="Remove image">&times;</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Upload dropzone -->
                                <div class="payment--proof-upload">
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
                                </div>
                    </div>

                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Notes">Notes</label>
                        <textarea class="form-control" placeholder="Payment notes..." style="height: auto" rows="6"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="sat-btn light" data-bs-dismiss="modal">Cancel</button>
                            <button class="sat-btn primary">Add Payment</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>