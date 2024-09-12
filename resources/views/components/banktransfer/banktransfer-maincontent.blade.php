@php
    $Data = [[], [], [], [], [], [], [], [], [], []];
@endphp
<div class="main-section-dashboard">
    <div class="page-title-cmn">
        <h1 class="pagepara">
            Booked Car By Bank
        </h1>
    </div>
    <div class="data-table-order">
        <div class="data-table-header">
            <div class="max-10">ID</div>
            <div class="max-10">Car</div>
            <div class="max-10">User</div>
            <div class="max-10">Car Amount</div>
            <div class="max-10">Phone</div>
            <div class="max-10">Country</div>
            <div class="max-10">Created at </div>
            <div class="max-10">Action</div>
        </div>
        @foreach ($Data as $item)
        <div class="data-table-data mk">
            <div class="max-10">{{ $loop->iteration }}</div>
            <div class="max-10">Suzuki</div>
            <div class="max-10">Admin</div>
            <div class="max-10">USD 2666.67 </div>
            <div class="max-10">+92 327 4537698 </div>
            <div class="max-10">Pakistan</div>
            <div class="max-10">2024-06-21</div>
            <div class="max-10">icons</div>
        </div>
        @endforeach
    </div>
</div>
