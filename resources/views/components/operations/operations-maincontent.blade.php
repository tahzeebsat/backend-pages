<div class="main-section-dashboard">
    <div class="page-title-cmn d-flex justify-content-between">
        <h1 class="pagepara">
            Operations
        </h1>
    </div>
    <div class="py-3">
        <div class="search-field-reserve shadow-sm">
            <img src="{{ asset('assets/images/icons/search-lg.svg') }}" height="20" width="20" alt="">
            <input type="text" placeholder="Search Stock ID">
        </div>
    </div>
    <div class="card-items mb-3" id="operations_sec_cards">
        <div class="row g-2">
            <div class="col-lg-12">
                <div class="item-card shadow-sm">
                    <h2><u> Car Detail</u></h2>
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="https://satjapan.com/photos/land_cruiser_prado/2024-04-24/0.61274200_1713957972.jpg"
                                width="100%" height="170" class="contain" alt="">
                        </div>
                        <div class="col-lg-9">
                            <h2>2022 Toyota Land Cruiser Prado</h2>
                            <div class="d-flex gap-4 flex-wrap">
                                <p><strong>Year:</strong> <span> 2022-00</span></p>
                                <p><strong>Engine:</strong> <span> 2700 cc</span></p>
                                <p><strong>Mileage:</strong> <span> 14139 km</span></p>
                                <p><strong>Transmission:</strong> <span> AT</span></p>
                            </div>
                            <p><strong>Car Price:</strong> <span>4210000</span></p>
                            <p><strong>Car Sold:</strong> <span>No</span></p>
                            <p><strong>Car Reserved:</strong> <span>Yes</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item-card shadow-sm">
                    <h2><u> Chasis No</u></h2>
                    <h3>Chasis No</h3>
                    <input type="text" class="form-control" placeholder="Chasis No">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item-card shadow-sm">
                    <h2><u> Mileage</u></h2>
                    <h3>Mileage (km)</h3>
                    <input type="text" class="form-control" placeholder="Mileage">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item-card shadow-sm">
                    <h2><u> Car Active</u></h2>
                    <h3>Car Active Status</h3>
                    <select class="form-select">
                        <option value="">Yes</option>
                        <option value="">0</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item-card shadow-sm">
                    <h2><u> Price</u></h2>
                    <h3>Currency</h3>
                    <select class="form-select">
                        <option value="">VND</option>
                        <option value="">0</option>
                    </select>
                    <h3 class="mt-2">
                        Price
                    </h3>
                    <input type="text" class="form-control" placeholder="Price" value="0">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item-card shadow-sm">
                    <h2><u> Shipping Cost</u></h2>
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <h3>Country</h3>
                            <select class="form-select">
                                <option value="">Select a Country</option>
                                <option value="">0</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h3>Shipping Port</h3>
                            <select class="form-select">
                                <option value="">Select a City</option>
                                <option value="">0</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h3>Currency</h3>
                            <select class="form-select">
                                <option value="">JPY</option>
                                <option value="">0</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h3>Shipping Cost</h3>
                            <input type="text" class="form-control" placeholder="Shipping Cost" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item-card shadow-sm">
                    <h2><u>Fetch Images</u></h2>
                    <button class="btn-fetch">Fetch Images</button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="item-card shadow-lg d-flex justify-content-end">
                    <button class="btn-fetch">Update All</button>
                </div>
            </div>
        </div>
    </div>
</div>
