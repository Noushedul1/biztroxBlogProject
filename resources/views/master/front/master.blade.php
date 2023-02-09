
<!DOCTYPE html>
<html lang="zxx">

<head>
  @include('master.front.layouts.header')
</head>

<body>
  

<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/') }}website/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
@include('master.front.layouts.navbar')
@yield('body')
@include('master.front.layouts.footer')

@include('master.front.layouts.script')
</body>
</html>