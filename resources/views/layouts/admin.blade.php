<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/backend')}}/img/favicon.png" rel="icon">
    <link href="{{asset('assets/backend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/backend')}}/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>


@include('Backend._header')
@include('Backend._sidebar')
@yield('content')
@include('Backend._footer')



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/backend')}}/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/chart.js/chart.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/echarts/echarts.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/quill/quill.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{asset('assets/backend')}}/vendor/tinymce/tinymce.min.js"></script>
<script src="{{asset('assets/backend')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/backend')}}/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script><!-- table -->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>


</body>

</html>
