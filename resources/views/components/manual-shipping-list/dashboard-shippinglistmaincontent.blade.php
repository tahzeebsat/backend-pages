@php
    $Data = [[], [], [], [], [], []];
@endphp
<div class="main-section-dashboard">
    <div class="page-title-cmn d-flex justify-content-between">
        <h1 class="pagepara">
            Manual Shipping List
        </h1>
        <a class="manual-reserve-btn">Operations<span>+</span></a>
    </div>
    <div class="pt-3">
        <label for="" class="cmn-text">Stock ID</label>
        <div class="search-field-reserve shadow-sm">
            <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20" alt="">
            <input type="text" placeholder="Search Stock ID">
        </div>
    </div>
    <div class="data-table-order">
        <div class="data-table-header">
            <div class="max-10">ID</div>
            <div class="max-10">stock</div>
            <div class="max-10">Name</div>
            <div class="max-10">Make</div>
            <div class="max-10">Model</div>
            <div class="max-10">Country</div>
            <div class="max-10">City</div>
            <div class="max-10 text-end pe-3">Shipping Cost</div>
        </div>
        @foreach ($Data as $item)
            <div class="data-table-data mk" style="cursor:default">
                <div class="max-10s">{{ $loop->iteration }}</div>
                <div class="max-10s">Suzuki</div>
                <div class="max-10s">Admin</div>
                <div class="max-10s">USD 2666.67 </div>
                <div class="max-10s">+92 327 4537698 </div>
                <div class="max-10s">Pakistan</div>
                <div class="max-10s">2024-06-21</div>
                <div class="max-10s justify-content-end pe-3">
                  123124
                </div>
            </div>
        @endforeach
    </div>
</div>
