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
    @component('components.common.mobile-headings', ['title' => 'Dashboard'])
        Heading
    @endcomponent
    {{-- search-para --}}
    <div class="container-fluid search-para">
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
                    <ul class="dropdown-menu w-100" id="select_month">
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
                    <ul class="dropdown-menu w-100" id="select_year">
                        <li class="dropdown-item">2025</li>
                        <li class="dropdown-item">2024</li>
                        <li class="dropdown-item">2023</li>
                        <li class="dropdown-item">2022</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- sale-numbers --}}
    <div class="container-fluid">
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
    {{-- progress-card-section --}}
    <div class="container-fluid">
        <div class="progress-card-section">
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progress-card shadow-sm">
                        <h3>Unread Mails</h3>
                        <p>$1,280</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">15%</span>
                                <span>last mth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progress-card shadow-sm">
                        <h3>Today's Inquires</h3>
                        <p>14</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="downfall">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 downfall">10%</span>
                                <span>last mth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="progress-card shadow-sm">
                        <h3>Today's Auction</h3>
                        <p>25</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">20%</span>
                                <span>last mth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent

    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script>
        $("#select_year").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_year").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
        $("#select_month").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_month").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
    </script>
</body>

</html>
