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
        <table class="w-100 data-table-cus">
            <thead>
                <tr>
                    <th class="heading-table">
                        ID
                    </th>
                    <th class="heading-table">
                        Car
                    </th>
                    <th class="heading-table">
                        User
                    </th>
                    <th class="heading-table">
                        Car Amount
                    </th>
                    <th class="heading-table">
                        Phone
                    </th>
                    <th class="heading-table">
                        Country
                    </th>
                    <th class="heading-table">
                        Created at
                    </th>
                    <th class="heading-table">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Data as $item)
                    <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-table' : '' }}">
                        <td class="title-table py-3">
                            {{ $loop->iteration }}
                        </td>
                        <td class="title-table py-3">
                            Suzuki
                        </td>
                        <td class="title-table py-3">
                            Admin
                        </td>
                        <td class="title-table py-3">
                            USD 2666.67
                        </td>
                        <td class="title-table py-3">
                            +92 327 4537698
                        </td>
                        <td class="title-table py-3">
                            customer
                        </td>
                        <td class="title-table py-3">
                            2024-06-21
                        </td>
                        <td class="title-table py-3">
                            <span data-bs-toggle="modal" data-bs-target="#edit_order_modal"
                            class="cursor-pointer mop">&#x270E;</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
