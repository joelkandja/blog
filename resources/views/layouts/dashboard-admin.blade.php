<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Espace d'administration</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset("assets/admin/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("assets/admin/css/sb-admin.min.css") }}" rel="stylesheet">

</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    @include("components/admin/sidebar-admin")
    @include("components/admin/navbar-admin");

    @yield('content')

</div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset("assets/admin/vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset("assets/admin/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset("assets/admin/js/sb-admin-2.min.js") }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset("assets/admin/vendor/chart.js/Chart.min.js") }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset("assets/admin/js/demo/chart-area-demo.js") }}"></script>
    <script src="{{ asset("assets/admin/e-demo.js") }}js/demo/chart-pi"></script>

</body>

</html>