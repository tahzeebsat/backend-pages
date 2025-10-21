    <div class="siddashboard">
        <a href="/" class="hide-div">
            <img src="{{ asset('assets/images/logos/sat-logo.webp') }}" class="sat-logo-sidebar " height="55"
                width="165" alt="">
        </a>
        <ul class="dashboard-list mb-auto">
            <li class="dashboard-list-item" onclick="window.location.href='/'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#dashboard_icon"></use>
                    </svg>

                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            {{-- active --}}
            <li class="dashboard-list-item" onclick="window.location.href='/order-dashboard'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#order_icon"></use>
                    </svg>

                    <span>
                        Order
                    </span>
                </a>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/new-car-price-quotes'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#order_icon"></use>
                    </svg>

                    <span>
                        New Cars Price Quotes
                    </span>
                </a>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/bank-transfer'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#bankT_icon"></use>
                    </svg>

                    <span>
                        Bank Transfer
                    </span>
                </a>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/reserve-car'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#reserve_icon"></use>
                    </svg>

                    <span>
                        Reserve Car
                    </span>
                </a>
            </li>
            <li class="dashboard-list-item" data-bs-toggle="collapse" data-bs-target="#collapse_operations"
                aria-expanded="false" aria-controls="collapse_operations">
                <a class="d-flex jutify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center flex-grow-1">
                        <svg width="24" height="24" class="dashborad-icons">
                            <use href="#dashboard_operations"></use>
                        </svg>

                        <span class="d-flex justify-content-between align-items-center w-100">
                            <span>
                                Operations
                            </span>
                    </div>
                    <svg width="20" height="20" class="chev-arrow-bar">
                        <use href="#dashboard_op_arrow"></use>
                    </svg>
                    </span>
                </a>
            </li>
            <div class="collapse drop-list-op" id="collapse_operations">
                <ul>
                    <li onclick="window.location.href='/operation-dashboard'"><a> Operations </a></li>
                    <li onclick="window.location.href='/manual-shipping-list'"><a> Manual Shipping List </a></li>
                    <li onclick="window.location.href='/sold-cars'"><a> Sold Cars Info </a></li>
                </ul>
            </div>

        </ul>
        <ul class="dashboard-list pt-0 pb-c24">
            <li class="dashboard-list-item" onclick="window.location.href='/settings'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#setting_icon"></use>
                    </svg>

                    <span>
                        Settings
                    </span>
                </a>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/logout'">
                <a>
                    <svg width="24" height="24" class="dashborad-icons">
                        <use href="#logout_icon"></use>
                    </svg>

                    <span>
                        Logout
                    </span>
                </a>
            </li>
        </ul>
        <div class="profile-user">
            <div class="profile-user-img">
                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>
            <div class="profile-user-info">
                <span>Sarmad Malik</span>
                <span>SarmadMalik@Gmail.com</span>
            </div>
        </div>
    </div>
