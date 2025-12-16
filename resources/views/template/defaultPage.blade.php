<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>workshop # html-@yield('title')</title>
</head>
<style>
    body {
        font-family: "Noto Sans Thai", sans-serif;
    }
</style>
@stack('styles')

<body>
    <div class="container">
        <h1 class="mt-4">@yield('header')</h1>
        @yield('content')
    </div>
    @stack('scripts')
</body>


</html>
