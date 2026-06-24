    <div class="modal fade cmn--modal sm--modal" id="upload_doc_modal" tabindex="-1" aria-labelledby="upload_docLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <h4 class="fs-6 mb-0 fw-semibold text--black d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> Upload Document</h4>
                            <span class="btn-close fs-14" data-bs-dismiss="modal"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Document Type">Document Type</label>
                        <select class="form-select">
                            <option value="">General</option>
                            <option value="">Pre-Export</option>
                            <option value="">Bill of Landing</option>
                            <option value="">Commercial Invoice</option>
                            <option value="">Export Certificate</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="fs-14 text--black mb-2" for="Tracking Number">Tracking Number</label>
                        <input type="text" placeholder="Tracking Number" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <div class="swap--wrapper-img">
                                <!-- Uploaded preview (hidden until a file is chosen) -->
                                <div class="uploaded--image-proof" style="display: none;">
                                    <h4 class="text--black fw-bold fs-6 mb-3">Uploaded Proof</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="proof--img-wrap">
                                            <img src=""
                                                style="max-width: 100%;max-height: 200px;cursor: zoom-in"
                                                class="img-fluid object-fit-contain proof-img"
                                                height="200" width="100%" loading="eager" alt="Uploaded proof">
                                            <button type="button" class="proof--remove-btn" aria-label="Remove image">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Upload dropzone -->
                                <div class="payment--proof-upload">
                                    <label class="fw-noraml text--black">Upload File</label>
                                    <div class="payment--proof-card image-upload">
                                        <input type="file" class="file-input" accept="image/png, image/jpeg" hidden>
                                        <div class="upload--textarea drop-area">
                                            <div class="upload--img">
                                                <img src="{{ asset('assets/images/icons/upload_image.svg') }}" height="40"
                                                    width="40" alt="upload icon" class="preview-image">
                                            </div>
                                            <div class="payment--upload-text">
                                                <p class="upload_para text--blue-secondary-light">
                                                    Click to upload
                                                    <span class="ms-1 text--grey">or drag and drop</span>
                                                </p>
                                                <p class="upload_restriction text--grey">
                                                    PDF, JPG, PNG up to (10MB)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="sat-btn light" data-bs-dismiss="modal">Cancel</button>
                            <button class="sat-btn primary">Upload Document</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>