<!DOCTYPE html>
<html lang="en">
<!-- Rapid(front end) بخش کاربری 
  اجرا میشود و از درون آن  main مستقیما اجرا نمی شود بلکه اول 
   این فایل خوانده میشود و پس ازکپی اطلاعات 
  section
  در
  yield
  اجرا می شود.
-->

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons 
    <link href="front/img/favicon.png" rel="icon">
    <link href="front/img/apple-touch-icon.png" rel="apple-touch-icon">-->
    <link href="front/img/favicon.png" rel="icon">
    <link href="front/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="front/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="front/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="front/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href="front/img/favicon-96x96.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <!-- Libraries CSS Files -->
    <!-- Main Stylesheet File -->
    <link href="{{ url('/front/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('/front/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('/front/css/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    {!! htmlScriptTagJsApi(['lang' => 'fa']) !!}

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
-->
    
    
    <!--<script>
        $(document).ready(function() {
                    $("#querybutton").click(function() {
                        $("#product_id").css("background-color", "red");
                        $("#product_id").css("color", "red");
                        $("p").hide();

                    });
                    $("#hide").click(function() {
                        $("p").hide();
                    });
                    //$('.chosen-select').chosen();

                }
    </script>-->
    <script>
        //chosen-select
        $('.chosen-select').chosen();
    </script>
    <!--END-circle-progress --->
</head>

<body dir="rtl">

    @include('front.navbar')
    @yield('content')
    @include('front.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="{{ url('/front/js/app.js') }}"></script>
    <script src="{{ url('/front/js/easing/easing.min.js') }}"></script>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    <!--****************************-->
    <!-- Contact Form JavaScript File -->
    <!-- Template Main Javascript File -->
    <!-- JavaScript Libraries-->
    <!-- circle-progress -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script src="{{ url('/front/js/circle-progress.js') }}"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='http://harvesthq.github.io/chosen/chosen.jquery.js'></script>
    <!--  window width & screen width -->
    <!--<script>
        // document.getElementById("demo").innerHTML = 
        var w = window.innerWidth;
        var h = window.innerHeight;
        window.alert("Screen width is " + screen.width + " ,height is " + screen.height + "\n" + "Browser width: " + w + ", height: " + h + ".");
    </script>-->
    @yield('js')
    

</body>

</html>
