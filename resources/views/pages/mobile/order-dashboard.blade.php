<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <title>Mobile Dashboard</title>
</head>
@php
    $OrderData = [[], [], [], [], []];
@endphp

<body>
    @component('components.common.mobile-headings', ['title' => 'Orders Details'])
        Heading
    @endcomponent

    <section class="container-fluid" id="search_mobile">
        <div class="dul-flds">
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="drp_search_list" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Search Email
                </button>
                <ul class="dropdown-menu" id="select_search">
                    <li class="dropdown-item">Email</li>
                    <li class="dropdown-item">Order Number</li>
                    <li class="dropdown-item">Name</li>
                    <li class="dropdown-item">Phone Number</li>
                </ul>
            </div>
            <div class="search-input-field-order">
                <div class="input-src-order">
                    <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="16" width="16"
                        alt="">
                    <input type="text" placeholder="Search Order Number" class="search-order-number">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="slide__details">
        <div class="slide_container">
            <ul class="slide_items_details">
                <li data-bs-toggle="offcanvas" data-bs-target="#status_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Status</span><img src="{{ asset('assets/images/icons/arrow-down.svg') }}" height="14"
                            width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#device_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Devices</span><img src="{{ asset('assets/images/icons/arrow-down.svg') }}" height="14"
                            width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#manual_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Manual Order</span><img src="{{ asset('assets/images/icons/arrow-down.svg') }}"
                            height="14" width="14">
                    </div>
                </li>
                <li data-bs-toggle="offcanvas" data-bs-target="#invoice_m">
                    <div class="d-flex align-items-center gap-1">
                        <span> Create Manual Invoice's</span><img
                            src="{{ asset('assets/images/icons/arrow-down.svg') }}" height="14" width="14">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    {{-- mobile view --}}
    <section class="container-fluid ord-de-par">
        <h2>Orders Details</h2>
        <p>Measure your advertising ROI and track and report website traffic.</p>
    </section>

    <section class="container-fluid cards-details-items">
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
                        data-bs-toggle="collapse" data-bs-target="#collapse_receipt{{ $loop->iteration }}"><img
                            src="{{ asset('assets/images/icons/arrow-down.svg') }}"
                            style="transition: transform 0.3s ease"></span>
                </div>
                <div class="collapse col_rec" id="collapse_receipt{{ $loop->iteration }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="ord-title">Order# 123456789</p>
                        <div class="order-print">
                            <img src="{{ asset('assets/images/icons/mail-o-p.svg') }}" height="20" width="20"
                                alt="">
                            <img src="{{ asset('assets/images/icons/printer-o-l.svg') }}" height="20"
                                width="20" alt="">
                        </div>
                    </div>
                    <p class="order-date">August 27.2024 11:33AMvia Desktop</p>
                    <div class="order-prod">
                        <img src="https://satjapan.com/photos/Noah/2024-06-10/0.49110700_1718022754.jpg"
                            height="75" width="110" alt="">
                        <div class="ordr-spec-pro">
                            <div class="d-flex justify-content-between mb-10">
                                <span class="ori-title">Car Price:</span>
                                <span class="ori-para">$5100</span>
                            </div>
                            <div class="d-flex justify-content-between mb-10">
                                <span class="ori-title">Shipment Price:</span>
                                <span class="ori-para">$150</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="ori-title">Additional Price:</span>
                                <span class="ori-para">$200</span>
                            </div>
                        </div>
                    </div>
                    <div class="ordr-spec-pr2">
                        <div class="d-flex justify-content-between mb-10">
                            <span class="ori-title">Product Name:</span>
                            <span class="ori-para">Audi Luxury Vehicles 1909</span>
                        </div>
                        <div class="d-flex justify-content-between mb-10">
                            <span class="ori-title">Port:</span>
                            <span class="ori-para">Thailand</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="ori-title">Additional:</span>
                            <span class="ori-para">Thailand</span>
                        </div>
                    </div>
                    <div class="total-payable">
                        <div class="brder">
                            <span>Total Payable Amount:</span>
                            <span>$ 6200</span>
                        </div>
                    </div>
                    {{-- tabs comments prev order --}}
                    <div class="tabs-fst">
                        <ul class="tabs-list">
                            <li class="tabs-list-items active">Comments</li>
                            <li class="tabs-list-items">Previous Orders</li>
                        </ul>
                    </div>
                    <div class="comment d-flex coment_fields">
                        <textarea class="form-control coment-area w-100" placeholder="Notify Address" rows="4"></textarea>
                        <button class="btn btn-cust">✓</button>
                    </div>
                    <div class="prev_order d-none">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>Order No</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#57779362</td>
                                    <td>ready_for_shipment</td>
                                    <td>$0</td>
                                    <td>06 Sep 2024, 1:06 PM</td>
                                </tr>
                                <tr>
                                    <td>#57779362</td>
                                    <td>ready_for_shipment</td>
                                    <td>$0</td>
                                    <td>06 Sep 2024, 1:06 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- tabs comments prev order end --}}
                    <div class="ord">
                        <div class="order-payment">
                            <div class="order-sections">
                                <p class="heading-op">Payment Type:</p>
                                <p class="sub-heading-op">Bank</p>
                            </div>
                        </div>
                        <div class="order-payment mt-2">
                            <div class="order-sections d-flex justify-content-between">
                                <div class="sec-1">
                                    <p class="heading-op">Status:</p>
                                    <p class="sub-heading-op">Paid</p>
                                </div>
                                <div class="sec-2">
                                    <a class="link-order-specs" data-bs-toggle="modal"
                                        data-bs-target="#change_payment">
                                        Change Payment Status
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="order-payment mt-2">
                            <div class="order-sections d-flex justify-content-between align-items-center border-0">
                                <div class="sec-1">
                                    <p class="heading-op mb-0">Status:</p>
                                    <a href="javascript:;" class="link-status-specs" data-bs-toggle="modal"
                                        data-bs-target="#manage_status">preparing</a>
                                </div>
                                <div class="sec-2">
                                    <button class="btn-order-specs">
                                        <img src="http://127.0.0.1:8000/assets/images/icons/mail-msg.svg"
                                            height="14" width="14" alt=""> Notify User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customer-info">
                        <div class="cust-detail">
                            <ul class="list">
                                <li class="head">Customer Info:</li>
                                <li class="para mb-2">Sinbad General Supply &amp; motors Co LTD</li>
                                <li><span class="head">Phone:</span> <span class="para"> +255754430887</span></li>
                                <li><span class="head">Email:</span> <span class="para">
                                        Iamuzairmajeed@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="files-detail">
                            <ul class="fields">
                                <li class="head">Accepted file types: pdf, doc, docx</li>
                                <li class="fil">
                                    <label for="" class="mb-1">Certificates</label>
                                    <input type="file" placeholder="Certificates to upload" name=""
                                        id="">
                                </li>
                                <li class="head">Accepted file types: pdf, doc, docx</li>
                                <li class="fil">
                                    <label for="" class="mb-1">Export</label>
                                    <input type="file" placeholder="Export certificate" name=""
                                        id="">
                                </li>
                                <li class="head">Accepted file types: pdf, doc, docx</li>
                                <li class="fil">
                                    <label for="" class="mb-1">Bill</label>
                                    <input type="file" placeholder="Bill of Landing" name=""
                                        id="">
                                </li>
                                <li class="head">Accepted file types: pdf, doc, docx</li>
                                <li class="fil">
                                    <label for="" class="mb-1">Invoice</label>
                                    <input placeholder="Invoice" type="file" name="" id="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- tabs for notify and consignee --}}
                    <div class="tabs-scnd">
                        <ul class="tabs-list">
                            <li class="scnd-list-items active">Consignee Information</li>
                            <li class="scnd-list-items">Notify Information</li>
                        </ul>
                    </div>
                    <div class="consignee_information">
                        <div class="row g-3">
                            <div class="col-6">
                                <label>Consignee Name</label>
                                <input type="text" class="form-control h-40" placeholder="Name">
                            </div>
                            <div class="col-6">
                                <label>Consignee Country</label>
                                <select class="form-select">
                                    <option value="">Country</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Consignee State</label>
                                <input type="text" class="form-control h-40" placeholder="State">
                            </div>
                            <div class="col-6">
                                <label>Consignee City</label>
                                <select class="form-select">
                                    <option value="">City</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Consignee Email</label>
                                <input type="email" class="form-control h-40" placeholder="Email">
                            </div>
                            <div class="col-6">
                                <label>Consignee Phone</label>
                                <input type="number" class="form-control h-40" placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <label>Consignee Address</label>
                                <textarea class="form-control" placeholder="Your Address" rows="4"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn submit-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="notify_info d-none">
                        <div class="row g-3">
                            <div class="col-6">
                                <label>Notify Name</label>
                                <input type="text" class="form-control h-40" placeholder="Name">
                            </div>
                            <div class="col-6">
                                <label>Notify Country</label>
                                <select class="form-select">
                                    <option value="">Country</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Notify State</label>
                                <input type="text" class="form-control h-40" placeholder="State">
                            </div>
                            <div class="col-6">
                                <label>Notify City</label>
                                <select class="form-select">
                                    <option value="">City</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label>Notify Email</label>
                                <input type="email" class="form-control h-40" placeholder="Email">
                            </div>
                            <div class="col-6">
                                <label>Notify Phone</label>
                                <input type="number" class="form-control h-40" placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <label>Notify Address</label>
                                <textarea class="form-control" placeholder="Your Address" rows="4"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn submit-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- tabs for notify and consignee end --}}
                </div>
            </div>
        @endforeach
    </section>

    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent

    @component('components.common.modals.dashboard-modals')
        modal for change payment
        modal for Manage Status
    @endcomponent

    @component('components.common.svgs-Icons')
        Svgs for project
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
                <li>Cerate Order</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas offcanvas-bottom cmn--offcanv" id="invoice_m" aria-labelledby="device_mLabel">
        <div class="offcanvas-body">
            <ul class="list-offcanva">
                <li class="active">Order Invoice</li>
                <li>Desktop (20)</li>
                <li>Reserve Invoice</li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script>
        $("#select_search").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_search_list").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
        // for first tabs
        $('.tabs-list-items').click(function() {
            $('.tabs-list-items').removeClass('active');
            $(this).addClass('active');

            if ($(this).text() === 'Comments') {
                $('.coment_fields').removeClass('d-none');
                $('.prev_order').addClass('d-none');
            } else if ($(this).text() === 'Previous Orders') {
                $('.coment_fields').addClass('d-none');
                $('.prev_order').removeClass('d-none');
            }
        });
        // for second tabs
        $('.scnd-list-items').click(function() {
            $('.scnd-list-items').removeClass('active');
            $(this).addClass('active');

            if ($(this).text() === 'Consignee Information') {
                $('.consignee_information').removeClass('d-none');
                $('.notify_info').addClass('d-none');
            } else if ($(this).text() === 'Notify Information') {
                $('.consignee_information').addClass('d-none');
                $('.notify_info').removeClass('d-none');
            }
        });
    </script>
</body>

</html>
