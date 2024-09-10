 <div class="order_details">
     <div class="d-flex justify-content-between">
         <div class="order-number">
             <h2 class="ord-title">Order# 123456789</h2>
             <p class="order-date">August 27.2024 11:33AMvia Desktop</p>
         </div>
         <div class="order-print">
             <img src="{{ asset('assets/images/icons/mail-o-p.svg') }}" height="24" width="24" alt="">
             <img src="{{ asset('assets/images/icons/printer-o-l.svg') }}" height="24" width="24" alt="">
         </div>
     </div>
     {{-- product --}}
     <div class="product-order-details">
         <table width="100%" class="singleTabls" border="1">
             <thead>
                 <tr>
                     <th>Image</th>
                     <th>Product</th>
                     <th>Unit Price x Ship</th>
                     <th>Total</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>
                         <a href="#">
                             <img class="sngleSmall"
                                 src="https://satjapan.com/photos/Noah/2024-06-10/0.49110700_1718022754.jpg">
                         </a>
                     </td>
                     <td>
                         <h4 class="singleTileitem">
                             <a href="https://dev.satjapan.info/used-cars/toyota/noah/sat-56496209" target="blank">
                                 <b class="prdname">Noah</b>
                             </a>
                             <div class="port">
                                 <b>Port: </b> Batam Island, indonesia
                             </div>
                             <div class="addition">
                                 <b>Additional: </b>
                             </div>
                         </h4>
                     </td>
                     <td>
                         <ul class="prices_car">
                             <li><b>Car Price: </b> $1035</li>
                             <li><b>Shipment Price: </b> $8</li>
                             <li><b>Additional Price: </b> $0</li>
                         </ul>
                     </td>
                     <td style="text-align:right;">
                         $ 1087
                     </td>
                 </tr>
             <tfoot>
                 <tr>
                     <td colspan="3" class="text-right">
                         <div class="clabelts"><span>Total Payable Amount</span></div>
                     </td>
                     <td>
                         <div class="pclabelt">
                             <span>$ 1087</span>
                         </div>
                     </td>
                 </tr>
             </tfoot>
             </tbody>
         </table>
     </div>
     <div class="tabs-fst">
         <ul class="tabs-list">
             <li class="tabs-list-items active">Comments</li>
             <li class="tabs-list-items">Previous Orders</li>
         </ul>
     </div>
     {{-- comment --}}
     <div class="comment d-flex coment_fields">
         <textarea class="form-control coment-area w-100" placeholder="Notify Address" rows="4"></textarea>
         <button class="btn btn-cust">&#10003;</button>
     </div>
     {{-- previous order --}}
     <div class="d-none prev_order">
         <table width="100%">
             <thead>
                 <tr>
                     <th>Order No</th>
                     <th>Status</th>
                     <th>Total</th>
                     <th>Date</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>#57779362</td>
                     <td>ready_for_shipment</td>
                     <td>$0</td>
                     <td>06 Sep 2024, 1:06 PM</td>
                 </tr>
                 <tr>
                     <td>#57779362</td>
                     <td>ready_for_shipment</td>
                     <td>$0</td>
                     <td>06 Sep 2024, 1:06 PM</td>
                 </tr>
             </tbody>
         </table>
     </div>
     {{-- scond tab --}}
     <div class="tabs-scnd">
         <ul class="tabs-list">
             <li class="scnd-list-items active">Consignee Information</li>
             <li class="scnd-list-items">Notify Information</li>
         </ul>
     </div>
     {{-- Consignee Information --}}
     <div class="consignee_information">
         <div class="row g-3">
             <div class="col-4">
                 <label>Consignee Name</label>
                 <input type="text" class="form-control h-40" placeholder="Name">
             </div>
             <div class="col-4">
                 <label>Consignee Country</label>
                 <select class="form-select">
                     <option value="">Country</option>
                     <option value="">2</option>
                 </select>
             </div>
             <div class="col-4">
                 <label>Consignee State</label>
                 <input type="text" class="form-control h-40" placeholder="State">
             </div>
             <div class="col-4">
                 <label>Consignee City</label>
                 <select class="form-select">
                     <option value="">City</option>
                     <option value="">2</option>
                 </select>
             </div>
             <div class="col-4">
                 <label>Consignee Email</label>
                 <input type="email" class="form-control h-40" placeholder="Email">
             </div>
             <div class="col-4">
                 <label>Consignee Phone</label>
                 <input type="number" class="form-control h-40" placeholder="Phone">
             </div>
             <div class="col-12">
                 <label>Consignee Address</label>
                 <textarea class="form-control" placeholder="Your Address" rows="4"></textarea>
             </div>
             <div class="col-12 text-center">
                 <button class="btn submit-btn">
                     Submit
                 </button>
             </div>
         </div>
     </div>
     {{-- Notify Information --}}
     <div class="notify_info d-none">
         <div class="row g-3">
             <div class="col-4">
                 <label>Notify Name</label>
                 <input type="text" class="form-control h-40" placeholder="Name">
             </div>
             <div class="col-4">
                 <label>Notify Country</label>
                 <select class="form-select">
                     <option value="">Country</option>
                     <option value="">2</option>
                 </select>
             </div>
             <div class="col-4">
                 <label>Notify State</label>
                 <input type="text" class="form-control h-40" placeholder="State">
             </div>
             <div class="col-4">
                 <label>Notify City</label>
                 <select class="form-select">
                     <option value="">City</option>
                     <option value="">2</option>
                 </select>
             </div>
             <div class="col-4">
                 <label>Notify Email</label>
                 <input type="email" class="form-control h-40" placeholder="Email">
             </div>
             <div class="col-4">
                 <label>Notify Phone</label>
                 <input type="number" class="form-control h-40" placeholder="Phone">
             </div>
             <div class="col-12">
                 <label>Notify Address</label>
                 <textarea class="form-control" placeholder="Your Address" rows="4"></textarea>
             </div>
             <div class="col-12 text-center">
                 <button class="btn submit-btn">
                     Submit
                 </button>
             </div>
         </div>
     </div>
 </div>
 {{-- modal for change payment --}}
 <div class="modal fade" id="change_payment" tabindex="-1" aria-labelledby="change_paymentLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="d-flex justify-content-between align-items-center mb-4">
                     <h5 class="modal-title-text">Order Payment</h5>
                     <span class="clos-btn" data-bs-dismiss="modal" aria-label="Close">×</span>
                 </div>
                 <hr>
                 <div class="row g-2">
                     <div class="col-12">
                         <h5 class="modal-title-text"> Payment Status</h5>
                     </div>
                     <div class="col-12 d-flex gap-4">
                         <div>
                             <input class="form-check-input" type="radio" id="paid" name="payment-status">
                             <label class="form-check-label modal-title-sub" for="paid">
                                 Paid
                             </label>
                         </div>
                         <div>
                             <input class="form-check-input" type="radio" id="un_paid" name="payment-status">
                             <label class="form-check-label modal-title-sub" for="un_paid">
                                 Un Paid
                             </label>
                         </div>
                     </div>
                     <div class="col-12">
                         <h5 class="modal-title-text">Paid Amount</h5>
                     </div>
                     <div class="col-12">
                         <input type="text" class="form-control w-100">
                     </div>
                     <div class="col-12">
                         <button class="btn btn-apply">Apply</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 {{-- modal for Manage Status --}}
 <div class="modal fade" id="manage_status" tabindex="-1" aria-labelledby="manage_statusLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="d-flex justify-content-between align-items-center mb-4">
                     <h5 class="modal-title-text">Manage Status</h5>
                     <span class="clos-btn" data-bs-dismiss="modal" aria-label="Close">×</span>
                 </div>
                 <hr>
                 <div class="row g-2">
                     <div class="col-12">
                         <h5 class="modal-title-text"> Payment Status</h5>
                     </div>
                     <div class="col-12">
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="refunded" name="status">
                             <label class="form-check-label modal-title-sub" for="refunded">
                                 Refunded
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="cancelled" name="status">
                             <label class="form-check-label modal-title-sub" for="cancelled">
                                 Cancelled
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="pending" name="status">
                             <label class="form-check-label modal-title-sub" for="pending">
                                 Pending
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="preparing" name="status">
                             <label class="form-check-label modal-title-sub" for="preparing">
                                 Preparing
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="shipment" name="status">
                             <label class="form-check-label modal-title-sub" for="shipment">
                                 Ready for Shipment
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="shipped" name="status">
                             <label class="form-check-label modal-title-sub" for="shipped">
                                 Shipped
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="pick_up" name="status">
                             <label class="form-check-label modal-title-sub" for="pick_up">
                                 Ready for Pick Up
                             </label>
                         </div>
                         <div class="mb-2">
                             <input class="form-check-input" type="radio" id="completed" name="status">
                             <label class="form-check-label modal-title-sub" for="completed">
                                 Completed
                             </label>
                         </div>
                     </div>
                     <div class="col-12 mt-0">
                         <hr>
                     </div>
                     <div class="col-12">
                         <button class="btn btn-apply">Apply</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
