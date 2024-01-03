<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('admin.adminfiles.css')
</head>
<body>

  <!-- ======= Header ======== -->
@include('admin.adminfiles.navbar')


  <!-- ======= Sidebar ======= -->
  @include('admin.adminfiles.sidebar')

  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
@include('admin.adminfiles.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('admin.adminfiles.js')

</body>

</html>
