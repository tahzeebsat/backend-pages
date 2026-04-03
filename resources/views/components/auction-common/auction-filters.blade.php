            {{-- tabs filter --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="tabs--main">
                        <input type="radio" class="btn-check" name="tabs_main" id="All_sub" autocomplete="off"
                            checked>
                        <label class="btn" for="All_sub">
                            <div class="d-flex align-items-center gap-2">
                                All <span>580</span>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="tabs_main" id="Today" autocomplete="off">
                        <label class="btn" for="Today">
                            <div class="d-flex align-items-center gap-2">
                                Today <span>8</span>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="tabs_main" id="EndedToday" autocomplete="off">
                        <label class="btn" for="EndedToday">
                            <div class="d-flex align-items-center gap-2">
                                Ended Today <span>13</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            {{-- tabs filter 2 --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="tabs--sub">
                        <input type="radio" class="btn-check" name="tabs_sub" id="All" autocomplete="off"
                            checked>
                        <label class="btn" for="All">All</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="SUBMITTED" autocomplete="off">
                        <label class="btn" for="SUBMITTED">Submitted</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="PENDINGAPPROVAL"
                            autocomplete="off">
                        <label class="btn" for="PENDINGAPPROVAL">Pending Approval</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="PaymentApproved"
                            autocomplete="off">
                        <label class="btn" for="PaymentApproved">Payment Approved</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="WON" autocomplete="off">
                        <label class="btn" for="WON">Won</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="LOST" autocomplete="off">
                        <label class="btn" for="LOST">Lost</label>

                        <input type="radio" class="btn-check" name="tabs_sub" id="Rejected" autocomplete="off">
                        <label class="btn" for="Rejected">Rejected</label>
                    </div>
                </div>
            </div>
            {{-- filter search --}}
            <div class="row mb-3">
                <div class="col-12">
                    <div class="search--filters">
                        {{-- search --}}
                        <div class="search--item">
                            <input type="text" placeholder="Search bids, customers, stock IDs"
                                class="form-control" />
                            <img src="{{ asset('/assets/images/icons/search-lg.svg') }}" width="16"
                                height="16" loading="lazy" alt="search-icon" />
                        </div>
                        {{-- All Payments --}}
                        <select class="form-select">
                            <option value="All Payments" selected>All Payments</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Card">Card</option>
                            <option value="Crypto">Crypto</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="SAT Balance">SAT Balance</option>
                        </select>
                        {{-- All Types --}}
                        <select class="form-select">
                            <option value="" selected>All Types</option>
                            <option value="Single">Single</option>
                            <option value="Bundle">Bundle</option>
                        </select>
                        {{-- All Sites --}}
                        <select class="form-select">
                            <option value="All Sites" selected>All Sites</option>
                            <option value="HAA Kobe">HAA Kobe</option>
                            <option value="JU Saitama">JU Saitama</option>
                            <option value="JU Tokyo">JU Tokyo</option>
                        </select>
                    </div>
                </div>
            </div>
