<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/home/css/style.css">
    <link rel="stylesheet" href="/home/css/responsive.css">
    <link rel="stylesheet" href="/home/css/iziToast.min.css">
    <link rel="stylesheet" href="/home/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{@csrf_token()}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>

@yield('main_body')

<script type="text/javascript" src="/home/js/jquery.min.js"></script>

<script type="text/javascript" src="/home/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/home/js/template.js"></script>
<script type="text/javascript" src="/home/js/iziToast.min.js"></script>
<script type="text/javascript" src="/home/js/jquery.inputmask.min.js"></script>
<script type="text/javascript" src="/home/js/slick.min.js"></script>
<script type="text/javascript" src="/home/js/fun.js"></script>
<script type="text/javascript" src="/home/js/home.js"></script>
</body>
</html>
