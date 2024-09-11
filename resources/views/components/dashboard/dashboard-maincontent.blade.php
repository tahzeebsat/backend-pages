@php
    $Data = [[], [], [], [], []];
@endphp

<div class="main-section-dashboard">

    <div class="page-title-cmn">
        <h1 class="pagepara">
            Dashboard
        </h1>
    </div>

    <div class="search-dash">
        <div class="title-para-search">
            <h2 class="tile-srch">Good Afternoon Dev</h2>
            <p class="tile-para">Here's what's happening with your site today.</p>
        </div>
        <div class="dropdowns-elemets">
            <div class="dropdown">
                <button class="dropdown-toggle mn" type="button" id="drp_month" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    March
                </button>
                <ul class="dropdown-menu" id="select_month">
                    <li class="dropdown-item">April</li>
                    <li class="dropdown-item">May</li>
                    <li class="dropdown-item">Jun</li>
                    <li class="dropdown-item">July</li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle yr" type="button" id="drp_year" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    2026
                </button>
                <ul class="dropdown-menu" id="select_year">
                    <li class="dropdown-item">2025</li>
                    <li class="dropdown-item">2024</li>
                    <li class="dropdown-item">2023</li>
                    <li class="dropdown-item">2022</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sale-numbers">
        @foreach ($Data as $item)
            <div class="sale-numbers-item">
                <span></span>
                <div class="count-tainer">
                    <h3>Total Vehicles</h3>
                    <p>$148.40</p>
                </div>
            </div>
        @endforeach
    </div>
</div>