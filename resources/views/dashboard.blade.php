<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <title>Dashboard</title>
</head>

<body>
    @component('components.main-sidebar')
        Main Sidebar
    @endcomponent
    <div class="main-content">
        @component('components.order-rightbar')
            Order Right Bar Details
        @endcomponent
        @component('components.dashboard-mainsection')
            Order Right Bar Details
        @endcomponent
    </div>
    @component('components.svgs-Icons')
        Svgs for project
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
        $('.tabs-list-items').click(function() {
            $('.tabs-list-items').removeClass('active');
            $(this).addClass('active');

            if ($(this).text() === 'Comments') {
                $('.coment_fields').removeClass('d-none');
                $('.prev_order').addClass('d-none');
            } else if ($(this).text() === 'Previous Orders') {
                $('.coment_fields').addClass('d-none');
                $('.prev_order').removeClass('d-none');
            }
        });
        // for second tabs
        $('.scnd-list-items').click(function() {
            $('.scnd-list-items').removeClass('active');
            $(this).addClass('active');

            if ($(this).text() === 'Consignee Information') {
                $('.consignee_information').removeClass('d-none');
                $('.notify_info').addClass('d-none');
            } else if ($(this).text() === 'Notify Information') {
                $('.consignee_information').addClass('d-none');
                $('.notify_info').removeClass('d-none');
            }
        });
    </script>
</body>

</html>
