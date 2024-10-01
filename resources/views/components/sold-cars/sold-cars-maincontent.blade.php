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
        <table class="w-100 data-table-cus">
            <thead>
                <tr>
                    <th class="heading-table">
                        Name
                    </th>
                    <th class="heading-table">
                        Phone
                    </th>
                    <th class="heading-table">
                        Email
                    </th>
                    <th class="heading-table">
                        Tracking ID
                    </th>
                    <th class="heading-table">
                        Stock ID
                    </th>
                    <th class="heading-table">
                        Country
                    </th>
                    <th class="heading-table">
                        Port
                    </th>
                    <th class="heading-table">
                        Payment Status
                    </th>
                    <th class="heading-table">
                        Order Status 
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
                            Test
                        </td>
                        <td class="title-table py-3">
                            +923248977717
                        </td>
                        <td class="title-table py-3 word-break">
                                testsatjapan@gmail.com
                        </td>
                        <td class="title-table py-3">
                            664766781
                        </td>
                        <td class="title-table py-3">
                            sat-80618478
                        </td>
                        <td class="title-table py-3">
                            barbados
                        </td>
                        <td class="title-table py-3">
                            Bridgetown
                        </td>
                        <td class="title-table py-3">
                            Paid
                        </td>
                        <td class="title-table py-3">
                            cancelled
                        </td>
                        <td class="title-table py-3">
                            <img src="{{ asset('assets/images/icons/download-line.svg') }}" class="cursor-pointer" height="18" width="18" alt="">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
