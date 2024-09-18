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
    @component('components.common.mobile-headings', ['title' => 'Manual Shipping List'])
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
    <div class="container-fluid">
        <div class="d-flex justify-content-end">
            <a class="manual-reserve-btn">Operations<span>&#43;</span></a>
        </div>
    </div>
    <div class="container-fluid">
        @foreach ($Data as $item)
        <div class="card-booking">
            <div class="gen-item">
                <span>ID78</span>
                <span>
                    123867645
                </span>
            </div>
            <div class="gen-item">
                <span>Name</span>
                <span>Suzuki</span>
            </div>
            <div class="gen-item">
                <span>Make</span>
                <span>Admin</span>
            </div>
            <div class="gen-item">
                <span>Model</span>
                <span>PRIUS</span>
            </div>
            <div class="gen-item">
                <span>Shipping Cost</span>
                <span>¥ 276,459
                </span>
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
