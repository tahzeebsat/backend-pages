    <div class="modal fade cmn--modal sm--modal" id="ask_modal" tabindex="-1" aria-labelledby="ask_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <h4 class="fs-5 mb-0 fw-semibold text--black d-flex align-items-center gap-2"><span id="title_modal_payment">Shipping Payment</span>
                            </h4>
                            <span class="btn-close fs-14" data-bs-dismiss="modal"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Amount" id="title_amount">Shipping Amount</label>
                        <input type="number" placeholder="Amount" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="sat-btn light" data-bs-dismiss="modal">Cancel</button>
                            <button class="sat-btn primary">Save</button>
                        </div>
                    </div>
                    <input type="text" hidden value="" id="charge_id">
                </div>
            </div>
            </div>
        </div>
    </div>