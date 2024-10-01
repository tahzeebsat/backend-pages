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
                        Shipping Cost
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
                            2666.67
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
