<!doctype html>
<html lang="en">
  @include('home.layouts.includes.head')
  <body>
    @include('home.layouts.includes.navbar')
    @yield('content')

    @include('home.layouts.includes.footer')

    <!-- START: Script -->
    @include('home.layouts.includes.scripts')
    <script>
      AOS.init();
    </script>
    @yield('scripts')
   
  </body>
</html>