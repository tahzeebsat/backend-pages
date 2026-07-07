<div class="modal fade cmn--modal sm--modal" id="show_proof_payment" tabindex="-1" aria-labelledby="show_proof_paymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <h4 class="fs-5 mb-0 fw-semibold text--black d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <circle cx="9" cy="9" r="2"></circle>
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                </svg>
                                <span id="show_proof_payment_title">Payment Proof</span>
                            </h4>
                            <span class="btn-close fs-14" data-bs-dismiss="modal"></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center align-items-center">
                            <img 
                                src="{{ asset('/assets/images/proof-sample.jpg') }}" 
                                alt="Payment Proof" 
                                id="show_proof_payment_image"
                                class="img-fluid rounded proof-img"
                                style="max-height: 420px; object-fit: contain;cursor:zoom-in"
                            >
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="sat-btn light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>