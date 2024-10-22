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
    </script>
    <script>
        // for tabs moiz motors
        function showTabContent(tabId) {
            document.querySelectorAll('.tab-content').forEach(div => {
                div.style.display = 'none';
            });
            $(`.${tabId}`).css('display', 'block')
            document.querySelectorAll('.tabs-selections li').forEach(li => {
                li.classList.remove('active');
            });
            document.getElementById(tabId + '_tab').classList.add('active');

            $('.show-install-td').addClass('d-none')
            $(`.${tabId + '_td'}`).removeClass('d-none')
        }
        showTabContent('total_orders');
    </script>

    <script>
        // for file upload
        $('#pending_invoice_field').on('change', function() {
            var file = this.files[0];
            if (file) {
                $('#fild').val(file.name);
            } else {
                $('#fild').val('No file selected');
            }
        });
        
        function handleUpload(hiddenField, input) {
        document.getElementById(hiddenField).click();

        document.getElementById(hiddenField).addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            document.getElementById(input).value = file.name;
        }
        });
        }
    </script>
</body>

</html>
