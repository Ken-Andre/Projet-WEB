<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!--<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Muli:wght@400;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <!--<link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    @yield('css')
    <title>BDE - Campus-douala </title>
</head>

<body>



</body>

<script src="{{asset("js/jquery-3.4.1.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jquery.animateNumber.min.js")}}"></script>
<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("js/jquery.fancybox.min.js")}}"></script>
<script src="{{asset("js/jquery.sticky.js")}}"></script>
<script src="{{asset("js/aos.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script src="{{asset("js/pre-interactions.js")}}"></script>

@stack('scripts')


// verifie la performance du site et le comportement des utilisateurs via google analytics
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bceae104c296695","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>


</html>
