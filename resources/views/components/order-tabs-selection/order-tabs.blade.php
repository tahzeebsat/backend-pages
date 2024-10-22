<section class="container-fluid py-3">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end px-0">
            <button class="manual-reserve-btn" data-bs-toggle="modal" data-bs-target="#create_order_car">Create Orders
                Car <span>+</span></button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 px-0">
            <div class="mtabs-container">
                <ul class="tabs-selections">
                    <li class="active" id="total_orders_tab" onclick="showTabContent('total_orders');">Total Orders
                        <span>26</span></li>
                    <li id="completed_order_tab" onclick="showTabContent('completed_order');">Completed Order <span>03</span></li>
                    <li id="active_order_tab" onclick="showTabContent('active_order');">Active Order <span>03</span></li>
                    <li id="pending_order_tab" onclick="showTabContent('pending_order');">Pending <span>03</span></li>
                    <li id="order_canceled_tab" onclick="showTabContent('order_canceled');">Order Canceled <span>03</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
