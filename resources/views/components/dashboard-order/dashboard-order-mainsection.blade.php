@php
    $OrderData = [[], [], [], [], []];
@endphp
<div class="main-section">
    <div class="dul-flds">
        <select name="" class="form-select" id="">
            <option value="">Abc</option>
            <option value="">Abc</option>
            <option value="">Abc</option>
            <option value="">Abc</option>
            <option value="">Abc</option>
        </select>
        <div class="search-input-field-order">
            <div class="input-src-order">
                <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20"
                    alt="">
                <input type="text" placeholder="Search Order Number" class="search-order-number">
            </div>
        </div>
    </div>
    <section class="container-fluid px-0 showotab" id="slide__details">
        <div class="slide_container">
            <ul class="slide_items_details">
                <li data-bs-toggle="offcanvas" data-bs-target="#status_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Status</span><img src="http://127.0.0.1:8000/assets/images/icons/arrow-down.svg"
                            height="14" width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#device_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Devices</span><img src="http://127.0.0.1:8000/assets/images/icons/arrow-down.svg"
                            height="14" width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#manual_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Manual Order</span><img src="http://127.0.0.1:8000/assets/images/icons/arrow-down.svg"
                            height="14" width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#invoice_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Create Manual Invoice's</span><img
                            src="http://127.0.0.1:8000/assets/images/icons/arrow-down.svg" height="14"
                            width="14">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    {{-- desktop view --}}
    <div class="d-none d-md-block d-sm-none">
    <div class="data-table-order">
        <table class="w-100 data-table-cus">
            <thead>
                <tr>
                    <th class="heading-table">
                        Order#
                    </th>
                    <th class="heading-table">
                        User
                    </th>
                    <th class="heading-table">
                        Payable Amount
                    </th>
                    <th class="heading-table">
                        Country
                    </th>
                    <th class="heading-table">
                        Status
                    </th>
                    <th class="heading-table">
                        Created By
                    </th>
                    <th class="heading-table">
                        Created at
                    </th>
                    <th class="heading-table">
                        Last Updated
                    </th>
                    <th class="heading-table">
                        Pay
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($OrderData as $item)
                    <tr>
                        <td colspan="12" class="pt-2">
                            <table class="w-100">
                                <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-table' : '' }}">
                                    <td class="title-table" data-bs-toggle="collapse"
                                        data-bs-target="#dynamic_id_{{ $loop->iteration }}">
                                        18925774
                                    </td>
                                    <td class="title-table">
                                        Salman Afzal
                                    </td>
                                    <td class="title-table">
                                        $ 8087
                                    </td>
                                    <td class="title-table">
                                        angola
                                    </td>
                                    <td class="title-table">
                                        Ready to Shipped
                                    </td>
                                    <td class="title-table">
                                        customer
                                    </td>
                                    <td class="title-table">
                                        06 Sep 2024
                                    </td>
                                    <td class="title-table">
                                        06 Sep 2024
                                    </td>
                                    <td class="title-table">
                                        stripe
                                    </td>
                                </tr>
                            </table>
                            <div class="collapse" id="dynamic_id_{{ $loop->iteration }}">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 custom-sm-12">
                                        <div class="data-table-collapse">
                                            @component('components.dashboard-order.collapse-order-detail', ['Index' => $loop->iteration])
                                                cllapse order specs
                                            @endcomponent
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 custom-sm-12">
                                        <div class="data-table-collapse">
                                            @component('components.dashboard-order.collapse-order-specs')
                                                cllapse order specs
                                            @endcomponent
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    {{-- mobile view --}}
    <section class="container-fluid ord-de-par d-block d-sm-block d-md-none">
        <h2>Orders Details</h2>
        <p>Measure your advertising ROI and track and report website traffic.</p>
    </section>
    <section class="container-fluid cards-details-items d-block d-sm-block d-md-none">
        @foreach ($OrderData as $item)
            <div class="card-detail">
                <div class="flx-card-d">
                    <span class="d-head">Order#</span>
                    <span class="d-para">123867645</span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">User</span>
                    <span class="d-para">Sat-13242</span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">Status</span>
                    <span class="d-para">Ready to Shipped</span>
                </div>
                <div class="flx-card-d mb-2">
                    <span class="d-head">Receipt</span>
                    <span class="d-para" style="cursor: pointer" onclick="$(this).find('img').toggleClass('rotate-ico')"
                        data-bs-toggle="collapse" data-bs-target="#collapse_receipt{{ $loop->iteration }}22"><img
                            src="{{ asset('assets/images/icons/arrow-down.svg') }}"
                            style="transition: transform 0.3s ease"></span>
                </div>
                <div class="collapse col_rec" id="collapse_receipt{{ $loop->iteration }}22">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 custom-sm-12">
                            <div class="data-table-collapse">
                                @component('components.dashboard-order.collapse-order-detail', ['Index' => $loop->iteration])
                                    cllapse order specs
                                @endcomponent
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 custom-sm-12">
                            <div class="data-table-collapse">
                                @component('components.dashboard-order.collapse-order-specs')
                                    cllapse order specs
                                @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>


@component('components.common.modals.dashboard-modals')
    modal for change payment
    modal for Manage Status
@endcomponent

<div class="offcanvas offcanvas-bottom cmn--offcanv" id="status_m" aria-labelledby="status_mLabel">
    <div class="offcanvas-body">
        <ul class="list-offcanva">
            <li>Completed (2)</li>
            <li>Pending (2)</li>
            <li>Cancel/Returned (2)</li>
            <li>All (25)</li>
        </ul>
    </div>
</div>
<div class="offcanvas offcanvas-bottom cmn--offcanv" id="device_m" aria-labelledby="device_mLabel">
    <div class="offcanvas-body">
        <ul class="list-offcanva">
            <li>Mobile (2) </li>
            <li>Desktop (20)</li>
            <li>Tablet (06)</li>
            <li>All (25)</li>
        </ul>
    </div>
</div>
<div class="offcanvas offcanvas-bottom cmn--offcanv" id="manual_m" aria-labelledby="device_mLabel">
    <div class="offcanvas-body">
        <ul class="list-offcanva">
            <li data-bs-toggle="modal" data-bs-target="#create_order_modal">Cerate Order</li>
        </ul>
    </div>
</div>
<div class="offcanvas offcanvas-bottom cmn--offcanv" id="invoice_m" aria-labelledby="device_mLabel">
    <div class="offcanvas-body">
        <ul class="list-offcanva">
            <li class="active" data-bs-toggle="modal" data-bs-target="#order_invoice_modal">Order Invoice</li>
            <li data-bs-toggle="modal" data-bs-target="#reserve_invoice_modal">Reserve Invoice</li>
        </ul>
    </div>
</div>
{{-- modals --}}
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
