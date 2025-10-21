@php
    $Data = [[], [], [], [], [], [], [], [], [], []];
@endphp
<div class="main-section-dashboard">
    {{-- Desktop --}}
    <div class="d-md-block d-none">
        <div class="page-title-cmn">
            <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <h1 class="pagepara">
                    Reserve Car
                </h1>
                <div class="d-flex align-items-center">
                    <button class="cta primary"><img src="{{ asset('assets/images/icons/plus-icon.svg') }}" loading="lazy"
                            height="24" width="24" alt="icon"> Manual Reserve Car</button>
                </div>
            </div>
            <div class="mt-3 d-flex align-items-center gap-2 justify-content-end">
                <div class="position-relative select-field">
                    <select class="form-select dashboard filter">
                        <option value="" selected>Filter</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                    <img src="{{ asset('assets/images/icons/filter-lines.svg') }}" class="icon-left" height="20"
                        width="20" loading="lazy" alt="icon">
                </div>
                <div class="position-relative">
                    <input type="text" class="form-control search-input" placeholder="Search">
                    <img src="{{ asset('assets/images/icons/search-lg.svg') }}" class="search-input-icon" height="20"
                        width="20" loading="lazy" alt="icon">
                </div>
            </div>
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
    {{-- Mobile --}}
    <div class="d-md-none d-block">
        <div class="mobile-common-header">
            <div class="head">
                <img src="{{ asset('assets/images/icons/m-menu.svg') }}" alt="menu-icon" data-bs-toggle="offcanvas"
                    href="#sidebar_mobile" role="button">
                <h2 class="cmn-heading-title">
                    Reserve Car
                </h2>
            </div>
            <button class="cta primary">
                <img src="{{ asset('assets/images/icons/export-table.svg') }}" height="24" width="24"
                    loading="eager" alt="icon">
                Manual Reserve
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
        <div class="selection-buttons-multiple mt-3">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio_m" id="All_m" autocomplete="off"
                    checked="">
                <label class="btn btn-outline-primary" for="All_m">All</label>

                <input type="radio" class="btn-check" name="btnradio_m" id="Unread_m" autocomplete="off">
                <label class="btn btn-outline-primary" for="Unread_m">Unread</label>

                <input type="radio" class="btn-check" name="btnradio_m" id="Pending Email_m" autocomplete="off">
                <label class="btn btn-outline-primary" for="Pending Email_m">Pending Email</label>
            </div>
        </div>
        <div class="order-listing-mobile">
            @foreach ($Data as $item)
                <div class="item mb-1 pb-2">
                    <div class="card rounded-0 border-0 order-card-mobile">
                        <div class="card-body">
                            <h2 class="title">2018 Nissan Nv200 Vanette Van Dx</h2>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                <span class="sub-title">User Name:</span>
                                <span class="sub-title fw-semibold">Hafiz Gull</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                <span class="sub-title">Send Email::</span>
                                <span class="sub-title fw-semibold badge bg-primary">Reminder</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                <span class="sub-title">Payment Proof:</span>
                                <span class="sub-title fw-semibold badge bg-success">Uploaded</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                <span class="sub-title">Action:</span>
                                <span class="sub-title fw-semibold fs-6" data-bs-toggle="offcanvas"
                                    data-bs-target="#price_quote" aria-controls="price_quote">✎</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="modal fade cmn-modls-ordr" id="edit_order_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Reserve Car Detail</h5>
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
                        <div class="col-lg-6">
                            <label for="">Status <span class="text-danger">*</span></label>
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
                            <label for="">Total Car Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control h-40" placeholder="Car Amount">
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
<div class="modal fade cmn-modls-ordr" id="manual_order_modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="modal-title-text">Reserve Car Manual</h5>
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
                            <input type="number" class="form-control h-40" placeholder="Stock ID">
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
{{-- Price Quote --}}
<div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="price_quote" aria-labelledby="price_quoteLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/icons/arrow-left-back.svg') }}" width="24" height="24"
                loading="lazy" data-bs-dismiss="offcanvas" aria-label="Close" />
            <h5 class="offcanvas-title fs-6 fw-semibold" id="price_quoteLabel">Price Quote</h5>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="mb-2 pb-1">
            <div class="price-quote-details">
                <span class="title">Stock ID:</span>
                <span class="para">sat-14827570</span>
            </div>
            <div class="price-quote-details">
                <span class="title">Car Amount:</span>
                <span class="para">¥ 1,843,000</span>
            </div>
            <div class="price-quote-details">
                <span class="title">City:</span>
                <span class="para">Karachi</span>
            </div>
            <div class="price-quote-details">
                <span class="title">Country:</span>
                <span class="para">Pakistan</span>
            </div>
            <div class="price-quote-details">
                <span class="title">Created at:</span>
                <span class="para">13-10-2025</span>
            </div>
            <div class="price-quote-details">
                <span class="title">Remaining Time:</span>
                <span class="para">16h : 27m : 44s</span>
            </div>
        </div>
        <div class="mb-2 pb-1">
            <h2 class="fw-bold fs-6">Reserve Car Detail</h2>
        </div>
        <div class="mb-2 pb-1">
            <label for="Name*">Name</label>
            <input type="text" class="form-control" placeholder="Hafiz Gull">
        </div>
        <div class="mb-2 pb-1">
            <label for="Phone">Phone</label>
            <input type="number" class="form-control" placeholder="+92">
        </div>
        <div class="mb-2 pb-1">
            <label for="Email*">Email*</label>
            <input type="email" class="form-control" placeholder="example@gmail.com">
        </div>
        <div class="mb-2 pb-1">
            <label for="Currency">Currency</label>
            <select name="Currency" class="form-select">
                <option value="">USD</option>
                <option value="">USD</option>
                <option value="">USD</option>
            </select>
        </div>
        <div class="mb-2 pb-1">
            <label for="Total Car Amount">Total Car Amount</label>
            <input type="number" class="form-control" placeholder="54654">
        </div>
        <div class="mb-2 pb-1">
            <label for="Comment">Comment</label>
            <textarea class="form-control h-100" placeholder="Comment" rows="6"></textarea>
        </div>
        <div class="mb-2 pb-1">
            <button class="cta primary w-100">Save</button>
        </div>
    </div>
</div>
