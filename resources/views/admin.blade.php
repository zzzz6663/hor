<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/home/css/iziToast.min.css">
    <link rel="stylesheet" href="/manage/css/style.css">
    <link rel="stylesheet" href="/manage/css/responsive.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="csrf-token" content="{{@csrf_token()}}">
    <meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1.0, user-scalable=no;user-scalable=0;"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>
<div id="admin">
    @yield('main_body')

</div>


<script type="text/javascript" src="/manage/js/jquery.min.js"></script>
{{--<script type="text/javascript" src="/manage/js/owl.carousel.min.js"></script>--}}
<script type="text/javascript" src="/home/js/iziToast.min.js"></script>
<script type="text/javascript" src="/manage/js/temp.js"></script>
<script type="text/javascript" src="/home/js/fun.js"></script>
<script type="text/javascript" src="/manage/js/myscript.js"></script>
</body>
</html>
