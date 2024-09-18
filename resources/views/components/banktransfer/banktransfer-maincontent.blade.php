@php
    $Data = [[], [], [], [], [], [], [], [], [], []];
@endphp
<div class="main-section-dashboard">
    <div class="page-title-cmn">
        <h1 class="pagepara">
            Booked Car By Bank
        </h1>
    </div>
    <div class="data-table-order">
        <div class="data-table-header">
            <div class="max-10">ID</div>
            <div class="max-10">Car</div>
            <div class="max-10">User</div>
            <div class="max-10">Car Amount</div>
            <div class="max-10">Phone</div>
            <div class="max-10">Country</div>
            <div class="max-10">Created at </div>
            <div class="max-10 text-end pe-3">Action</div>
        </div>
        @foreach ($Data as $item)
            <div class="data-table-data mk no--cursor">
                <div class="max-10s">{{ $loop->iteration }}</div>
                <div class="max-10s">Suzuki</div>
                <div class="max-10s">Admin</div>
                <div class="max-10s">USD 2666.67 </div>
                <div class="max-10s">+92 327 4537698 </div>
                <div class="max-10s">Pakistan</div>
                <div class="max-10s">2024-06-21</div>
                <div class="max-10s justify-content-end pe-3">
                    <span data-bs-toggle="modal" data-bs-target="#edit_order_modal" class="cursor-pointer mop">&#x270E;</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="modal fade cmn-modls-ordr" id="edit_order_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Booked Car By Bank Detail</h5>
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
                        <div class="col-lg-4">
                            <label for="">Currency <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Total Car Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Car Amount">
                        </div>
                        <div class="col-lg-4">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select class="form-select h-40">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="">Comment</label>
                            <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <hr>
                        </div>
                        <div class="col-12 text-end mt-0">
                            <button class="btn btn-apply">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
