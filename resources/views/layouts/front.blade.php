<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layouts.partials.header')
    <hr>
    <section id="main">
        @yield('content')
    </section>
    <hr>
    @include('layouts.partials.footer')
</body>
</html>