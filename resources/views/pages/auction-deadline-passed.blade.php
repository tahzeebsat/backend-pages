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
                                    <a onclick="window.location.href='/auction'" href="/auction" class="nav-link" id="live-auction-tab"
                                        data-bs-toggle="tab">
                                        Live Auction
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction/deadline-passed'" href="/auction/deadline-passed" class="nav-link active" id="deadline-tab"
                                        data-bs-toggle="tab">
                                        Deadline Passed
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction'" href="" class="nav-link" id="completed-tab" data-bs-toggle="tab">
                                        Completed
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a onclick="window.location.href='/auction/auction-bids'" href="" class="nav-link" id="auctionbids-tab" data-bs-toggle="tab">
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
                                <label for="">Have Bids</label>
                                <input type="text" class="form-control" placeholder="Have Bids">
                            </div>
                            <div class="col-md-4">
                                <label for="">Deadline</label>
                                <input type="date" class="form-control" placeholder="Deadline">
                            </div>
                            <div class="col-md-4">
                                <label for="">User Name</label>
                                <input type="text" class="form-control" placeholder="User Name">
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
                                            <th>Car Name</th>
                                            <th>Stock ID</th>
                                            <th>Make</tdclass=>
                                            <th>Model</th>
                                            <th>Total Bids</th>
                                            <th>Bidding Deadline</th>
                                            <th>Starting Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Row 1 -->
                                        <tr>
                                            <td>Toyota Camry 2020</td>
                                            <td>TC2020-001</td>
                                            <td>Toyota</tdclass=>
                                            <td>Camry</td>
                                            <td>12</td>
                                            <td>2025-12-15</td>
                                            <td>$18,500</td>
                                            <td>
                                                <button class="btn expand-btn text-black" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#subTable1"
                                                    aria-expanded="false">
                                                    &#128065;
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="100%" class="border-bottom-0" class="p-0">
                                                <div class="collapse sub-table-container" id="subTable1">
                                                    <div class="card mt-2 p-2">
                                                        <h6><b>All Bids - Toyota Camry 2020</b></h6>
                                                        <table class="table sub-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>User Name</th>
                                                                    <th>Bid Amount</th>
                                                                    <th>Fee Deposited</th>
                                                                    <th>Deposit Fee Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>John Smith</td>
                                                                    <td class="bid-amount">$19,500</td>
                                                                    <td class="bid-time">$500</td>
                                                                    <td class="bid-time"><span class="chip chip--accepted">Accepted</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>John Smith</td>
                                                                    <td class="bid-amount">$19,500</td>
                                                                    <td class="bid-time">$500</td>
                                                                    <td class="bid-time"><span class="chip chip--rejected">Rejected</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
