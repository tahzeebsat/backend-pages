    <div class="modal fade new_bid cmn--modal" id="new_bid" tabindex="-1" aria-labelledby="new_bidLabel"
        data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <h1 class="modal-title fs-5" id="new_bidLabel">New Bid</h1>
                        <span class="sat-status modal-manual-status">Manual</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- tabs --}}
                    <div>
                        <ul class="nav nav-tabs" id="newbid_tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="customer" data-bs-toggle="tab"
                                    data-bs-target="#customer-pane" type="button" role="tab"
                                    aria-controls="customer-pane" aria-selected="true">
                                    <span class="count">1</span>
                                    Customer
                                </button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bid-type" data-bs-toggle="tab"
                                    data-bs-target="#bid-type-pane" type="button" role="tab"
                                    aria-controls="bid-type-pane" aria-selected="false">
                                    <span class="count">2</span>
                                    Bid Type</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="car-details" data-bs-toggle="tab"
                                    data-bs-target="#car-details-pane" type="button" role="tab"
                                    aria-controls="car-details-pane" aria-selected="false">
                                    <span class="count">3</span>
                                    Car Details</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bid-details" data-bs-toggle="tab"
                                    data-bs-target="#bid-details-pane" type="button" role="tab"
                                    aria-controls="bid-details-pane" aria-selected="false">
                                    <span class="count">4</span>
                                    Bid Details</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="deposit" data-bs-toggle="tab"
                                    data-bs-target="#deposit-pane" type="button" role="tab"
                                    aria-controls="deposit-pane" aria-selected="false"><span
                                        class="count">5</span>Deposit</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="notes" data-bs-toggle="tab"
                                    data-bs-target="#notes-pane" type="button" role="tab"
                                    aria-controls="notes-pane" aria-selected="false"><span
                                        class="count">6</span>Notes</button>
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_46481_112531)">
                                        <path
                                            d="M6.08601 6.00041L4.67151 4.58641L5.37851 3.87891L7.50001 6.00041L5.37851 8.12191L4.67151 7.41441L6.08601 6.00041Z"
                                            fill="#5D6370" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46481_112531">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="submit" data-bs-toggle="tab"
                                    data-bs-target="#submit-pane" type="button" role="tab"
                                    aria-controls="submit-pane" aria-selected="false"><span
                                        class="count">7</span>Submit</button>
                            </li>
                        </ul>
                    </div>
                    {{-- tabs items --}}
                    <div class="tab-content" id="newbid_tabs_items">
                        {{-- customer --}}
                        <div class="tab-pane show active" id="customer-pane" role="tabpanel"
                            aria-labelledby="customer-pane" tabindex="0">
                            {{-- search action --}}
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="tab--title">Customer</h2>
                                <button id="toggle_customer" class="sat-btn btn--sm primary-outline"><img
                                        src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                                        style="filter: brightness(0%);" loading="lazy" height="16" width="16"
                                        alt="icon">New Customer</button>
                            </div>
                            {{-- for existing customer --}}
                            <div class="toggle-existing">
                                {{-- search --}}
                                <div class="search--item">
                                    <input type="text" placeholder="Search by name or email..."
                                        class="form-control">
                                    <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                                        height="16" loading="lazy" alt="search-icon" />
                                </div>
                                {{-- customer listing --}}
                                <ul class="customer--listing">
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list--item">
                                            <div>
                                                <h2 class="title">Pacific Auto Group</h2>
                                                <p class="para">info@pacificauto.com</p>
                                            </div>
                                            <div class="value">SAT $1500</div>
                                        </div>
                                    </li>
                                </ul>
                                {{-- selected customer --}}
                                <div class="selected--customer">
                                    <div class="customer--item">
                                        <h2 class="title">Pacific Auto Group</h2>
                                        <p class="para">info@pacificauto.com <span>+81-3-1234-5678</span></p>
                                        <p class="sat--balance">SAT Balance: $1500</p>
                                    </div>
                                    <div class="value">SAT $1500</div>
                                </div>
                            </div>
                            {{-- for new customer --}}
                            <div class="toggle-new d-none">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="text--grey fw-normal">Customer Name</label>
                                        <input type="text" class="form-control" placeholder="e.g. STK-4421">
                                    </div>
                                    <div class="col-6">
                                        <label class="text--grey fw-normal">Email</label>
                                        <input type="text" class="form-control"
                                            placeholder="e.g. info@pacificauto.com">
                                    </div>
                                    <div class="col-6">
                                        <label class="text--grey fw-normal">Phone</label>
                                        <input type="text" class="form-control"
                                            placeholder="e.g. +81-3-1234-5678">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bid type --}}
                        <div class="tab-pane" id="bid-type-pane" role="tabpanel" aria-labelledby="bid-type-pane"
                            tabindex="0">
                            <div class="bid--type">
                                <h2 class="tab--title">BID TYPE</h2>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="bid--type-selection">
                                            <input type="radio" class="btn-check bid-type-toggle" name="bid_type"
                                                id="single_bid" data-type="single" checked />
                                            <label class="btn mb-0" for="single_bid">
                                                <h3 class="title">Single Bid</h3>
                                                <p class="para">Bid on one specific vehicle</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bid--type-selection">
                                            <input type="radio" class="btn-check bid-type-toggle" name="bid_type"
                                                id="bundle_bid" data-type="bundle">
                                            <label class="btn mb-0" for="bundle_bid">
                                                <h3 class="title">Bundle Bid</h3>
                                                <p class="para">Bid on multiple vehicles as a package</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- car details --}}
                        <div class="tab-pane" id="car-details-pane" role="tabpanel"
                            aria-labelledby="car-details-pane" tabindex="0">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="tab--title">Car Details</h2>
                                <button class="sat-btn btn--sm secondary-light-outline bundle-only d-none"><img
                                        src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                                        style="filter: brightness(0%);" loading="lazy" height="16" width="16"
                                        alt="icon">Add Another Car</button>
                            </div>
                            {{-- car list --}}
                            <div class="cardetail_listing mt-3">
                                <div class="car--detail-card">
                                    <div class="title--detail-card mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="sat-status approved-status car--count">Car 1</span>
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center gap-2">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                            <label class="form-check-label mb-0" for="Manual Entry">Manual
                                                Entry</label>
                                        </div>
                                    </div>
                                    {{-- manual entry --}}
                                    <div class="manual--entry">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="text--grey fw-normal">Lot Number *</label>
                                                <input type="text" class="form-control" placeholder="LOT-8832">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="text--grey fw-normal">Auction Site *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label class="text--grey fw-normal">Car Details (optional)</label>
                                                <textarea rows="4" class="form-control" placeholder="Car Detail"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- not manual entry --}}
                                    <div class="manual--entry d-none">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="text--grey fw-normal">Stock ID *</label>
                                                <input type="text" class="form-control" placeholder="STK-4421">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bid details --}}
                        <div class="tab-pane" id="bid-details-pane" role="tabpanel"
                            aria-labelledby="bid-details-pane" tabindex="0">
                            <h2 class="tab--title mb-2">BID DETAILS</h2>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="text--grey fw-normal">Bid Price*</label>
                                    <input type="text" class="form-control" placeholder="e.g. $8,500" />
                                </div>
                                <div class="col-md-4 bundle-only d-none">
                                    <label class="text--grey fw-normal">Quantity *</label>
                                    <input type="text" class="form-control" placeholder="e.g. 2" />
                                </div>
                                <div class="col-md-4">
                                    <label class="text--grey fw-normal">CURRENCY</label>
                                    <select class="form-select">
                                        <option value="" selected>¥ JPY / USD</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="text--grey fw-normal">Auction Date (optional)</label>
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="col-md-12">
                                    <div class="bids--detail-card">
                                        <div class="d-flex align-items-center flex-column gap-1">
                                            <h2 class="title text--grey">Price/Car</h2>
                                            <p class="para text--black">$8,500</p>
                                        </div>
                                        <div class="d-flex align-items-center flex-column gap-1">
                                            <h2 class="title text--grey">Qty</h2>
                                            <p class="para text--black">2</p>
                                        </div>
                                        <div class="d-flex align-items-center flex-column gap-1">
                                            <h2 class="title text--grey">Total Bid</h2>
                                            <p class="para text--blue-secondary-light">$1,500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- deposit --}}
                        <div class="tab-pane" id="deposit-pane" role="tabpanel" aria-labelledby="deposit-pane"
                            tabindex="0">
                            <h2 class="tab--title mb-2">DEPOSIT</h2>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="submit--review-card">
                                        <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                            <h2 class="title text--grey">Deposit per car (10%)</h2>
                                            <p class="para text--black">$525.2</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                            <h2 class="title text--grey">Quantity</h2>
                                            <p class="para text--black">1</p>
                                        </div>

                                        <div class="w-10 border mb-2"></div>

                                        <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                            <h2 class="title text--black">Total Deposit</h2>
                                            <p class="para text--blue">$525.2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="text--grey fw-normal">Payment Method</label>
                                    <select class="form-select text--black">
                                        <option value="" selected>Card</option>
                                        <option value="">Card</option>
                                        <option value="">Card</option>
                                        <option value="">Card</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="text--grey fw-normal">Payment Method</label>
                                    <div class="d-flex align-items-center gap-3 justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Payment_method"
                                                id="Payment Received">
                                            <label class="form-check-label mb-0" for="Payment Received">
                                                Payment Received
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Payment_method"
                                                id="Payment Pending" checked>
                                            <label class="form-check-label mb-0" for="Payment Pending">
                                                Payment Pending
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="text--grey fw-normal mb-2">PAYMENT PROOF</label>

                                    <div class="payment--proof-card image-upload">

                                        <input type="file" class="file-input" accept="image/png, image/jpeg"
                                            hidden>

                                        <div class="upload--textarea drop-area">

                                            <div class="upload--img">
                                                <img src="{{ asset('assets/images/icons/upload_image.svg') }}"
                                                    height="40" width="40" alt="upload icon"
                                                    class="preview-image">
                                            </div>

                                            <div class="payment--upload-text">
                                                <p class="upload_para text--blue-secondary-light">
                                                    Click to upload
                                                    <span class="ms-1 text--grey">or drag and drop</span>
                                                </p>
                                                <p class="upload_restriction text--grey">
                                                    PNG, JPG (max. 800x400px)
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- notes --}}
                        <div class="tab-pane" id="notes-pane" role="tabpanel" aria-labelledby="notes-pane"
                            tabindex="0">
                            <h2 class="tab--title mb-2">NOTES & INSTRUCTIONS</h2>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="text--grey fw-normal">INTERNAL NOTES (OPTIONAL)</label>
                                    <textarea rows="4" class="form-control h-100"
                                        placeholder="e.g. Repeat customer, priority bidding, special instructions…"></textarea>
                                </div>
                            </div>
                        </div>
                        {{-- submit --}}
                        <div class="tab-pane" id="submit-pane" role="tabpanel" aria-labelledby="submit-pane"
                            tabindex="0">
                            <h2 class="tab--title mb-2">REVIEW & SUBMIT</h2>
                            {{-- for single --}}
                            <div class="submit--review-card single-only">
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Customer</h2>
                                    <p class="para text--black">Tanaka Motors</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Bid Type</h2>
                                    <p class="para text--black">Single Bid</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Vehicle</h2>
                                    <p class="para text--black">STK-4421 — Toyota Aqua S (2019)</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Auction</h2>
                                    <p class="para text--black">LOT-8832 · USS Tokyo · ×1</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Bid Amount</h2>
                                    <p class="para text--black">$8,500</p>
                                </div>

                                <div class="w-10 border mb-2"></div>

                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Deposit</h2>
                                    <p class="para text--black">$850 · Card</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Notes</h2>
                                    <p class="para text--black">Repeat customer, priority bidding</p>
                                </div>

                                <div class="w-10 border mb-2"></div>

                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">TOTAL BID</h2>
                                    <p class="para text--blue">$8,500</p>
                                </div>
                            </div>
                            {{-- for bundle --}}
                            <div class="submit--review-card bundle-only d-none">
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Customer</h2>
                                    <p class="para text--black">Tanaka Motors</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Bid Type</h2>
                                    <p class="para text--black">Single Bid</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Cars</h2>
                                    <p class="para text--black">STK-4421 · STK-6601 (2 cars)</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Auction</h2>
                                    <p class="para text--black">TAA Yokohama · LOT-8832, LOT-2210</p>
                                </div>

                                <div class="w-10 border mb-2"></div>

                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Price/Car</h2>
                                    <p class="para text--black">$45,453</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Quantity</h2>
                                    <p class="para text--black">2</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--black">Total Bid</h2>
                                    <p class="para text--black">$90,906</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--black">Total Deposit</h2>
                                    <p class="para text--black">$90,906</p>
                                </div>

                                <div class="w-10 border mb-2"></div>

                                <div class="d-flex align-items-center gap-2 justify-content-between mb-2">
                                    <h2 class="title text--grey">Payment</h2>
                                    <p class="para text--black">Card · Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="prevBtn" class="sat-btn grey text--blue">
                        <img src="{{ asset('assets/images/icons/chevron-blue-left.svg') }}" width="16"
                            height="16" loading="lazy" alt="arrow right">
                        Back
                    </button>
                    <button type="button" id="nextBtn" class="sat-btn primary">Next
                        <img src="{{ asset('assets/images/icons/arrow-white-right.svg') }}" width="12"
                            height="12" loading="lazy" alt="arrow right">
                    </button>
                    <div id="last_step_btn" class="d-none">
                        <div class="d-flex align-items-center gap-3">
                            <button type="button" class="sat-btn grey text--blue">
                                <img src="{{ asset('assets/images/icons/file-list-icon.svg') }}" width="20"
                                    height="20" loading="lazy" alt="arrow right">
                                Save as Draft
                            </button>
                            <button type="button" class="sat-btn primary">Submit Bid</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
