<div class="order-detail">
    <h2 class="order-title">Orders Details</h2>
    <ul class="selection-listing">
        <li class="or-heading">Status</li>
        <li class="or-child">Completed (2)</li>
        <li class="or-child">Pending (2)</li>
        <li class="or-child">Cancel/Returned (2)</li>
        <li class="or-child">All (25)</li>
    </ul>
    <ul class="selection-listing">
        <li class="or-heading">Devices</li>
        <li class="or-child">Mobile (2)</li>
        <li class="or-child">Desktop (20)</li>
        <li class="or-child">Tablet (06)</li>
    </ul>
    <ul class="selection-listing">
        <li class="or-heading">Manual Order</li>
        <li class="or-child" data-bs-toggle="modal" data-bs-target="#create_order_modal">Cerate Order</li>
    </ul>
    <ul class="selection-listing">
        <li class="or-heading">Create Manual Invoice's</li>
        <li class="or-child" data-bs-toggle="modal" data-bs-target="#order_invoice_modal">Order Invoice</li>
        <li class="or-child" data-bs-toggle="modal" data-bs-target="#reserve_invoice_modal">Reserve Invoice</li>
    </ul>
</div>

<div class="modal fade cmn-modls-ordr" id="create_order_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Create Manual Order</h5>
                    <span class="clos-btn cursor-pointer" data-bs-dismiss="modal" aria-label="Close">×</span>
                </div>
                <hr>
                <div class="form-data">
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label for="">Phone <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Phone">
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control h-40" placeholder="email">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Destination Country <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Destination Port <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Payment Type <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Currency <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Car Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Car Amount">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Payment Status <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Stock ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Stock ID">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Comment</label>
                            <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <hr>
                        </div>
                        <div class="col-12 text-end mt-0">
                            <button class="btn btn-apply">Save Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade cmn-modls-ordr" id="order_invoice_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Create Manual Order Invoice</h5>
                    <span class="clos-btn cursor-pointer" data-bs-dismiss="modal" aria-label="Close">×</span>
                </div>
                <hr>
                <div class="form-data">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6">
                            <label for="">Stock ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Stock ID">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label for="">Order No <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Order No">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label for="">Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control h-40" placeholder="email">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label for="">Due Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control h-40" placeholder="Due Date">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label for="">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label for="">Phone <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Phone">
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control h-40" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Departure <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Departure">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Destination <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Destination ">
                        </div>
                        <div class="col-lg-12 d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="d-address">
                                <label class="form-check-label" for="d-address">
                                    use defult departure address </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Currency <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Car Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Car Amount">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Shipping Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Shipping Amount">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Insurance Fee <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Insurance Fee">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Tax (%) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Tax (%)">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Payment Status <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <hr>
                        </div>
                        <div class="col-12 text-end mt-0">
                            <button class="btn btn-apply">Download Invoice</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade cmn-modls-ordr" id="reserve_invoice_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Create Manual Reserve Invoice</h5>
                    <span class="clos-btn cursor-pointer" data-bs-dismiss="modal" aria-label="Close">×</span>
                </div>
                <hr>
                <div class="form-data">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6">
                            <label for="">Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control h-40" placeholder="email">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label for="">Due Date<span class="text-danger">*</span></label>
                            <input type="date" class="form-control h-40" placeholder="Due Date">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label for="">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label for="">Phone <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Phone">
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control h-40" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Currency <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Car Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Car Amount">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Payment Status <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label for="">Stock ID <span class="text-danger">*</span></label>
                            <input type="text" class="form-control h-40" placeholder="Stock ID">
                        </div>
                        <div class="col-lg-12 mt-2">
                            <hr>
                        </div>
                        <div class="col-12 text-end mt-0">
                            <button class="btn btn-apply">Download Invoice</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
