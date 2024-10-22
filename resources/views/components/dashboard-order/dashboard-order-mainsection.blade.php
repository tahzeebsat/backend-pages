@php
    $OrderData = [[], [], [], [], []];
@endphp
<div class="main-section w-100">
    <div class="dul-flds">
        <select name="" class="form-select" id="">
            <option value="">Search Email</option>
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
    @component('components.order-tabs-selection.order-tabs')
        Tabs
    @endcomponent
    {{-- desktop view --}}
    <div class="d-none d-md-block d-sm-none">
        <div class="data-table-order">
            <table class="w-100 data-table-cus">
                <thead>
                    <tr>
                        <th class="heading-table">
                            Name
                        </th>
                        <th class="heading-table">
                            Order ID#
                        </th>
                        <th class="heading-table">
                            Care Name
                        </th>
                        <th class="heading-table">
                            Car Amount
                        </th>
                        <th class="heading-table">
                            Installment Amount
                        </th>
                        <th class="heading-table show-install-td d-none total_orders_td">
                            Amount Duration
                        </th>
                        <th class="heading-table show-install-td d-none completed_order_td">
                            Completed Order
                        </th>
                        <th class="heading-table show-install-td d-none active_order_td">
                            Active Order
                        </th>
                        <th class="heading-table show-install-td d-none pending_order_td">
                            Pending Order
                        </th>
                        <th class="heading-table show-install-td d-none order_canceled_td">
                            Order Canceled
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($OrderData as $item)
                        <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-table' : '' }}">
                            <td class="title-table">
                                Salman Afzal
                            </td>
                            <td class="title-table" data-bs-toggle="collapse"
                                data-bs-target="#dynamic_id_{{ $loop->iteration }}">
                                18925774
                            </td>
                            <td class="title-table">
                                Suzuki
                            </td>
                            <td class="title-table">
                                $10,000
                            </td>
                            <td class="title-table">
                                $1,000
                            </td>
                            <td class="title-table show-install-td d-none total_orders_td">
                                10,Month
                            </td>
                            <td class="title-table show-install-td d-none completed_order_td">
                                completed order
                            </td>
                            <td class="title-table show-install-td d-none active_order_td">
                                10,Month
                            </td>
                            <td class="title-table show-install-td d-none pending_order_td">
                                pending
                            </td>
                            <td class="title-table show-install-td d-none order_canceled_td">
                                cancelled order
                            </td>
                        </tr>
                        <tr>
                            <td colspan="100%">
                                <div class="collapse" id="dynamic_id_{{ $loop->iteration }}">
                                    <div class="installment-div">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex gap-3">
                                                <span class="title-install">Installment /Month</span>
                                                <span class="subtitle-install">Order# 123456789</span>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <img src="https://development.satjapan.info/assets_backend/images/icons/mail-o-p.svg"
                                                    class="cursor-pointer" height="24" width="24" alt="">
                                                <img src="https://development.satjapan.info/assets_backend/images/icons/printer-o-l.svg"
                                                    class="cursor-pointer" height="24" width="24" alt="">
                                            </div>
                                        </div>
                                        {{-- specs cars --}}
                                        <div class="mt-4">
                                            <h2 class="ord-title-install">Order Details</h2>
                                            <div class="d-flex pb-3 border-bottom">
                                                <img src="https://satjapan.com/photos/land_cruiser_wagon/2024-08-05/URJ202-4178769/4129/0.40002000_1722865742.jpg"
                                                    width="120" height="80" class="img-fluid" alt="car image">
                                                <div class="specs-installment">
                                                    <h3>2017 Toyota C-HR</h3>
                                                    <div class="d-flex gap-3">
                                                        <div class="new-cars-specs">
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Year</h2>
                                                                <p class="spec cmn-stl">2010/6</p>
                                                            </div>
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Engine</h2>
                                                                <p class="spec cmn-stl">660 cc</p>
                                                            </div>
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Mileage</h2>
                                                                <p class="spec cmn-stl">12,380 km</p>
                                                            </div>
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Transmission</h2>
                                                                <p class="spec cmn-stl">MT</p>
                                                            </div>
                                                        </div>
                                                        <div class="new-cars-specs">
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Buyer Name</h2>
                                                                <p class="spec cmn-stl">Uzair Majeed</p>
                                                            </div>
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Amount Due</h2>
                                                                <p class="spec cmn-stl">$7,000</p>
                                                            </div>
                                                            <div class="specs-item-new">
                                                                <h2 class="title cmn-stl">Amount Paid</h2>
                                                                <p class="spec cmn-stl">$3,000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- total orders --}}
                                        <div class="total_orders tab-content" style="display:none;">
                                            @component('components.order-tabs-selection.common-tables', ['iteration' => $loop->iteration])
                                                Table
                                            @endcomponent
                                        </div>
                                        {{-- completed orders --}}
                                        <div class="completed_order tab-content" style="display:none;">
                                            @component('components.order-tabs-selection.common-tables', ['iteration' => $loop->iteration . 'co'])
                                                Table
                                            @endcomponent
                                        </div>
                                        {{-- active orders --}}
                                        <div class="active_order tab-content" style="display:none;">
                                            @component('components.order-tabs-selection.common-tables', ['iteration' => $loop->iteration . 'ao'])
                                                Table
                                            @endcomponent
                                        </div>
                                        {{-- pending order --}}
                                        <div class="pending_order tab-content mt-3" style="display: none">
                                            <div class="custom-width-div">
                                                <div class="upload-field">
                                                    <input type="text" disabled placeholder="Invoice"
                                                        id="fild">
                                                    <button
                                                        onclick="$('#pending_invoice_field').click()">Upload</button>
                                                </div>
                                                <input type="file" hidden id="pending_invoice_field">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Send a Email For Active Order
                                                </label>
                                            </div>
                                            <div class="my-4 d-flex justify-content-center">
                                                <button class="mark-order-btn" disabled>Active</button>
                                            </div>
                                        </div>
                                        {{-- cancelled order --}}
                                        <div class="order_canceled tab-content mt-3" style="display: none">
                                            <h3 class="title-ord-cancel">Comment</h3>
                                            <textarea rows="5" cols="5" placeholder="Type" class="form-control"></textarea>
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
                    <span class="d-para" style="cursor: pointer"
                        onclick="$(this).find('img').toggleClass('rotate-ico')" data-bs-toggle="collapse"
                        data-bs-target="#collapse_receipt{{ $loop->iteration }}22"><img
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
{{-- create order car --}}
<div class="modal fade" id="create_order_car" tabindex="-1" aria-labelledby="create_order_carLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="modal-title-text fw-bold">Create Order Car</h5>
                    <span class="clos-btn" data-bs-dismiss="modal" aria-label="Close">×</span>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-12">
                        <h3 class="fs-6 lh-normal fw-bold">Dealer</h3>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>P.O Box</label>
                        <input type="text" class="form-control" placeholder="P.O Box">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Tel No</label>
                        <input type="text" class="form-control" placeholder="Tel No">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12">
                        <h3 class="fs-6 lh-normal fw-bold">Hirer</h3>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Address: P.O Box</label>
                        <input type="text" class="form-control" placeholder="Address: P.O Box">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Tel No</label>
                        <input type="text" class="form-control" placeholder="Tel No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>ID No</label>
                        <input type="text" class="form-control" placeholder="ID No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>PIN No</label>
                        <input type="text" class="form-control" placeholder="PIN No">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12">
                        <h3 class="fs-6 lh-normal fw-bold">Vehicle Details</h3>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Make & Model</label>
                        <input type="text" class="form-control" placeholder="Make & Model">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Chasis No</label>
                        <input type="text" class="form-control" placeholder="Chasis No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Engine No</label>
                        <input type="text" class="form-control" placeholder="Engine No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Year Of Make</label>
                        <input type="text" class="form-control" placeholder="Year Of Make">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Rating</label>
                        <input type="text" class="form-control" placeholder="Rating">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Colour</label>
                        <input type="text" class="form-control" placeholder="Colour">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Registration No</label>
                        <input type="text" class="form-control" placeholder="Registration No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Registration No</label>
                        <input type="text" class="form-control" placeholder="Registration No">
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <label>Fuel Type</label>
                        <input type="text" class="form-control" placeholder="Fuel Type">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12">
                        <h3 class="fs-6 lh-normal fw-bold">Payment Details Terms And Conditions Are As Follows</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary py-2 px-4 w-100" style="max-width: 150px">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
