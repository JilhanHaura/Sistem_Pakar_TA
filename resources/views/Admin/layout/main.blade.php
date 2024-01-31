<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ahlinya Ayam</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/Admin/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/Admin/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/summernote/summernote-bs4.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/Admin/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/Admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/Admin/assets/css/style.css">
    <link rel="stylesheet" href="/Admin/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <header class="header-area header-sticky">
        @include('Admin.layout.header')
    </header>

    <main id="main" style="min-height: 100vh;">
        @include('Admin.layout.sidebar')
        @yield('content')
    </main>

    <footer id="footer">
        @include('Admin.layout.footer')
    </footer>

    <!-- General JS Scripts -->
    <script src="/Admin/assets/modules/jquery.min.js"></script>
    <script src="/Admin/assets/modules/popper.js"></script>
    <script src="/Admin/assets/modules/tooltip.js"></script>
    <script src="/Admin/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Admin/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/Admin/assets/modules/moment.min.js"></script>
    <script src="/Admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/Admin/assets/modules/datatables/datatables.min.js"></script>
    <script src="/Admin/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/Admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="/Admin/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="/Admin/assets/modules/chart.min.js"></script>
    <script src="/Admin/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="/Admin/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/Admin/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/Admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="/Admin/assets/js/page/modules-datatables.js"></script>
    <!-- Page Specific JS File -->
    <script src="/Admin/assets/js/page/index-0.js"></script>

    <!-- Template JS File -->
    <script src="/Admin/assets/js/scripts.js"></script>
    <script src="/Admin/assets/js/custom.js"></script>
</body>

</html>
