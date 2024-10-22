  {{-- rest --}}
  <select class="form-select select-year-install">
      <option value="">2025</option>
      <option value="">2024</option>
      <option value="">2023</option>
      <option value="">2022</option>
  </select>
  <div class="table-install-list-div">
      <table width="100%" class="table-install-list" cellpadding="5">
          <thead>
              <tr>
                  <th>Month</th>
                  <th>Amount Due:</th>
                  <th>Due Date</th>
                  <th>Amount Paid:</th>
                  <th>Upload Receipt</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      <input type="text" class="install-list-input" disabled placeholder="December">
                  </td>
                  <td>
                      <input type="text" class="install-list-input" disabled placeholder="$3000">
                  </td>
                  <td>
                      <div class="input-date-install">
                          <input type="text" disabled placeholder="01-01-2024">
                          <button>Send Email</button>
                      </div>
                  </td>
                  <td>
                      <select class="form-select status-install">
                          <option value="">1000</option>
                          <option value="">2000</option>
                          <option value="">3000</option>
                      </select>
                  </td>
                  <td>
                      <div class="upload-field mb-0 h-100">
                          <input type="text" disabled placeholder="Invoice" id="fild{{ $iteration }}">
                          <button type="button"
                              onclick="handleUpload('upload_receipt{{ $iteration }}', 'fild{{ $iteration }}')">Upload</button>
                      </div>
                      <input type="file" hidden id="upload_receipt{{ $iteration }}">
                  </td>
                  <td>
                      <select class="form-select status-install">
                          <option value="">Paid</option>
                          <option value="">Unpaid</option>
                      </select>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
  {{-- buttons --}}
  <div class="my-4 d-flex gap-4 justify-content-center">
      <button class="mark-order-btn" disabled>Mark Order as Complete</button>
      <button class="send-order-btn" disabled>Send Email</button>
  </div>
