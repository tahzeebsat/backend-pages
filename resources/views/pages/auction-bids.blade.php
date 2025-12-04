<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <style>

    </style>
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
            <div class="row">
                <div class="col-12">
                    <div class="card p-3">
                        <h2 class="cmn-heading-title mb-3">Auction Details</h2>
                        <div class="tabs--auctions">
                            <ul class="nav nav-tabs custom-tabs variant3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction'" href="/auction" class="nav-link"
                                        id="live-auction-tab" data-bs-toggle="tab">
                                        Live Auction
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction/deadline-passed'"
                                        href="/auction/deadline-passed" class="nav-link" id="deadline-tab"
                                        data-bs-toggle="tab">
                                        Deadline Passed
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction'" href="" class="nav-link"
                                        id="completed-tab" data-bs-toggle="tab">
                                        Completed
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction/auction-bids'" href=""
                                        class="nav-link active" id="auctionbids-tab" data-bs-toggle="tab">
                                        Auction Bids
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <h2 class="cmn-heading-title mb-3">Filters</h2>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="">Car Name</label>
                                <input type="text" class="form-control" placeholder="Car Name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Stock ID</label>
                                <input type="text" class="form-control" placeholder="Stock ID">
                            </div>
                            <div class="col-md-4">
                                <label for="">Make</label>
                                <input type="text" class="form-control" placeholder="Make">
                            </div>
                            <div class="col-md-4">
                                <label for="">Model</label>
                                <input type="text" class="form-control" placeholder="Model">
                            </div>
                            <div class="col-md-4">
                                <label for="">User Name</label>
                                <input type="text" class="form-control" placeholder="User Name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <div class="auction-container">
                            <div class="table-header">
                                <h2 class="cmn-heading-title">Deadline Passed</h2>
                            </div>

                            <div class="table-responsive">
                                <table class="table auction-table mb-0" id="auctionTable">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Car Name</th>
                                            <th>Stock ID</th>
                                            <th>Fee Deposited</th>
                                            <th>Deposit Fee Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Row 1 -->
                                        <tr>
                                            <td>John Smith <br> <small>john.smith@email.com</small></td>
                                            <td>Toyota Camry 2020 </td>
                                            <td>TC2020-001 </tdclass=>
                                            <td>$500</td>
                                            <td class="bid-time"><span class="chip chip--rejected">Rejected</span></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2 justify-content-start">
                                                    <button class="btn expand-btn text-black" data-bs-toggle="modal" data-bs-target="#show_auction_bids">
                                                        &#128065;
                                                    </button>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">Pending Fee</option>
                                                        <option value="">Accepted Fee</option>
                                                        <option value="">Rejected Fee</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
    <div class="modal fade" id="show_auction_bids" tabindex="-1" aria-labelledby="show_auction_bidsLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    ...
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script>
        $("#select_search").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_search_list").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
        // for first tabs
        function firsttabsHandle(index, name, text) {
            $(`.tabs-list-items.comnt_${index}, .tabs-list-items.prev_${index}`).removeClass('active');

            $(`.tabs-list-items.${name}`).addClass('active');

            if (text === 'Comments') {
                $(`.coment_fields${index}`).removeClass('d-none');
                $(`.prev_order${index}`).addClass('d-none');
            } else {
                $(`.coment_fields${index}`).addClass('d-none');
                $(`.prev_order${index}`).removeClass('d-none');
            }
        }

        function secondtabsHandle(index, name, text) {
            $(`.scnd-list-items.consign_${index}, .scnd-list-items.notif_${index}`).removeClass('active');

            $(`.scnd-list-items.${name}`).addClass('active');

            if (text === 'Consignee') {
                $(`.consignee_information${index}`).removeClass('d-none');
                $(`.notify_info${index}`).addClass('d-none');
            } else {
                $(`.consignee_information${index}`).addClass('d-none');
                $(`.notify_info${index}`).removeClass('d-none');
            }
        }
    </script>
</body>

</html>
