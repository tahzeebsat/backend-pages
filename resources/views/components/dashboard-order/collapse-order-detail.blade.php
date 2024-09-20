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
             <li class="tabs-list-items active comnt_{{$Index}}" onclick="firsttabsHandle({{$Index}},'comnt_{{$Index}}','Comments')">Comments</li>
             <li class="tabs-list-items prev_{{$Index}}" onclick="firsttabsHandle({{$Index}},'prev_{{$Index}}','Previous')">Previous Orders</li>
         </ul>
     </div>
     {{-- comment --}}
     <div class="comment d-flex coment_fields coment_fields{{$Index}}">
         <textarea class="form-control coment-area w-100" placeholder="Notify Address" rows="4"></textarea>
         <button class="btn btn-cust">&#10003;</button>
     </div>
     {{-- previous order --}}
     <div class="d-none prev_order prev_order{{$Index}}">
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
             <li class="scnd-list-items active consign_{{$Index}}" onclick="secondtabsHandle({{$Index}},'consign_{{$Index}}','Consignee')">Consignee Information</li>
             <li class="scnd-list-items notif_{{$Index}}" onclick="secondtabsHandle({{$Index}},'notif_{{$Index}}','Notify')">Notify Information</li>
         </ul>
     </div>
     {{-- Consignee Information --}}
     <div class="consignee_information consignee_information{{$Index}}">
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
     <div class="notify_info notify_info{{$Index}} d-none">
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
