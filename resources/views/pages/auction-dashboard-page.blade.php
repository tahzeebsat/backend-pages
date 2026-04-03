<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/auction.css') }}">
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
            <div class="row mb-3">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div onclick="handleMenu(this)" class="menu--burger">
                                <div class="menu--bar1"></div>
                                <div class="menu--bar2"></div>
                                <div class="menu--bar3"></div>
                            </div>
                            <h2 class="cmn-heading-title">All Bidding </h2>
                        </div>
                        <button class="sat-btn primary" data-bs-toggle="modal" data-bs-target="#new_bid">New
                            Bid</button>
                    </div>
                </div>
            </div>
            {{-- values --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card--statuses">
                        <div class="card--item">
                            <h3 class="title text--grey">TOTAL BIDS</h3>
                            <p class="value text--black">580</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">WON</h3>
                            <p class="value text--green">99</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">LOST</h3>
                            <p class="value text--black">90</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">PENDING APPROVAL</h3>
                            <p class="value text--yellow">16</p>
                        </div>
                        <div class="card--item">
                            <h3 class="title text--grey">PENDING DEPOSITS</h3>
                            <p class="value text--yellow">$1,530,312</p>
                        </div>
                    </div>
                </div>
            </div>

            @component('components.auction-common.auction-filters')
                auction filters
            @endcomponent
            @component('components.auction-common.auction-table')
                auction table
            @endcomponent
        </div>
    </div>
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    {{-- new bid modal --}}
    @component('components.auction-modals.newBid')
        modal new bid
    @endcomponent
    {{-- Single Rejected --}}
    @component('components.auction-modals.singleBidRejected')
        single bid rejected
    @endcomponent
    {{-- Single bid lost --}}
    @component('components.auction-modals.singleBidLost')
        single bid lost
    @endcomponent
    {{-- bundle bid lost --}}
    @component('components.auction-modals.bundleBidLost')
        bundle bid lost
    @endcomponent
    {{-- Single bid won --}}
    @component('components.auction-modals.singleBidWon')
        single bid won
    @endcomponent
    {{-- bundle bid won --}}
    @component('components.auction-modals.bundleBidWon')
        bundle bid won
    @endcomponent
    {{-- Single Payment Approved --}}
    @component('components.auction-modals.singlePaymentApproved')
        single payment approved
    @endcomponent
    {{-- bundle Payment Approved --}}
    @component('components.auction-modals.bundlePaymentApproved')
        bundle payment approved
    @endcomponent
    {{-- Single PENDING APPROVAL --}}
    @component('components.auction-modals.singlePendingApproval')
        single PENDING APPROVAL
    @endcomponent
    {{-- Single PENDING APPROVAL --}}
    @component('components.auction-modals.bundlePendingApproval')
        single PENDING APPROVAL
    @endcomponent
    {{-- Single Submitted --}}
    @component('components.auction-modals.singleSubmitted')
        single submitted
    @endcomponent
    {{-- bundle Submitted --}}
    @component('components.auction-modals.bundleSubmitted')
        bundle submitted
    @endcomponent
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    {{-- menu show hide --}}
    <script>
        const menu = document.querySelector('.main-content');
        const sidebar = document.querySelector('.sidebar-dashboard');

        function handleMenu(x) {
            x.classList.toggle("open");
            menu.classList.toggle("ms-0");
            sidebar.classList.toggle("closed");
        }
    </script>
    {{-- customer show hide --}}
    <script>
        const btn = document.getElementById('toggle_customer');
        const existingDiv = document.querySelector('.toggle-existing');
        const newDiv = document.querySelector('.toggle-new');

        btn.addEventListener('click', function() {

            existingDiv.classList.toggle('d-none');
            newDiv.classList.toggle('d-none');

            // Change button text
            if (existingDiv.classList.contains('d-none')) {
                btn.innerHTML = `Search Existing`;
                btn.classList.remove('primary-outline')
                btn.classList.add('primary')
            } else {
                btn.innerHTML = `
                <img src="{{ asset('assets/images/icons/plus-icon.svg') }}"
                style="filter: brightness(0%);" height="16" width="16">
                New Customer
                `;
                btn.classList.remove('primary')
                btn.classList.add('primary-outline')
            }
        });
    </script>
    {{-- manual entry cardetail + new cards --}}
    <script>
        document.addEventListener('change', function(e) {
            if (e.target.matches('.form-check-input')) {
                const card = e.target.closest('.car--detail-card');
                const sections = card.querySelectorAll('.manual--entry');

                sections.forEach((section, index) => {
                    section.classList.toggle('d-none', index === 0 ? !e.target.checked : e.target.checked);
                });
            }
        });
        document.querySelector('.secondary-light-outline').addEventListener('click', function() {
            const container = document.querySelector('.cardetail_listing');
            const count = container.querySelectorAll('.car--detail-card').length + 1;

            const card = `
                <div class="car--detail-card">
                    <div class="title--detail-card mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="sat-status approved-status car--count">Car ${count}</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="form-check form-switch d-flex align-items-center gap-2">
                                <input class="form-check-input" type="checkbox" role="switch" checked>
                                <label class="form-check-label mb-0" for="Manual Entry">Manual
                                    Entry</label>
                            </div>
                            <img src="{{ asset('assets/images/icons/delete-icon.svg') }}" class="cursor-pointer delete-card" loading="lazy" height="18" width="18" alt="delete">
                        </div>
                    </div>

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
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="manual--entry d-none">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="text--grey fw-normal">Stock ID *</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', card);
        });

        document.addEventListener("DOMContentLoaded", function() {
            const container = document.querySelector('.cardetail_listing');
            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('delete-card')) {
                    const card = e.target.closest('.car--detail-card');
                    if (card) {
                        card.remove();
                    }
                    updateCarCount();
                }
            });

            function updateCarCount() {
                const cards = container.querySelectorAll('.car--detail-card');
                cards.forEach((card, index) => {
                    const countEl = card.querySelector('.car--count');
                    if (countEl) {
                        countEl.textContent = `Car ${index + 1}`;
                    }
                });
            }
        });
    </script>
    {{-- image upload --}}
    <script>
        document.querySelectorAll('.image-upload').forEach(upload => {
            const dropArea = upload.querySelector('.drop-area');
            const fileInput = upload.querySelector('.file-input');
            const previewImage = upload.querySelector('.preview-image');

            // Click to open file picker
            dropArea.addEventListener("click", () => {
                fileInput.click();
            });

            // File selected
            fileInput.addEventListener("change", (e) => {
                handleFile(e.target.files[0], previewImage);
            });

            // Drag over
            dropArea.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropArea.style.border = "2px dashed #4A90E2";
            });

            // Drag leave
            dropArea.addEventListener("dragleave", () => {
                dropArea.style.border = "1px solid var(--color-grey-border)";
            });

            // Drop
            dropArea.addEventListener("drop", (e) => {
                e.preventDefault();
                dropArea.style.border = "1px solid var(--color-grey-border)";

                const file = e.dataTransfer.files[0];
                handleFile(file, previewImage);
            });
        });

        // reusable handler
        function handleFile(file, previewImage) {
            if (!file) return;

            const validTypes = ["image/png", "image/jpeg"];
            if (!validTypes.includes(file.type)) {
                alert("Only PNG and JPG files are allowed.");
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.classList.add("uploaded--img");
            };
            reader.readAsDataURL(file);
        }
    </script>

    {{-- navigation b/w tabs --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const tabs = document.querySelectorAll('#newbid_tabs .nav-link');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const last_step_btn = document.getElementById('last_step_btn');

            function getActiveIndex() {
                return Array.from(tabs).findIndex(tab => tab.classList.contains('active'));
            }

            function showTab(index) {
                if (tabs[index]) {
                    let tabTrigger = new bootstrap.Tab(tabs[index]);
                    tabTrigger.show();
                }
            }

            // ✅ NEW: Handle button visibility
            function updateButtons() {
                let currentIndex = getActiveIndex();

                if (currentIndex === tabs.length - 1) {
                    nextBtn.classList.add('d-none');
                    last_step_btn.classList.remove('d-none');
                } else {
                    nextBtn.classList.remove('d-none');
                    last_step_btn.classList.add('d-none');
                }

                // Optional: disable prev on first tab
                prevBtn.disabled = currentIndex === 0;
            }

            // NEXT BUTTON
            nextBtn.addEventListener('click', function() {
                let currentIndex = getActiveIndex();

                if (currentIndex < tabs.length - 1) {

                    let currentLi = tabs[currentIndex].closest('li.nav-item .nav-link');
                    if (currentLi) currentLi.classList.add('done');

                    showTab(currentIndex + 1);

                    setTimeout(updateButtons, 100); // wait for tab change
                }
            });

            // PREVIOUS BUTTON
            prevBtn.addEventListener('click', function() {
                let currentIndex = getActiveIndex();

                if (currentIndex > 0) {

                    let prevLi = tabs[currentIndex - 1].closest('li.nav-item .nav-link');
                    if (prevLi) prevLi.classList.remove('done');

                    showTab(currentIndex - 1);

                    setTimeout(updateButtons, 100);
                }
            });

            // ✅ ALSO: when user clicks tabs manually
            tabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', updateButtons);
            });

            // ✅ Initial state
            updateButtons();
        });
    </script>
    {{-- single bundle divs --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const radios = document.querySelectorAll(".bid-type-toggle");

            function toggleBidType(type) {
                document.querySelectorAll(".single-only").forEach(el => {
                    el.classList.toggle("d-none", type !== "single");
                });

                document.querySelectorAll(".bundle-only").forEach(el => {
                    el.classList.toggle("d-none", type !== "bundle");
                });
            }

            radios.forEach(radio => {
                radio.addEventListener("change", function() {
                    toggleBidType(this.dataset.type);
                });
            });

            // Run on page load (for default checked)
            const checked = document.querySelector(".bid-type-toggle:checked");
            if (checked) {
                toggleBidType(checked.dataset.type);
            }
        });
    </script>
    {{-- mark won/lost --}}
    <script>
        function showWon() {
            // hide lost, show won
            document.querySelectorAll('.mark-lost').forEach(el => {
                el.classList.add('d-none');
            });

            document.querySelectorAll('.mark-won').forEach(el => {
                el.classList.remove('d-none');
            });
        }

        function showLost() {
            // hide won, show lost
            document.querySelectorAll('.mark-won').forEach(el => {
                el.classList.add('d-none');
            });

            document.querySelectorAll('.mark-lost').forEach(el => {
                el.classList.remove('d-none');
            });
        }

        function showSubmitWon() {
            // hide lost, show won
            document.querySelectorAll('.mark-lost-submit').forEach(el => {
                el.classList.add('d-none');
            });

            document.querySelectorAll('.mark-won-submit').forEach(el => {
                el.classList.remove('d-none');
            });
        }

        function showSubmitLost() {
            // hide won, show lost
            document.querySelectorAll('.mark-won-submit').forEach(el => {
                el.classList.add('d-none');
            });

            document.querySelectorAll('.mark-lost-submit').forEach(el => {
                el.classList.remove('d-none');
            });
        }
    </script>
    {{-- wond and lost tr color --}}
    <script>
        document.querySelectorAll('.status-select').forEach(select => {
            select.addEventListener('change', function() {
                const row = this.closest('tr');

                // remove old classes
                row.classList.remove('won', 'lost');

                // add new class based on value
                if (this.value === 'won') {
                    row.classList.add('won');
                } else if (this.value === 'lost') {
                    row.classList.add('lost');
                }
            });
        });
    </script>
    {{-- table filter --}}
    <script>
        document.querySelectorAll('input[name="tabs_sub"]').forEach(radio => {
            radio.addEventListener('change', function() {

                const selectedFilter = this.id.toUpperCase();
                document.querySelectorAll("tbody tr").forEach(row => {
                    const rowStatus = row.dataset.status;

                    if (selectedFilter === "ALL" || rowStatus === selectedFilter) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });

            });
        });
    </script>
</body>

</html>
