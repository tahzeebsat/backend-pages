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
    $Data = [[], [], [], [], []];
@endphp

<body>
    @component('components.common.mobile-headings', ['title' => 'Sold Cars Info'])
        Heading
    @endcomponent
    {{-- SEARCH FIELD --}}
    <div class="container-fluid">
        <div class="py-3">
            <div class="search-field-reserve shadow-sm">
                <input type="text" placeholder="Search Stock ID">
                <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20"
                    alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid mb-3">
        <div class="d-flex justify-content-end">
            <button class="manual-reserve-btn gap-1" data-bs-toggle="modal" data-bs-target="#manual_order_modal">Export
                <img src="{{ asset('assets/images/icons/external-link.svg') }}" alt=""></button>
        </div>
    </div>
    <div class="container-fluid">
        @foreach ($Data as $item)
            <div class="card-detail">
                <div class="flx-card-d">
                    <span class="d-head">Action</span>
                    <span class="d-para">     <img src="{{ asset('assets/images/icons/download-line.svg') }}" class="cursor-pointer" height="18" width="18" alt=""></span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">Name</span>
                    <span class="d-para">Magee Jennings</span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">Phone</span>
                    <span class="d-para">+16452586567</span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">Email</span>
                    <span class="d-para">jegehiw@mailinator.com	</span>
                </div>
                <div class="flx-card-d">
                    <span class="d-head">Tracking ID</span>
                    <span class="d-para">440077712</span>
                </div>
                <div class="flx-card-d mb-2">
                    <span class="d-head">View More</span>
                    <span class="d-para" style="cursor: pointer" onclick="$(this).find('img').toggleClass('rotate-ico')"
                        data-bs-toggle="collapse" data-bs-target="#collapse_receipt{{ $loop->iteration }}"><img
                            src="{{ asset('assets/images/icons/arrow-down.svg') }}"
                            style="transition: transform 0.3s ease"></span>
                </div>
                <div class="collapse col_rec" id="collapse_receipt{{ $loop->iteration }}">
                    <div class="flx-card-d">
                        <span class="d-head">Stock ID</span>
                        <span class="d-para">sat-32664963</span>
                    </div>
                    <div class="flx-card-d">
                        <span class="d-head">Country</span>
                        <span class="d-para">malaysia</span>
                    </div>
                    <div class="flx-card-d">
                        <span class="d-head">Port</span>
                        <span class="d-para">Bintulu</span>
                    </div>
                    <div class="flx-card-d">
                        <span class="d-head">Payment Status	</span>
                        <span class="d-para">	Paid</span>
                    </div>
                    <div class="flx-card-d">
                        <span class="d-head">Order Status</span>
                        <span class="d-para">cancelled</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent

    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
</body>

</html>
