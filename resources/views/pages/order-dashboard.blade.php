<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <title>Order</title>
</head>

<body>
    <aside class="sidebar-dashboard d-md-block d-sm-none d-none">
        @component('components.common.main-sidebar')
            Main Sidebar
        @endcomponent
    </aside>

    <div class="main-content">
        <div class="order-sidebar-soh">
            @component('components.dashboard-order.order-rightbar')
                Order Right Bar Details
            @endcomponent
        </div>

        @component('components.dashboard-order.dashboard-order-mainsection')
            Order Right Bar Details
        @endcomponent

    </div>
    @component('components.common.svgs-Icons')
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
