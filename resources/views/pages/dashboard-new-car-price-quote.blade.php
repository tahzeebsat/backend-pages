<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <title>Manual Shipping List
    </title>
</head>

<body>
    @php
        $OrderData = [[], [], [], [], []];
    @endphp
    <aside class="sidebar-dashboard  d-md-block d-sm-none d-none">
        @component('components.common.main-sidebar')
            Main Sidebar
        @endcomponent
    </aside>

    <div class="main-content">
        <div class="main-section-dashboard vh-100">
            {{-- Desktop --}}
            <div class="d-md-block d-none">
                <div class="heading-section-order">
                    <div class="d-flex align-items-center">
                        <h2 class="cmn-heading-title">
                            New Cars Price Quotes
                        </h2>
                    </div>
                    <div class="d-flex align-items-cneter justify-content-between gap-2 flex-wrap pt-3">
                        <div class="selection-buttons-multiple">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="All"
                                    autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="All">All</label>

                                <input type="radio" class="btn-check" name="btnradio" id="Unread"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="Unread">Unread</label>

                                <input type="radio" class="btn-check" name="btnradio" id="Pending Email"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="Pending Email">Pending Email</label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end gap-2 flex-md-grow-1">
                            <div class="position-relative">
                                <input type="text" class="form-control search-input" placeholder="Search">
                                <img src="{{ asset('assets/images/icons/search-lg.svg') }}" class="search-input-icon"
                                    height="20" width="20" loading="lazy" alt="icon">
                            </div>
                            <button class="cta primary">
                                <img src="{{ asset('assets/images/icons/export-table.svg') }}" height="24"
                                    width="24" loading="eager" alt="icon">
                                Export
                            </button>
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
                            <tr class="">
                                <td class="title-table py-3">
                                    1
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="bg-table">
                                <td class="title-table py-3">
                                    2
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="title-table py-3">
                                    3
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="bg-table">
                                <td class="title-table py-3">
                                    4
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="title-table py-3">
                                    5
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="bg-table">
                                <td class="title-table py-3">
                                    6
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="title-table py-3">
                                    7
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="bg-table">
                                <td class="title-table py-3">
                                    8
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="title-table py-3">
                                    9
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                            <tr class="bg-table">
                                <td class="title-table py-3">
                                    10
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
                                        class="cursor-pointer mop">✎</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Mobile --}}
            <div class="d-md-none d-block">
                <div class="mobile-common-header">
                    <div class="head">
                        <img src="{{ asset('assets/images/icons/m-menu.svg') }}" alt="menu-icon"
                            data-bs-toggle="offcanvas" href="#sidebar_mobile" role="button">
                        <h2 class="cmn-heading-title">
                            Orders Details
                        </h2>
                    </div>
                    <button class="cta primary">
                        <img src="{{ asset('assets/images/icons/export-table.svg') }}" height="24" width="24"
                            loading="eager" alt="icon">
                        Export
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
                        <img src="http://127.0.0.1:8000/assets/images/icons/search-lg.svg" height="20"
                            width="20" loading="lazy" alt="icon">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
                <div class="selection-buttons-multiple mt-3">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio_m" id="All_m" autocomplete="off"
                            checked="">
                        <label class="btn btn-outline-primary" for="All_m">All</label>

                        <input type="radio" class="btn-check" name="btnradio_m" id="Unread_m"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="Unread_m">Unread</label>

                        <input type="radio" class="btn-check" name="btnradio_m" id="Pending Email_m"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="Pending Email_m">Pending Email</label>
                    </div>
                </div>
                <div class="order-listing-mobile">
                    @foreach ($OrderData as $item)
                        <div data-bs-toggle="offcanvas" data-bs-target="#price_quote" aria-controls="price_quote"
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
            </div>
        </div>
    </div>

    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
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
    <div class="offcanvas offcanvas-end full-canvas" tabindex="-1" id="price_quote"
        aria-labelledby="price_quoteLabel">
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
                    <span class="title">Name</span>
                    <span class="para">John smith</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Phone:</span>
                    <span class="para">+93701234597</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Email:</span>
                    <span class="para">rtestmail@mail.comm33</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Marine Insurance:</span>
                    <span class="para">no</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Pre Export Inspection:</span>
                    <span class="para">no</span>
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
                    <span class="title">Car Detail:</span>
                    <span class="para">2024 Toyota PIXIS EPOCH</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Add-on service</span>
                    <span class="para">-</span>
                </div>
                <div class="price-quote-details">
                    <span class="title">Comment</span>
                    <span class="para">-</span>
                </div>
            </div>
            <div class="mb-2 pb-1">
                <label for="Destination Country">Destination Country</label>
                <select name="Destination Country" class="form-select">
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                </select>
            </div>
            <div class="mb-2 pb-1">
                <label for="Destination Port">Destination Port</label>
                <select name="Destination Port" class="form-select">
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                </select>
            </div>
            <div class="mb-2 pb-1">
                <label for="Currency">Currency</label>
                <select name="Currency" class="form-select">
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                    <option value="">Pakistan</option>
                </select>
            </div>
            <div class="mb-2 pb-1">
                <label for="Price*">Price</label>
                <input type="number" class="form-control" placeholder="54654">
            </div>
            <div class="mb-2 pb-1">
                <label for="Shipping Price">Shipping Price</label>
                <input type="number" class="form-control" placeholder="00">
            </div>
            <div class="mb-2 pb-1">
                <label for="Email*">Email*</label>
                <input type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="mb-2 pb-1">
                <label for="Comment">Comment</label>
                <textarea class="form-control h-100" placeholder="Comment" rows="6"></textarea>
            </div>
            <div class="mb-2 pb-1">
                <button class="cta primary w-100">Send Email</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
</body>

</html>
