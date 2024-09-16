@php
    $Data = [[], [], []];
@endphp
<div class="main-section-dashboard">
    <div class="page-title-cmn  d-flex justify-content-between align-items-center">
        <h1 class="pagepara">
            Sold Cars Info
        </h1>
        <div class="search-field-reserve shadow-sm">
            <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20" alt="">
            <input type="text" placeholder="Search Stock ID">
        </div>
    </div>
    <div class="pt-3">
        
    </div>
    <div class="data-table-order">
        <div class="data-table-header">
            <div class="max-10">Name</div>
            <div class="max-10">Phone</div>
            <div class="max-10">Email</div>
            <div class="max-10">Tracking ID </div>
            <div class="max-10">Stock ID </div>
            <div class="max-10">Country</div>
            <div class="max-10">Port</div>
            <div class="max-10">Payment Status </div>
            <div class="max-10">Order Status </div>
            <div class="max-10 text-end pe-3">Export</div>
        </div>
        @foreach ($Data as $item)
            <div class="data-table-data mk" style="cursor:default">
                <div class="max-10s">Test</div>
                <div class="max-10s">+923248977717</div>
                <div class="max-10s">testsatjapan@gmail.com</div>
                <div class="max-10s">664766781 </div>
                <div class="max-10s">sat-80618478</div>
                <div class="max-10s">barbados</div>
                <div class="max-10s"> Bridgetown</div>
                <div class="max-10s"> Paid</div>
                <div class="max-10s"> cancelled</div>
                <div class="max-10s justify-content-end pe-3">
                    <img src="{{ asset('assets/images/icons/download-line.svg') }}" class="cursor-pointer" height="18" width="18" alt="">
                </div>
            </div>
        @endforeach
    </div>
</div>
