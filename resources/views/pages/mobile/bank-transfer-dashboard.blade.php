<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <title>Mobile Dashboard</title>
</head>
@php
    $Data = [[], [], [], [], []];
@endphp

<body>
    @component('components.common.mobile-headings', ['title' => 'Booked Car By Bank'])
        Heading
    @endcomponent

    <div class="container-fluid">
        @foreach ($Data as $item)
            <div class="card-booking">
                <div class="gen-item">
                    <span>Action</span>
                    <span data-bs-toggle="modal" data-bs-target="#edit_order_modal">
                        <img src="{{ asset('assets/images/icons/list-unordered.svg') }}" alt="">
                    </span>
                </div>
                <div class="gen-item">
                    <span>Car</span>
                    <span>Biante</span>
                </div>
                <div class="gen-item">
                    <span>User</span>
                    <span>Faizan Elahi</span>
                </div>
                <div class="gen-item">
                    <span>Amount</span>
                    <span>USD 2666.67</span>
                </div>
                <div class="gen-item">
                    <span>Date</span>
                    <span>2024-06-21</span>
                </div>
            </div>
        @endforeach
    </div>

    @component('components.common.mobile-sidebar')
        mobile sidebar
    @endcomponent
    @component('components.common.svgs-Icons')
        Svgs for project
    @endcomponent
    
    <div class="modal fade cmn-modls-ordr" id="edit_order_modal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="modal-title-text">Booked Car By Bank Detail</h5>
                        <span class="clos-btn cursor-pointer" data-bs-dismiss="modal" aria-label="Close">×</span>
                    </div>
                    <hr>
                    <div class="form-data">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control h-40" placeholder="Name">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label for="">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control h-40" placeholder="Phone">
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control h-40" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="Address"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Destination Country <span class="text-danger">*</span></label>
                                <select class="form-select h-40">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Destination Port <span class="text-danger">*</span></label>
                                <select class="form-select h-40">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Currency <span class="text-danger">*</span></label>
                                <select class="form-select h-40">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Total Car Amount <span class="text-danger">*</span></label>
                                <input type="number" class="form-control h-40" placeholder="Car Amount">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Status <span class="text-danger">*</span></label>
                                <select class="form-select h-40">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Comment</label>
                                <textarea class="form-control" placeholder="Comment" rows="4"></textarea>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <hr>
                            </div>
                            <div class="col-12 text-end mt-0">
                                <button class="btn btn-apply">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script>
        $("#select_year").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_year").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
        $("#select_month").on("click", "li", function(event) {
            var hrefValue = $(this).text();
            $("#drp_month").text(hrefValue.replace(/\s*\([^)]*\)\s*/, ""));
        });
    </script>
</body>

</html>
