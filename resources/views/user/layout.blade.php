<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.css')
    <title>Home</title>
</head>
<!--body-->
    @include('includes.header_char')
    @yield('content')
    @include('includes.footer')
<!--/body-->
</html>
