<div class="order-specs">
    <div class="ord">
        <div class="order-payment">
            <div class="order-sections">
                <p class="heading-op">Payment Type:</p>
                <p class="sub-heading-op">Bank</p>
            </div>
        </div>
        <div class="order-payment mt-2">
            <div class="order-sections d-flex justify-content-between">
                <div class="sec-1">
                    <p class="heading-op">Status:</p>
                    <p class="sub-heading-op">Paid</p>
                </div>
                <div class="sec-2">
                    <a  class="link-order-specs" data-bs-toggle="modal"
                        data-bs-target="#change_payment">
                        Change Payment Status
                    </a>
                </div>
            </div>
        </div>
        <div class="order-payment mt-2">
            <div class="order-sections d-flex justify-content-between align-items-center border-0">
                <div class="sec-1">
                    <p class="heading-op mb-0">Status:</p>
                    <a href="javascript:;" class="link-status-specs" data-bs-toggle="modal"
                    data-bs-target="#manage_status">preparing</a>
                </div>
                <div class="sec-2">
                    <button class="btn-order-specs">
                        <img src="{{ asset('assets/images/icons/mail-msg.svg') }}" height="14" width="14"
                            alt=""> Notify User
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-info">
        <div class="cust-detail">
            <ul class="list">
                <li class="head">Customer Info:</li>
                <li class="para mb-2">Sinbad General Supply & motors Co LTD</li>
                <li><span class="head">Phone:</span> <span class="para"> +255754430887</span></li>
                <li><span class="head">Email:</span> <span class="para"> Iamuzairmajeed@gmail.com</span></li>
            </ul>
        </div>
        <div class="files-detail">
            <ul class="fields">
                <li class="head">Accepted file types: pdf, doc, docx</li>
                <li class="fil">
                    <label for="" class="mb-1">Certificates</label>
                    <input type="file" placeholder="Certificates to upload" class="w-100"  name="" id="">
                </li>
                <li class="head">Accepted file types: pdf, doc, docx</li>
                <li class="fil">
                    <label for="" class="mb-1">Export</label>
                    <input type="file" placeholder="Export certificate" class="w-100"  name="" id="">
                </li>
                <li class="head">Accepted file types: pdf, doc, docx</li>
                <li class="fil">
                    <label for="" class="mb-1">Bill</label>
                    <input type="file" placeholder="Bill of Landing" class="w-100"  name="" id="">
                </li>
                <li class="head">Accepted file types: pdf, doc, docx</li>
                <li class="fil">
                    <label for="" class="mb-1">Invoice</label>
                    <input placeholder="Invoice" type="file" class="w-100"  name="" id="">
                </li>
            </ul>
        </div>
    </div>
</div>
