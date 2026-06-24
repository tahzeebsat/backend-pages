    <div class="modal fade cmn--modal sm--modal" id="add_shipment" tabindex="-1" aria-labelledby="add_shipmentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <h4 class="fs-6 mb-0 fw-semibold text--black d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck h-5 w-5"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg> Add Shipment</h4>
                            <span class="btn-close fs-14" data-bs-dismiss="modal"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Shipping Company">Shipping Company</label>
                        <input type="text" placeholder="Shipping Company" class="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Vessel Name">Vessel Name</label>
                        <input type="text" placeholder="Vessel Name" class="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Voyage Number">Voyage Number</label>
                        <input type="number" placeholder="Voyage Number" class="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Shipment Type">Shipment Type</label>
                        <select class="form-select">
                            <option value="" selected>RORO</option>
                            <option value="">Container</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="ETD">ETD</label>
                        <input type="date" placeholder="ETD" class="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="ETA">ETA</label>
                        <input type="date" placeholder="ETA" class="form-control"/>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Port of Loading">Port of Loading</label>
                        <select class="form-select">
                            <option value="" selected>Pakistan</option>
                            <option value="">Bengal</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="fs-14 text--black mb-2" for="Port of Destination">Port of Destination</label>
                        <select class="form-select">
                            <option value="" selected>Pakistan</option>
                            <option value="">Bengal</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Notes">Notes</label>
                        <textarea class="form-control bg--grey" placeholder="Add internal notes" style="height: auto" rows="6"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="sat-btn light" data-bs-dismiss="modal">Cancel</button>
                            <button class="sat-btn primary">Save Shipment</button>
                            <button class="sat-btn grey">Mark As Shipped</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>