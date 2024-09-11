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
