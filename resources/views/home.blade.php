<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.css')
    <title>Home</title>
</head>
<!--body-->
    @include('includes.header')
    <div style="background-color: white;">
    @yield('content')
    </div>
    @include('includes.footer')
<!--/body-->
</html>
