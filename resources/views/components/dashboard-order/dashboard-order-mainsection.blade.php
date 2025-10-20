@php
    $OrderData = [[], [], [], [], []];
@endphp
<div class="main-section w-100">
    {{-- desktop view --}}
    <div class="d-md-block d-none">
        <div class="heading-section-order">
            <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <h2 class="cmn-heading-title">
                    Orders Details
                </h2>
                <div class="action-dashboard-order">
                    <button class="cta">Create Order Invoice</button>
                    <button class="cta">Create Reservation Invoice</button>
                    <button class="cta">
                        <img src="{{ asset('assets/images/icons/exchange-icon.svg') }}" loading="lazy" height="24"
                            width="24" alt="icon">
                        Change Car in Order
                    </button>
                    <button class="cta primary">
                        <img src="{{ asset('assets/images/icons/plus-icon.svg') }}" loading="lazy" height="24"
                            width="24" alt="icon">
                        Create Order
                    </button>
                </div>
            </div>
            <div class="dropdowns-div">
                <div class="left">
                    <div class="wrapper">
                        <div class="left">
                            <div class="flex-grow-1">
                                <span>Status</span>
                                <select class="form-control">
                                    <option selected>All (717)</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <img src="{{ asset('assets/images/icons/arrow-down-dropdown.svg') }}" height="24"
                                width="24" loading="lazy" alt="icon">
                        </div>
                        <div class="middle">
                            <div class="flex-grow-1">
                                <span>Missing Documents</span>
                                <select class="form-control">
                                    <option selected>Preparing (45)</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <img src="{{ asset('assets/images/icons/arrow-down-dropdown.svg') }}" height="24"
                                width="24" loading="lazy" alt="icon">
                        </div>
                        <div class="end">
                            <div class="flex-grow-1">
                                <span>Country</span>
                                <select class="form-control">
                                    <option selected>United Kingdom</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <img src="{{ asset('assets/images/icons/arrow-down-dropdown.svg') }}" height="24"
                                width="24" loading="lazy" alt="icon">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="wrapper">
                        <div class="left">
                            <div class="flex-grow-1">
                                <span>Status</span>
                                <select class="form-control">
                                    <option selected>All (717)</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <img src="{{ asset('assets/images/icons/arrow-down-dropdown.svg') }}" height="24"
                                width="24" loading="lazy" alt="icon">
                        </div>
                        <div class="end search-bar">
                            <input type="text" placeholder="Search">
                            <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20"
                                loading="lazy" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <th class="heading-table">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($OrderData as $item)
                        <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-table' : '' }}">
                            <td class="title-table">
                                Salman Afzal
                            </td>
                            <td class="title-table">
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
                            <td class="title-table" data-bs-toggle="collapse"
                                data-bs-target="#dynamic_id_{{ $loop->iteration }}">
                                <img src="{{ asset('assets/images/icons/open-close.webp') }}" height="16"
                                    width="16" alt="">
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
                                                <img src="{{ asset('assets/images/icons/mail-o-p.svg') }}"
                                                    class="cursor-pointer" height="24" width="24"
                                                    alt="">
                                                <img src="{{ asset('assets/images/icons/printer-o-l.svg') }}"
                                                    class="cursor-pointer" height="24" width="24"
                                                    alt="">
                                            </div>
                                        </div>
                                        {{-- specs cars --}}
                                        <div class="mt-4">
                                            <h2 class="ord-title-install mb-2">Buyer Information</h2>
                                            <div class="new-cars-specs mb-3">
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
                                                        id="pinvoice_field{{ $loop->iteration . 'po' }}">
                                                    <button
                                                        onclick="handleUpload('pending_invoice_field{{ $loop->iteration . 'po' }}','pinvoice_field{{ $loop->iteration . 'po' }}')">Upload</button>
                                                </div>
                                                <input type="file" hidden
                                                    id="pending_invoice_field{{ $loop->iteration . 'po' }}">
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
                                            <div class="d-flex justify-content-center mt-2">
                                                <button class="btn btn-primary w-100 lh-normal"
                                                    style="max-width: 100px;font-size:14px">Submit</button>
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
    <section class="cards-details-items d-block d-sm-block d-md-none">
        <div class="mobile-common-header">
            <div class="head">
                <img src="{{ asset('assets/images/icons/m-menu.svg') }}" alt="menu-icon" data-bs-toggle="offcanvas"
                    href="#sidebar_mobile" role="button">
                <h2 class="cmn-heading-title">
                    Orders Details
                </h2>
            </div>
            <button class="cta primary" data-bs-toggle="offcanvas" data-bs-target="#actions_bottom"
                aria-controls="actions_bottom">
                <img src="{{ asset('assets/images/icons/plus-icon.svg') }}" loading="lazy" height="20"
                    width="20" alt="icon">
                Action
            </button>
        </div>
        <div class="mobile-search-bar">
            <div class="search-type" data-bs-toggle="offcanvas" data-bs-target="#sort_bottom"
                aria-controls="sort_bottom">
                <img src="{{ asset('assets/images/icons/filter-lines.svg') }}" height="20" width="20"
                    loading="lazy" alt="icon">
                <span>Stock ID</span>
            </div>
            <div class="search-bar-mobile">
                <img src="http://127.0.0.1:8000/assets/images/icons/search-lg.svg" height="20" width="20"
                    loading="lazy" alt="icon">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="list-selection">
            <div class="main-list">
                <span class="active">All (717) <img src="{{ asset('assets/images/icons/close-slide.svg') }}"
                        width="16" height="16" loading="lazy" alt=""></span>
                <span>Status <img src="{{ asset('assets/images/icons/arrow-down-slide.svg') }}" width="16"
                        height="16" loading="lazy" alt=""></span>
                <span>Missing Document <img src="{{ asset('assets/images/icons/arrow-down-slide.svg') }}"
                        width="16" height="16" loading="lazy" alt=""></span>
                <span>Country <img src="{{ asset('assets/images/icons/arrow-down-slide.svg') }}" width="16"
                        height="16" loading="lazy" alt=""></span>
            </div>
        </div>
        <div class="order-listing-mobile">
            @foreach ($OrderData as $item)
                <div data-bs-toggle="offcanvas" data-bs-target="#order_detail" aria-controls="order_detail"
                    class="item">
                    <div class="card rounded-0 border-0 order-card-mobile">
                        <div class="card-body">
                            <h2 class="title">2018 Nissan Nv200 Vanette Van Dx</h2>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="sub-title">Order:</span>
                                    <span class="sub-title fw-semibold">760881550</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <span class="sub-title">Status:</span>
                                    <span class="sub-title fw-semibold">Partial Payment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

