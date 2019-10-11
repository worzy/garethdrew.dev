<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body>
    <div class="font-master">
        @yield('body')
    </div>
</body>

</html>