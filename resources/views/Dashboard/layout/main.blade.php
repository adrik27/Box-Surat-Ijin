<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://yeshadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>BOXI (BOX IJIN KERJA)</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ url('template/xhtml/images/favicon.png') }}">

    <link href="{{ url('template/xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/xhtml/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/xhtml/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('template/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ url('template/xhtml/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/buttons/1.6.4/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/xhtml/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">


    <!-- tagify-css -->
    <link href="{{ url('template/xhtml/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ url('template/xhtml/css/style.css') }}" rel="stylesheet">

    <!-- Link ke Material Icons CDN -->
    <link href="{{ url('template/xhtml/icons/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('template/xhtml/icons/fontawesome6/css/all.min.css') }}" rel="stylesheet">
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
                    header start
        ***********************************-->

        @include('Dashboard.layout.partials.header')

        <!--**********************************
                    header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('Dashboard.layout.partials.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
                    Content body start
                ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    @yield('isi')
                </div>
            </div>
        </div>
        <!--**********************************
                    Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include('Dashboard.layout.partials.footer')
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('template/xhtml/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ url('template/xhtml/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/draggable/draggable.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/swiper/js/swiper-bundle.min.js') }}"></script>


    <!-- tagify -->
    <script src="{{ url('template/xhtml/vendor/tagify/dist/tagify.js') }}"></script>

    <script src="{{ url('template/xhtml/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ url('template/xhtml/js/plugins-init/datatables.init.js') }}"></script>

    <!-- Apex Chart -->

    <script src="{{ url('template/xhtml/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}">
    </script>


    <!-- Vectormap -->
    <script src="{{ url('template/xhtml/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('template/xhtml/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ url('template/xhtml/js/custom.js') }}"></script>
    <script src="{{ url('template/xhtml/js/deznav-init.js') }}"></script>
    <script src="{{ url('template/xhtml/js/demo.js') }}"></script>
    <script src="{{ url('template/xhtml/js/styleSwitcher.js') }}"></script>
    {{-- <script>
        jQuery(document).ready(function(){
			setTimeout(function(){
				dzSettingsOptions.version = 'dark';
				new dzSettings(dzSettingsOptions);
			},1500)
		});
    </script> --}}


</body>

</html>