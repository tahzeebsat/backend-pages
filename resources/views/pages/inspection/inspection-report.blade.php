<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrapver5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
</head>

<body>
    <aside class="sidebar-dashboard d-md-block d-lg-block d-none">
        @component('components.common.main-sidebar')
            Main Sidebar
        @endcomponent
    </aside>
    <div class="d-md-none d-lg-none d-block">
        @component('components.common.mobile-headings', ['title' => 'Operations'])
            Heading
        @endcomponent
    </div>

    <div class="main-content">
        @component('components.inspection.inspection-report.blade.php')
            Inspection Report
        @endcomponent
    </div>
    <div>
        @component('components.common.mobile-sidebar')
            mobile sidebar
        @endcomponent
    </div>
    <script src="{{ asset('assets/js/bootstrapver5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
</body>

</html>
