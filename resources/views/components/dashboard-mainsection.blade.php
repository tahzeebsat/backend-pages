@php
    $dummyData = [[], [], [], [], []];
@endphp
<div class="main-section">
    <div class="em-search">
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
                    <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20"
                        alt="">
                    <input type="text" placeholder="Search Order Number" class="search-order-number">
                </div>
            </div>
        </div>
    </div>
    <div class="data-table-order">
        <div class="data-table-header">
            <div class="max-4">
                <input class="form-check-input mt-0" type="checkbox" value="">
            </div>
            <div class="max-10">Order#</div>
            <div class="max-10">User</div>
            <div class="max-10">Payable Amount</div>
            <div class="max-10 text-center">Country</div>
            <div class="max-10">Status</div>
            <div class="max-10">Created By</div>
            <div class="max-10">Created at </div>
            <div class="max-10">Last Updated</div>
            <div class="max-10">Pay</div>
        </div>
        @foreach ($dummyData as $item)
            <div class="data-table-data mk">
                <div class="max-4">
                    <input class="form-check-input mt-0" type="checkbox" value="">
                </div>
                <div class="max-10" data-bs-toggle="collapse" data-bs-target="#dynamic_id_{{ $loop->iteration }}">
                    18925774</div>
                <div class="max-10">Salman Afzal</div>
                <div class="max-10">$ 8087</div>
                <div class="max-10 text-center">angola</div>
                <div class="max-10">Ready to Shipped</div>
                <div class="max-10">customer</div>
                <div class="max-10">06 Sep 2024, 5:49 AM </div>
                <div class="max-10">06 Sep 2024, 5:49 AM</div>
                <div class="max-10">stripe</div>
            </div>
            {{-- collapseable menu --}}
            <div class="collapse" id="dynamic_id_{{ $loop->iteration }}">
                <div class="data-table-collapse">
                    @component('components.collapse-order-detail')
                       cllapse order specs
                    @endcomponent
                    @component('components.collapse-order-specs')
                       cllapse order specs
                    @endcomponent
                </div>
            </div>
        @endforeach

    </div>
</div>
