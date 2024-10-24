  {{-- rest --}}
  <select class="form-select select-year-install">
      <option value="">2025</option>
      <option value="">2024</option>
      <option value="">2023</option>
      <option value="">2022</option>
  </select>
  <div class="table-install-list-div">
      <table width="100%" class="table-install-list">
          <thead>
              <tr>
                  <th class="border-bottom">Month</th>
                  <th class="border-bottom">Amount Due:</th>
                  <th class="border-bottom">Due Date</th>
                  <th class="border-bottom">Amount Paid:</th>
                  <th class="border-bottom">Upload Receipt</th>
                  <th class="border-bottom">Status</th>
                  <th class="border-bottom">Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td class="pe-2 pt-2">
                      <input type="text" class="install-list-input" disabled placeholder="December">
                  </td>
                  <td class="pe-2 pt-2">
                      <input type="text" class="install-list-input" disabled placeholder="$3000">
                  </td>
                  <td class="pe-2 pt-2">
                      <div class="input-date-install">
                          <input type="text" disabled placeholder="01-01-2024">
                          <button>Send Email</button>
                      </div>
                  </td>
                  <td class="pe-2 pt-2">
                      <select class="form-select status-install">
                          <option value="">1000</option>
                          <option value="">2000</option>
                          <option value="">3000</option>
                      </select>
                  </td>
                  <td class="pe-2 pt-2">
                      <div class="upload-field mb-0 h-100">
                          <input type="text" disabled placeholder="Invoice" id="fild{{ $iteration }}">
                          <button type="button"
                              onclick="handleUpload('upload_receipt{{ $iteration }}', 'fild{{ $iteration }}')">Upload</button>
                      </div>
                      <input type="file" hidden id="upload_receipt{{ $iteration }}">
                  </td>
                  <td class="pt-2 pe-2">
                      <select class="form-select status-install">
                          <option value="">Paid</option>
                          <option value="">Unpaid</option>
                      </select>
                  </td>
                  <td class="pt-2 ">
                      <div class="card p-2 cursor-pointer d-flex justify-content-center align-items-center"
                          style="border-radius: 3px;height:48px" data-bs-toggle="modal" data-bs-target="#edit_order_car">
                          <img src="{{ asset('assets/images/icons/edit-line.svg') }}" class="sat-logo-sidebar"
                              height="20" width="20" alt="pencil">
                      </div>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
  {{-- buttons --}}
  <div class="my-4 d-flex gap-4 justify-content-center">
      <button class="mark-order-btn" disabled>Mark Order as Complete</button>
      <button class="send-order-btn d-flex align-items-center justify-content-center gap-2" disabled="">
        Send Email <img src="{{asset('assets/images/icons/mail-check-line.webp')}}" height="16" width="16" alt="mail">
    </button>
  </div>
