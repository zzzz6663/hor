<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/old/css/style.css">
    <link rel="stylesheet" href="/old/css/responsive.css">
    <link rel="stylesheet" href="/css/iziToast.min.css">
    <meta name="csrf-token" content="{{@csrf_token()}}">
    <meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1.0, user-scalable=no;user-scalable=0;"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>

@yield('main_body')
<script type="text/javascript" src="/old/js/jquery.min.js"></script>
<script type="text/javascript" src="/old/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/old/js/jQuery.countdownTimer.js"></script>
<script type="text/javascript" src="/old/js/jQuery.countdownTimer-fa.js"></script>
<script type="text/javascript" src="/old/js/select2.full.min.js"></script>
<script type="text/javascript" src="/old/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="/old/js/nouislider.min.js"></script>
<script type="text/javascript" src="/old/js/jquery.limit.js"></script>
<script type="text/javascript" src="/js/iziToast.min.js"></script>

<script type="text/javascript" src="/js/fun.js"></script>
<script type="text/javascript" src="/old/js/template.js"></script>

</body>
</html>
