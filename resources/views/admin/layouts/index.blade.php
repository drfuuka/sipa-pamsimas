<!DOCTYPE html>
<html lang="en">
  <head>
      <title>@yield('title')</title>
      @include('admin.layouts.includes.head')
      @include('admin.layouts.includes.head-style')
  </head>
<body>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.layouts.includes.menu')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">
          @yield('content')
        </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

        @include('admin.layouts.includes.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
@include('admin.layouts.includes.vendor-scripts')

<script src="{{asset('assets/admin/assets/js/app.js')}}"></script>
</body>
</html>