{{-- action bottom sheet --}}
<div class="offcanvas offcanvas-bottom top-rounded" tabindex="-1" id="actions_bottom"
    aria-labelledby="actions_bottomLabel">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="action-dashboard-order">
            <button class="w-100 cta" data-bs-toggle="offcanvas" data-bs-target="#manual_order_invoice"
                aria-controls="manual_order_invoice">Create Order Invoice</button>
            <button class="w-100 cta" data-bs-toggle="offcanvas" data-bs-target="#create_manual_reserve_invoice"
                aria-controls="create_manual_reserve_invoice">Create Reservation Invoice</button>
            <button class="w-100 cta" data-bs-toggle="offcanvas" data-bs-target="#change_car_order"
                aria-controls="change_car_order">
                <img src="http://127.0.0.1:8000/assets/images/icons/exchange-icon.svg" loading="lazy" height="24"
                    width="24" alt="icon">
                Change Car in Order
            </button>
            <button class="w-100 cta primary" data-bs-toggle="offcanvas" data-bs-target="#create_new_order_invoice"
                aria-controls="create_new_order_invoice">
                <img src="http://127.0.0.1:8000/assets/images/icons/plus-icon.svg" loading="lazy" height="24"
                    width="24" alt="icon">
                Create Order
            </button>
        </div>
    </div>
