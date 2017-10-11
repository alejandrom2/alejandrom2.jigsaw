<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    {{-- <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-icon.png"> --}}
    {{-- <link rel="icon" type="image/png" href="./img/favicon.png"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Alejandro Martinez</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
   <style>
        @import url('https://fonts.googleapis.com/css?family=Fira+Sans|Julius+Sans+One');
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="./css/ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./css/demo.css" rel="stylesheet" />
</head>
    <!-- Navbar -->
    @include('_partials.navbar')
    <!-- End Navbar -->
    <body class="index-page sidebar-collapse">
        @yield('body')
    </body>
<script src="./js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./js/core/popper.min.js" type="text/javascript"></script>
<script src="./js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./js/plugins/bootstrap-switch.js"></script>
<script src="./js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="./js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>