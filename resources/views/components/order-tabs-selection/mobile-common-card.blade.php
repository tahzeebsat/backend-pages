<div class="card-detail border {{ $class ?? '' }}">
    <div class="flx-card-d">
        <span class="d-head">Order#</span>
        <span class="d-para">123867645</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">Name</span>
        <span class="d-para">Sat-13242</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">Care Name</span>
        <span class="d-para">Suzuki</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">Car Amount</span>
        <span class="d-para">$10,000</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">Due Date</span>
        <span class="d-para d-flex align-items-center"><button class="mobile-email-send">Send Email</button>
            01-01-2024</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">Installment Amount</span>
        <span class="d-para">$1,000</span>
    </div>
    <div class="flx-card-d">
        <span class="d-head">{{ $type }}</span>
        <span class="d-para">{{ $value }}</span>
    </div>
    <div class="flx-card-d" data-bs-toggle="modal" data-bs-target="#edit_order_car">
        <span class="d-head">Edit</span>
        <span class="d-para">
            <img src="{{ asset('assets/images/icons/edit-line.svg') }}" class="sat-logo-sidebar" height="20"
                width="20" alt="pencil">
        </span>
    </div>
    <div class="flx-card-d mb-2">
        <span class="d-head">Receipt</span>
        <span class="d-para" style="cursor: pointer" onclick="$(this).find('img').toggleClass('rotate-ico')"
            data-bs-toggle="collapse" data-bs-target="#collapse_receipt{{ $iteration }}"><img
                src="{{ asset('assets/images/icons/arrow-down.svg') }}" style="transition: transform 0.3s ease"></span>
    </div>
    <div class="collapse col_rec" id="collapse_receipt{{ $iteration }}">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-column gap-1">
                <span class="title-install">Installment /Month</span>
                <span class="subtitle-install">Order# 123456789</span>
            </div>
            <div class="d-flex gap-2">
                <img src="{{ asset('assets/images/icons/mail-o-p.svg') }}" class="cursor-pointer" height="24"
                    width="24" alt="">
                <img src="{{ asset('assets/images/icons/printer-o-l.svg') }}" class="cursor-pointer" height="24"
                    width="24" alt="">
            </div>
        </div>
        <div class="mt-1">
            <h2 class="ord-title-install">Order Details</h2>
            <div class="new-cars-specs mb-3">
                <div class="specs-item-new">
                    <h2 class="title cmn-stl">Buyer Name</h2>
                    <p class="spec cmn-stl">Uzair Majeed</p>
                </div>
                <div class="specs-item-new">
                    <h2 class="title cmn-stl">Amount Due</h2>
                    <p class="spec cmn-stl">$7,000</p>
                </div>
                <div class="specs-item-new">
                    <h2 class="title cmn-stl">Amount Paid</h2>
                    <p class="spec cmn-stl">$3,000</p>
                </div>
            </div>
            <div class="d-flex pb-3">
                <img src="https://satjapan.com/photos/land_cruiser_wagon/2024-08-05/URJ202-4178769/4129/0.40002000_1722865742.jpg"
                    width="137" height="81" class="img-fluid" alt="car image">
                <div class="specs-installment">
                    <h3>2018 TOYOTA LITEACE VAN DX</h3>
                    <div class="d-flex gap-3">
                        <div class="new-cars-specs">
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl">Year</h2>
                                <p class="spec cmn-stl">2010/6</p>
                            </div>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl">Engine</h2>
                                <p class="spec cmn-stl">660 cc</p>
                            </div>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl">Mileage</h2>
                                <p class="spec cmn-stl">12,380 km</p>
                            </div>
                            <div class="specs-item-new">
                                <h2 class="title cmn-stl">Transmission</h2>
                                <p class="spec cmn-stl">MT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pending_order tab-content mt-3" style="display: block;">
            <div class="custom-width-div">
                <div class="upload-field">
                    <input type="text" disabled="" placeholder="Invoice" id="mobile_fild{{ $iteration }}">
                    <button
                        onclick="handleUpload('mobile_upload_receipt{{ $iteration }}', 'mobile_fild{{ $iteration }}')">Upload</button>
                </div>
                <input type="file" hidden="" id="mobile_upload_receipt{{ $iteration }}">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Send a Email For Active Order
                </label>
            </div>
            <div class="my-4 d-flex justify-content-center">
                <button class="mark-order-btn" disabled="">Active</button>
            </div>
        </div>
        <div class="order_canceled tab-content mt-3" style="display: block;">
            <h3 class="title-ord-cancel">Comment</h3>
            <textarea rows="5" cols="5" placeholder="Type" class="form-control"></textarea>
        </div>
        <div class="total_orders tab-content" style="display: block;">
            <select class="form-select select-year-install">
                <option value="">2025</option>
                <option value="">2024</option>
                <option value="">2023</option>
                <option value="">2022</option>
            </select>
       
            <div class="my-4 d-flex gap-4 justify-content-center">
                <button class="mark-order-btn" disabled="">Mark Order as Complete</button>
                <button class="send-order-btn" disabled="">Send Email</button>
            </div>
        </div>
    </div>
</div>
