    <div class="siddashboard">
        <a href="/" class="hide-div">
            <img src="{{ asset('assets/images/logos/sat-logo.webp') }}" class="sat-logo-sidebar " height="55"
                width="165" alt="">
        </a>
        <ul class="dashboard-list mb-auto">
            <li class="dashboard-list-item" onclick="window.location.href='/'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#dashboard_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/m-dashboard.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Dashboard
                </span>
            </li>
            {{-- active --}}
            <li class="dashboard-list-item" onclick="window.location.href='/order-dashboard'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#order_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/order-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Order
                </span>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/bank-transfer'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#bankT_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/bank-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Bank Transfer
                </span>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/reserve-car'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#reserve_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/reserve-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Reserve Car
                </span>
            </li>
            <li class="dashboard-list-item" data-bs-toggle="collapse" data-bs-target="#collapse_operations"
                aria-expanded="false" aria-controls="collapse_operations"
                onclick="window.location.href='/operation-dashboard'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#reserve_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/reserve-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Operations
                </span>
            </li>
            <div class="collapse" id="collapse_operations">
                <ul>
                    <li>Operations</li>
                    <li>Manual Shipping List</li>
                    <li>Sold Cars Info</li>
                </ul>
            </div>

        </ul>
        <ul class="dashboard-list pt-0 pb-c24">
            <li class="dashboard-list-item" onclick="window.location.href='/settings'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#setting_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/settings-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Settings
                </span>
            </li>
            <li class="dashboard-list-item" onclick="window.location.href='/logout'">
                <svg width="24" height="24" class="dashborad-icons hide-div">
                    <use href="#logout_icon"></use>
                </svg>
                <img src="{{ asset('assets/images/icons/logout-m.svg') }}" class="me-2 hide-m" height="16"
                    width="16" alt="">
                <span>
                    Logout
                </span>
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
