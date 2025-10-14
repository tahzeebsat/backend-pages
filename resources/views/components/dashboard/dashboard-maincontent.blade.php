@php
    $Data = [[], [], [], []];
@endphp

<div class="main-section-dashboard">

    <div class="page-title-cmn d-md-block d-none">
        <h1 class="pagepara">
            Dashboard
        </h1>
    </div>

    <div class="progress-card-section">
        <div class="row g-3">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Orders Created</h3>
                            <img src="{{ asset('assets/images/icons/order-created.png') }}" height="34"
                                width="34" loading="lazy" alt="icons">
                        </div>
                        <p>142</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">10%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Price Quotes Pending (Used Cars)</h3>
                            <img src="{{ asset('assets/images/icons/price-quote-usedcar.png') }}" height="34"
                                width="34" loading="lazy" alt="icons">
                        </div>
                        <p>3</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">3%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Price Quotes Pending (New Cars)</h3>
                            <img src="{{ asset('assets/images/icons/price-quote-newcar.png') }}" height="34"
                                width="34" loading="lazy" alt="icons">
                        </div>
                        <p>14</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="downfall">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 downfall">-10%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">User Inquiries Today</h3>
                            <img src="{{ asset('assets/images/icons/user-inquiry.png') }}" height="34" width="34"
                                loading="lazy" alt="icons">
                        </div>
                        <p>25</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">20%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Reservations Pending</h3>
                            <img src="{{ asset('assets/images/icons/reservation-pending.png') }}" height="34"
                                width="34" loading="lazy" alt="icons">
                        </div>
                        <p>25</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">20%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="sale-numbers mt-0">
        <div class="row g-3">
            <div class="col-12">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset('assets/images/icons/vehicle-statistics.png') }}" height="22" width="22"
                        loading="lazy" alt="icon">
                    <h2 class="fs-6 mb-0">Vehicle Statistics</h2>
                </div>
            </div>
            @foreach ($Data as $item)
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="sale-numbers-item">
                        <span></span>
                        <div class="count-tainer">
                            <h3>Total Vehicles</h3>
                            <p>$148.40</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="progress-card-section">
        <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Unread Mails</h3>
                            <img src="{{ asset('assets/images/icons/unread-mails.png') }}" height="24"
                                width="24" loading="lazy" alt="icons">
                        </div>
                        <p>142</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">10%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Today's Auction</h3>
                            <img src="{{ asset('assets/images/icons/today-auction.png') }}" height="24"
                                width="24" loading="lazy" alt="icons">
                        </div>
                        <p>3</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">3%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Pending Orders</h3>
                            <img src="{{ asset('assets/images/icons/pending-orders.png') }}" height="24"
                                width="24" loading="lazy" alt="icons">
                        </div>
                        <p>14</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="downfall">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 downfall">-10%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="" class="text-decoration-none">
                    <div class="progress-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="mb-0">Shipped Orders</h3>
                            <img src="{{ asset('assets/images/icons/shipped-orders.png') }}" height="24"
                                width="24" loading="lazy" alt="icons">
                        </div>
                        <p>25</p>
                        <div class="count-progress">
                            <svg width="20" height="20" class="rise">
                                <use href="#dashboard_arrow"></use>
                            </svg>
                            <div class="progress-det">
                                <span class="me-2 rise">20%</span>
                                <span>Last Month</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
