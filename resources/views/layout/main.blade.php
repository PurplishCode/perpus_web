<!DOCTYPE html>
<html lang="en">
<head>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href=" {{ asset("logo_edr.ico") }}" type="image/x-icon">
@include('layout.part.link')
@include('layout.part.script')

    <title>EDR | Home</title>
    <style>
          body, html {
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layout.navbar')

@include('layout.sidebar')
    
    @yield('content')
    
    @include('layout.footer')
</body>
</html>