</div>
{{-- sort bottom sheet --}}
<div class="offcanvas offcanvas-bottom top-rounded" tabindex="-1" id="sort_bottom"
    aria-labelledby="sort_bottomLabel">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body py-0">
        <ul>
            <li>Stock ID</li>
            <li>Chassis No</li>
            <li>Price</li>
            <li>Order Number</li>
            <li>Email</li>
            <li>Name</li>
            <li>Phone Number</li>
        </ul>
    </div>
</div>
{{-- order detail --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="order_detail"
    aria-labelledby="order_detailLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="order_detailLabel">Orders Details</h5>
        </div>
    </div>
    <div class="offcanvas-body p-0">
        <div class="pb-2 border-bottom">
            <div class="order-detail-sidebar">
                <div class="detail">
                    <div>
                        <h3 class="title">Order# 821770793</h3>
                        <p class="para">October 07, 2025 10:24 AM via desktop</p>
                    </div>
                    <div class="d-flex gap-3">
                        <img src="{{ asset('assets/images/icons/mail-o-p.svg') }}" class="cursor-pointer"
                            height="20" width="20" alt="">
                        <img src="{{ asset('assets/images/icons/printer-o-l.svg') }}" class="cursor-pointer"
                            height="20" width="20" alt="">
                    </div>
                </div>
                <div class="car-detail">
                    <img src="https://d36dyyw8x5qpnf.cloudfront.net/photos/yaris_hybrid/2025-09-04/0_01789500_1757011469/1.jpg"
                        class="rounded" loading="eager" width="137" height="81" alt="icon" />
                    <div class="flex-grow-1">
                        <h3 class="title">2018 TOYOTA LITEACE VAN DX</h3>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="sub-title">Car Price:</span>
                            <span class="sub-para">$526</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="sub-title">Shipment Price:</span>
                            <span class="sub-para">$1054</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="sub-title">Handling Fee:</span>
                            <span class="sub-para">$347</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="sub-title">SAT Warranty:</span>
                            <span class="sub-para">0</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="sub-title">Additional Price:</span>
                            <span class="sub-para">0</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 justify-content-between mt-3">
                    <h3 class="total-payable">Total Payable Amount</h3>
                    <h4 class="total-payable-amount">$ 7,279</h4>
                </div>
            </div>
        </div>
        <div class="card-accordians">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            Payment Details
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column mb-2">
                                <h2 class="title">Payment Type:</h2>
                                <p class="para">Bank</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div>
                                    <h2 class="title">Status:</h2>
                                    <p class="para">Paid</p>
                                </div>
                                <button class="cta primary fw-normal">Change Payment Status</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div>
                                    <h2 class="title">Status:</h2>
                                    <p class="para">Partial Payment</p>
                                </div>
                                <button class="cta primary fw-normal">
                                    <img src="{{ asset('assets/images/icons/mail-msg.svg') }}" loading="lazy"
                                        height="16" width="16" alt="icon">
                                    Sent Email
                                </button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div>
                                    <h2 class="title">Slip</h2>
                                    <p class="para">Tester (Test) (1212)</p>
                                </div>
                                <button class="cta primary fw-normal">
                                    Add Slip
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            Customer Details
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div style="font-size: 14px">
                                <label for="">Customer Info</label>
                                <div class="d-flex align-item-center justify-content-between gap-2 mb-2">
                                    <span>Name</span>
                                    <span>John smith</span>
                                </div>
                                <div class="d-flex align-item-center justify-content-between gap-2 mb-2">
                                    <span>Phone:</span>
                                    <span>+93701234597</span>
                                </div>
                                <div class="d-flex align-item-center justify-content-between gap-2 mb-2">
                                    <span>Email:</span>
                                    <span>rtestmail@mail.comm33</span>
                                </div>
                                <div class="d-flex align-item-center justify-content-between gap-2 mb-2">
                                    <button class="cta primary w-100">Update Customer Info</button>
                                </div>
                                <div class="d-flex align-item-center justify-content-between gap-2 mb-2">
                                    <span style="color:#94A3B8">Accepted file types: pdf, doc, docx</span>
                                </div>
                                <div class="consignee-Information">
                                    <div class="mb-2 pb-1">
                                        <label for="Courrier Name">Courrier Name</label>
                                        <input type="text" class="form-control" placeholder="William son">
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <label for="Tracking Number">Tracking Number</label>
                                        <input type="number" class="form-control" placeholder="8549546">
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <label for="country">Document Type</label>
                                        <select name="country" class="form-select">
                                            <option value="">Select</option>
                                            <option value="">Select</option>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <label for="country">Upload File</label>
                                        <input type="file" class="form-control h-100">
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <span
                                            class="d-flex align-items-center gap-2 lh-base fw-bold justify-content-end"
                                            style="color:#2384C1">
                                            &plus;
                                            Add Document
                                        </span>
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <label for="country"
                                            class="d-flex align-items-center justify-content-between gap-2"><span>Document
                                                Type</span> <span class="text-danger fw-normal">Remove</span></label>
                                        <select name="country" class="form-select">
                                            <option value="">Select</option>
                                            <option value="">Select</option>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <label for="country">Upload File</label>
                                        <input type="file" class="form-control h-100">
                                    </div>
                                    <div class="mb-2 pb-1">
                                        <button class="cta primary w-100">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Order Details
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <nav class="slide">
                                <div class="nav nav-tabs" id="nav-tab-detail" role="tablist">
                                    <button class="nav-link text-nowrap active" id="nav-comments-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-comments" type="button"
                                        role="tab" aria-controls="nav-comments"
                                        aria-selected="true">Comments</button>
                                    <button class="nav-link text-nowrap" id="nav-prev-order-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-prev-order" type="button" role="tab"
                                        aria-controls="nav-prev-order" aria-selected="false">Previous Order</button>
                                    <button class="nav-link text-nowrap" id="nav-order-tip-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-order-tip" type="button" role="tab"
                                        aria-controls="nav-order-tip" aria-selected="false">Order Tip</button>
                                    <button class="nav-link text-nowrap" id="nav-order-service-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-order-service" type="button"
                                        role="tab" aria-controls="nav-order-service"
                                        aria-selected="false">Ordered Services</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane show active" id="nav-comments" role="tabpanel"
                                    aria-labelledby="nav-comments-tab" tabindex="0">
                                    <div class="mt-1 pt-2">
                                        <label class="fs-6 mb-3">Ordered Service </label>
                                        <textarea class="form-control h-100" rows="7"></textarea>
                                        <button class="w-100 cta primary mt-3">Submit</button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-prev-order" role="tabpanel"
                                    aria-labelledby="nav-prev-order-tab" tabindex="0">
                                    <div class="pre-order-details-info">
                                        <div class="max-pre-order">
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1">
                                                <span>Order:</span>
                                                <span class="fw-semibold">760881550</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1">
                                                <span>Status:</span>
                                                <span class="fw-semibold">Completed</span>
                                            </div>
                                        </div>
                                        <div class="max-pre-order">
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1">
                                                <span>Total:</span>
                                                <span class="fw-semibold">Rs0</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1">
                                                <span>Date:</span>
                                                <span class="fw-semibold">08 Oct 2025, 8:23 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-order-tip" role="tabpanel"
                                    aria-labelledby="nav-order-tip-tab" tabindex="0">
                                    <div class="order-tip">
                                        <span>Recived Tip</span>
                                        <span class="fw-bold text-black">$50</span>
                                    </div>
                                    <div class="order-tip">
                                        <span>Recived Tip</span>
                                        <span class="fw-bold text-black">$50</span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-order-service" role="tabpanel"
                                    aria-labelledby="nav-order-service-tab" tabindex="0">
                                    <div class="order-tip flex-column gap-2 align-items-start">
                                        <span class="fw-bold text-black">Insurance Service</span>
                                        <span class="fw-bold text-black">Custom Clearance</span>
                                        <span class="fw-bold text-black">Car Carrier Service</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsefourth" aria-expanded="false"
                            aria-controls="flush-collapsefourth">
                            Consignee Details
                        </button>
                    </h2>
                    <div id="flush-collapsefourth" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <nav class="slide">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-consignee-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-consignee" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Consignee Information</button>
                                    <button class="nav-link" id="nav-notify-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-notify" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Notify Information</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane show active" id="nav-consignee" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <div class="consignee-Information">
                                        <h2 class="title-form">Consignee Information <span>(Optional)</span></h2>
                                        <div class="mb-2 pb-1">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" placeholder="William son">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="country">Country</label>
                                            <select name="country" class="form-select">
                                                <option value="">United State</option>
                                                <option value="">United State</option>
                                                <option value="">United State</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="State">State</label>
                                            <select name="State" class="form-select">
                                                <option value="">State</option>
                                                <option value="">State</option>
                                                <option value="">State</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="City">City</label>
                                            <select name="City" class="form-select">
                                                <option value="">City</option>
                                                <option value="">City</option>
                                                <option value="">City</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control"
                                                placeholder="williamson977@gmail.com">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="Phone">Phone</label>
                                            <input type="number" class="form-control" placeholder="+92">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <button class="cta primary w-100">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-notify" role="tabpanel"
                                    aria-labelledby="nav-notify-tab" tabindex="0">
                                    <div class="consignee-Information">
                                        <h2 class="title-form">Notify Information <span>(Optional)</span></h2>
                                        <div class="mb-2 pb-1">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" placeholder="William son">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="country">Country</label>
                                            <select name="country" class="form-select">
                                                <option value="">United State</option>
                                                <option value="">United State</option>
                                                <option value="">United State</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="State">State</label>
                                            <select name="State" class="form-select">
                                                <option value="">State</option>
                                                <option value="">State</option>
                                                <option value="">State</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="City">City</label>
                                            <select name="City" class="form-select">
                                                <option value="">City</option>
                                                <option value="">City</option>
                                                <option value="">City</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control"
                                                placeholder="williamson977@gmail.com">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <label for="Phone">Phone</label>
                                            <input type="number" class="form-control" placeholder="+92">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <button class="cta primary w-100">Update Information</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Change Car in Order --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="change_car_order"
    aria-labelledby="change_car_orderLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="change_car_orderLabel">Change Car in Order</h5>
        </div>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="mb-2 pb-1">
            <label for="name">Order Number</label>
            <input type="number" class="form-control" placeholder="561561389">
        </div>
        <div class="mb-2 pb-1">
            <label for="name">New Stock ID</label>
            <input type="number" class="form-control" placeholder="ID">
        </div>
        <div class="mb-2 pb-1">
            <label for="Currency">Currency</label>
            <select name="Currency" class="form-select">
                <option value="">$</option>
                <option value="">$</option>
                <option value="">$</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Price">Price</label>
            <input type="number" class="form-control" placeholder="56451">
        </div>
        <div class="mb-2 pb-1">
            <label for="Total Price">Total Price</label>
            <input type="number" class="form-control" placeholder="Total Price">
        </div>
        <div class="mb-2 pb-1">
            <label for="User Paid">User Paid</label>
            <input type="number" class="form-control" placeholder="User Paid">
        </div>
        <div class="mb-2 pb-1">
            <label for="Previous Car Status">Previous Car Status</label>
            <div class="d-flex align-items-center gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="Keep it sold">
                    <label class="form-check-label" for="Keep it sold">
                        Keep it sold
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="Make it Live">
                    <label class="form-check-label" for="Make it Live">
                        Make it Live
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-2 pb-1">
            <button class="cta primary w-100">Change Car</button>
        </div>
    </div>
</div>
{{-- Create Manual Reserve Invoice --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="create_manual_reserve_invoice"
    aria-labelledby="create_manual_reserve_invoiceLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="create_manual_reserve_invoiceLabel">Create Manual Reserve
                Invoice</h5>
        </div>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="mb-2 pb-1">
            <label for="Date*">Date*</label>
            <input type="date" class="form-control" placeholder="12-5-2025">
        </div>
        <div class="mb-2 pb-1">
            <label for="Due Date*">Due Date*</label>
            <input type="date" class="form-control" placeholder="12-5-2025">
        </div>
        <div class="mb-2 pb-1">
            <label for="Name*">Name*</label>
            <input type="text" class="form-control" placeholder="Hafiz">
        </div>
        <div class="mb-2 pb-1">
            <label for="Phone*">Phone*</label>
            <input type="number" class="form-control" placeholder="+92">
        </div>
        <div class="mb-2 pb-1">
            <label for="Email*">Email*</label>
            <input type="email" class="form-control" placeholder="example@gmail.com">
        </div>
        <div class="mb-2 pb-1">
            <label for="Address*">Address*</label>
            <textarea class="form-control h-100" placeholder="address" rows="7"></textarea>
        </div>
        <div class="mb-2 pb-1">
            <label for="Currency">Currency</label>
            <select name="Currency" class="form-select">
                <option value="">$</option>
                <option value="">$</option>
                <option value="">$</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Car Amount*">Car Amount*</label>
            <input type="number" class="form-control" placeholder="56451">
        </div>
        <div class="mb-2 pb-1">
            <label for="Payment Status*">Payment Status*</label>
            <select name="Payment Status*" class="form-select">
                <option value="">Paid</option>
                <option value="">Unpaid</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Stock ID*">Stock ID*</label>
            <input type="number" class="form-control" placeholder="sat-5466541">
        </div>
        <div class="mb-2 pb-1">
            <button class="cta primary w-100">Download Invoice</button>
        </div>
    </div>
</div>
{{-- Manual Order Invoice --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="manual_order_invoice"
    aria-labelledby="manual_order_invoiceLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="manual_order_invoiceLabel">Manual Order Invoice</h5>
        </div>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="mb-2 pb-1">
            <label for="Stock ID*">Stock ID*</label>
            <input type="number" class="form-control" placeholder="sat-5466541">
        </div>
        <div class="mb-2 pb-1">
            <label for="Order No*">Order No*</label>
            <input type="number" class="form-control" placeholder="5634164">
        </div>
        <div class="mb-2 pb-1">
            <label for="Date*">Date*</label>
            <input type="date" class="form-control" placeholder="12-5-2025">
        </div>
        <div class="mb-2 pb-1">
            <label for="Due Date*">Due Date*</label>
            <input type="date" class="form-control" placeholder="12-5-2025">
        </div>
        <div class="mb-2 pb-1">
            <label for="Name*">Name*</label>
            <input type="text" class="form-control" placeholder="Hafiz">
        </div>
        <div class="mb-2 pb-1">
            <label for="Phone*">Phone*</label>
            <input type="number" class="form-control" placeholder="+92">
        </div>
        <div class="mb-2 pb-1">
            <label for="Email*">Email*</label>
            <input type="email" class="form-control" placeholder="example@gmail.com">
        </div>
        <div class="mb-2 pb-1">
            <label for="Address*">Address*</label>
            <textarea class="form-control h-100" placeholder="address" rows="7"></textarea>
        </div>
        <div class="mb-2 pb-1">
            <label for="Country">Country</label>
            <select name="Country" class="form-select">
                <option value="">Pakistan</option>
                <option value="">Pakistan</option>
                <option value="">Pakistan</option>
            </select>
        </div>
        <div class="mb-2 pb-1 d-flex align-items-center justify-content-between gap-2">
            <label for="LC:">LC:</label>
            <div class="d-flex align-items-center gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="LC" id="yes">
                    <label class="form-check-label" for="yes">
                        yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="LC" id="No">
                    <label class="form-check-label" for="No">
                        No
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-2 pb-1">
            <label for="Departure *">Departure *</label>
            <textarea class="form-control h-100" placeholder="156-1 Hatakenaka Aza Izumimachi, Iwaki, Fukushima 971-8183, Japan"
                rows="5"></textarea>
            <div class="form-check d-flex align-items-center gap-2 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="depature_address">
                <label class="form-check-label mb-0" for="depature_address">
                    use defult departure address
                </label>
            </div>
        </div>
        <div class="mb-2 pb-1">
            <label for="Destination *">Destination *</label>
            <input type="text" class="form-control" placeholder="Destination">
        </div>
        <div class="mb-2 pb-1">
            <label for="Currency">Currency</label>
            <select name="Currency" class="form-select">
                <option value="">USD</option>
                <option value="">PKR</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Car Amount*">Car Amount*</label>
            <input type="number" class="form-control" placeholder="654654">
        </div>
        <div class="mb-2 pb-1">
            <label for="Shipping Amount*">Shipping Amount*</label>
            <input type="number" class="form-control" placeholder="654654">
        </div>
        <div class="mb-2 pb-1">
            <label for="Shipping Amount*">Shipping Amount*</label>
            <input type="number" class="form-control" placeholder="6534654">
        </div>
        <div class="mb-2 pb-1">
            <label for="Insurance Fee *">Insurance Fee *</label>
            <input type="number" class="form-control" placeholder="5465">
        </div>
        <div class="mb-2 pb-1">
            <label for="Tax (%)*">Tax (%)*</label>
            <input type="number" class="form-control" placeholder="635465">
        </div>
        <div class="mb-2 pb-1">
            <label for="Payment Status*">Payment Status*</label>
            <select name="Payment Status*" class="form-select">
                <option value="">Paid</option>
                <option value="">Unpaid</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <button class="cta primary w-100">Download Invoice</button>
        </div>
    </div>
</div>
{{-- Create New Order Invoice --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="create_new_order_invoice"
    aria-labelledby="create_new_order_invoiceLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="create_new_order_invoiceLabel">New Order Invoice</h5>
        </div>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="mb-2 pb-1">
            <label for="Name*">Name*</label>
            <input type="text" class="form-control" placeholder="Hafiz">
        </div>
        <div class="mb-2 pb-1">
            <label for="Phone*">Phone*</label>
            <input type="number" class="form-control" placeholder="+92">
        </div>
        <div class="mb-2 pb-1">
            <label for="Email*">Email*</label>
            <input type="email" class="form-control" placeholder="example@gmail.com">
        </div>
        <div class="mb-2 pb-1">
            <label for="Address*">Address*</label>
            <textarea class="form-control h-100" placeholder="address" rows="7"></textarea>
        </div>
        <div class="mb-2 pb-1">
            <label for="Country">Country</label>
            <select name="Country" class="form-select">
                <option value="">Pakistan</option>
                <option value="">Pakistan</option>
                <option value="">Pakistan</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Departure *">Departure *</label>
            <textarea class="form-control h-100" placeholder="156-1 Hatakenaka Aza Izumimachi, Iwaki, Fukushima 971-8183, Japan"
                rows="5"></textarea>
            <div class="form-check d-flex align-items-center gap-2 mt-1">
                <input class="form-check-input" type="checkbox" value="" id="depature_address">
                <label class="form-check-label mb-0" for="depature_address">
                    use defult departure address
                </label>
            </div>
        </div>
        <div class="mb-2 pb-1">
            <label for="Destination *">Destination *</label>
            <input type="text" class="form-control" placeholder="Destination">
        </div>
        <div class="mb-2 pb-1">
            <label for="Payment Type">Payment Type *</label>
            <select name="Payment Type" class="form-select">
                <option value="">Stripe</option>
                <option value="">Stripe</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Currency">Currency</label>
            <select name="Currency" class="form-select">
                <option value="">USD</option>
                <option value="">PKR</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Car Amount*">Car Amount*</label>
            <input type="number" class="form-control" placeholder="654654">
        </div>
         <div class="mb-2 pb-1">
            <label for="Payment Status*">Payment Status*</label>
            <select name="Payment Status*" class="form-select">
                <option value="">Paid</option>
                <option value="">Unpaid</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Stock ID*">Stock ID*</label>
            <input type="number" class="form-control" placeholder="sat-5466541">
        </div>
        <div class="mb-2 pb-1">
            <label for="Pre-export Inspection Fee">Pre-export Inspection Fee</label>
            <input type="number" class="form-control" placeholder="5465">
        </div>
        <div class="mb-2 pb-1">
            <label for="Comment">Comment</label>
            <textarea class="form-control h-100" placeholder="Comment" rows="7"></textarea>
        </div>
        <div class="mb-2 pb-1">
            <button class="cta primary w-100">Download Invoice</button>
        </div>
    </div>
</div>
{{-- print --}}
@component('components.prints.hirer')
    Print
@endcomponent
