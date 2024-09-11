    {{-- sidebar mobile --}}
    <div class="offcanvas offcanvas-start max-280" id="sidebar_mobile" aria-labelledby="sidebar_mobileLabel">
        <div class="offcanvas-header justify-content-between">
            <span></span>
            <h5 class="offcanvas-title">Menu</h5>
            <img src="{{ asset('assets/images/icons/close-model.svg') }}" alt="close-icon"
                data-bs-dismiss="offcanvas">
        </div>
        <div class="offcanvas-body pt-0">
            @component('components.common.main-sidebar')
                Main Sidebar
            @endcomponent
        </div>
    </div>