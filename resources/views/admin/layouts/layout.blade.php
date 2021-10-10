@php
  $con = mysqli_connect('localhost','root','','rastaurant');
  $sql = "select * from settings";
  $res = mysqli_query($con, $sql);
  $setting = mysqli_fetch_assoc($res);
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    @include('admin.layouts.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.header')
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.layouts.js')
  </body>
</html>