<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css') }}">
</head>
<body>

@include('layouts.admin.partials.navbar')

<div class="container">
    @yield('content')
</div>


<script src="{{ asset('assets/vendor/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
