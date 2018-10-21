<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <base href="{{ asset('') }}">
    @include('layouts.admin.css')
    <!-- modernizr css -->

</head>

<body>

<!-- page container area start -->
<div class="page-container">
@include('layouts.admin.sidebar')
    <!-- sidebar menu area end -->
    <div class="main-content">
        @yield('content')
    </div>
    <!-- main content area end -->
</div>
<!-- page container area end -->

@include('layouts.admin.js')
</body>

</html>