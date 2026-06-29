<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/auction.css') }}">
    <script>
         if (localStorage.getItem("sidebarState") === "closed") {
          document.documentElement.classList.add("sidebar-preclosed");
        }
    </script>
    <title>Order</title>
</head>

<body>
    <aside class="sidebar-dashboard d-md-block d-sm-none d-none">
        @component('components.common.main-sidebar')
            Main Sidebar
        @endcomponent
    </aside>

    <div class="main-content">
        <div class="main-section w-100 vh-100">
            {{-- heading --}}
            <div class="row my-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg class="cursor-pointer" onclick="window.location.href='/order-dashboard'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                                <div>
                                    <h2 class="cmn-heading-title">Create Order Invoice</h2>
                                    <p>Generate invoice for this order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- order details --}}
            <div class="row g-3 pb-3">
                <div class="col-12">
                    <div class="sat--sheet h-100">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Order selection</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Order ID">Order ID</label>
                                <input type="text" placeholder="Order ID" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Stock ID">Stock ID</label>
                                <input type="text" placeholder="Stock ID" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Customer">Customer</label>
                                <input type="text" placeholder="Customer" class="form-control">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Order selection</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Invoice Number">Invoice Number</label>
                                <input type="text" placeholder="Invoice Number" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Order Number">Order Number</label>
                                <input type="text" placeholder="Order Number" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Invoice Date">Invoice Date</label>
                                <input type="date" placeholder="Invoice Date" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Due">Due</label>
                                <input type="date" placeholder="Due" class="form-control">
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Customer Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name">Name</label>
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Name Company">Name Company</label>
                                <input type="text" placeholder="Name Company" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Email">Email</label>
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Address">Address</label>
                                <input type="text" placeholder="Address" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Country">Country</label>
                                <select class="form-select">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                             <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Phone">Phone</label>
                                <input type="number" placeholder="Phone" class="form-control">
                            </div>
                        </div>


                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Shipping Information</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Departure Location">Departure Location</label>
                                <input type="text" placeholder="Departure Location" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Destination">Destination</label>
                                 <select class="form-select">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Port of Loading">Port of Loading</label>
                                 <select class="form-select">
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <h5 class="fs-6 text--grey fw-normal mb-0">Financial Breakdown</h5>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Car Price">Car Price</label>
                                <input type="number" placeholder="Car Price" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Shipping">Shipping</label>
                                <input type="text" placeholder="Shipping" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Insurance">Insurance</label>
                                <input type="text" placeholder="Insurance" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Warranty">Warranty</label>
                                <input type="text" placeholder="Warranty" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Additional">Additional</label>
                                <input type="text" placeholder="Additional" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Handling Fee">Handling Fee</label>
                                <input type="text" placeholder="Handling Fee" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Tax (%)">Tax (%)</label>
                                <input type="text" placeholder="Tax (%)" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label class="fs-6 text--black mb-2 fw-medium" for="Tax Amount">Tax Amount</label>
                                <input type="text" placeholder="Tax Amount" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    {{-- modals --}}
    @component('components.order-modals.consignee')
        consignee
    @endcomponent
    @component('components.order-modals.notify-party')
        notify party
    @endcomponent
    @component('components.order-modals.add-shipment')
        add shipment
    @endcomponent
    @component('components.order-modals.courier-modal')
        courier modal
    @endcomponent
    @component('components.order-modals.upload-doc-modal')
        upload doc modal
    @endcomponent
    @component('components.order-modals.upload-payment-proof')
        upload payment proof
    @endcomponent
    @component('components.order-modals.add-payment')
        add payment
    @endcomponent

    <div class="img-lightbox" id="imgLightbox">
        <span class="img-lightbox__close" id="imgLightboxClose">&times;</span>
        <img src="" alt="Full screen proof" id="imgLightboxImg">
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
     <script>
        const menu = document.querySelector('.main-content');
        const sidebar = document.querySelector('.sidebar-dashboard');
        const burger = document.querySelector('.menu--burger');

        document.addEventListener("DOMContentLoaded", () => {

            const closed = localStorage.getItem("sidebarState") === "closed";

            if (closed) {
                sidebar.classList.add("closed");
                menu.classList.add("ms-0");

                // IMPORTANT
                burger.classList.add("open");
            } else {
                sidebar.classList.remove("closed");
                menu.classList.remove("ms-0");
                burger.classList.remove("open");
            }
        });

        function handleMenu(x) {

            x.classList.toggle("open");
            menu.classList.toggle("ms-0");
            sidebar.classList.toggle("closed");

            const closed = sidebar.classList.contains("closed");

            localStorage.setItem(
                "sidebarState",
                closed ? "closed" : "open"
            );

            document.documentElement.classList.toggle(
                "sidebar-preclosed",
                closed
            );
        }
    </script>
    <script>
        document.querySelectorAll('.swap--wrapper-img').forEach(wrapper => {
        const upload        = wrapper.querySelector('.image-upload');
        const dropArea      = wrapper.querySelector('.drop-area');
        const fileInput     = wrapper.querySelector('.file-input');
        const uploadSection = wrapper.querySelector('.payment--proof-upload');
        const proofSection  = wrapper.querySelector('.uploaded--image-proof');

        if (!upload || !proofSection) return; // wrapper missing required parts

        const proofImg  = proofSection.querySelector('.proof-img');
        const removeBtn = proofSection.querySelector('.proof--remove-btn');

        dropArea.addEventListener("click", () => fileInput.click());

        fileInput.addEventListener("change", (e) => {
            handleFileImage(e.target.files[0], proofSection, proofImg, uploadSection);
        });

        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropArea.style.border = "2px dashed #4A90E2";
        });

        dropArea.addEventListener("dragleave", () => {
            dropArea.style.border = "1px solid var(--color-grey-border)";
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            dropArea.style.border = "1px solid var(--color-grey-border)";
            handleFileImage(e.dataTransfer.files[0], proofSection, proofImg, uploadSection);
        });

        if (removeBtn) {
            removeBtn.addEventListener("click", () => {
                proofImg.src = "";
                proofSection.style.display = "none";
                uploadSection.style.display = "";
                fileInput.value = "";
            });
        }
    });

    function handleFileImage(file, proofSection, proofImg, uploadSection) {
        if (!file) return;

        const validTypes = ["image/png", "image/jpeg"];
        if (!validTypes.includes(file.type)) {
            alert("Only PNG and JPG files are allowed.");
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            proofImg.src = e.target.result;
            proofSection.style.display = "";
            uploadSection.style.display = "none";
        };
        reader.readAsDataURL(file);
    }

    </script>
      <script>
        (function () {
        const lightbox = document.getElementById('imgLightbox');
        const lightboxImg = document.getElementById('imgLightboxImg');
        const closeBtn = document.getElementById('imgLightboxClose');

        function openLightbox(src, alt) {
            lightboxImg.src = src;
            lightboxImg.alt = alt || 'Full screen image';
            lightbox.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        // Works for one or many .proof-img images on the page
        document.querySelectorAll('.proof-img').forEach(function (img) {
            img.addEventListener('click', function () {
                openLightbox(this.src, this.alt);
            });
        });

        closeBtn.addEventListener('click', closeLightbox);

        // Close when clicking the dark backdrop (but not the image itself)
        lightbox.addEventListener('click', function (e) {
            if (e.target !== lightboxImg) closeLightbox();
        });

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeLightbox();
        });
        })();
    </script>
</body>

</html>
