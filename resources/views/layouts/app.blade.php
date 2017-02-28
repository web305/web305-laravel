<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<meta property="og:title" content="WEB305 | Web-Entwicklung | Mannheim | @yield('page-title')" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.web305.de/" />
	<meta property="og:image" content="{{ asset('/img/web305.png') }}" />
    <meta name="keywords" content="@yield('page-keywords')">
    <meta name="author" content="Emir Bekto">
    <meta name="description" content="@yield('page-description')">

    <title>WEB305 | Web-Entwicklung | Mannheim | @yield('page-title')</title>

    <!-- main.css -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-72714523-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{!! url('/'); !!}" title="WEB305">WEB305</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="{!! url('/'); !!}" title="WEB305"></a>
                    </li>
                    <li>
                        <a href="{!! url('/dienstleistung'); !!}" class="{{ Request::segment(1) === 'dienstleistung' ? 'active' : null }}" title="Dienstleistung">Dienstleistung</a>
                    </li>
                    <li>
                        <a href="{!! url('/portfolio'); !!}" class="{{ Request::segment(1) === 'portfolio' ? 'active' : null }}" title="Portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="{!! url('/kontakt'); !!}" class="{{ Request::segment(1) === 'kontakt' ? 'active' : null }}" title="Kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; WEB305 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/web305/" target="_blank" title="WEB305 auf Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.xing.com/profile/Emir_Bekto" target="_blank" title="Emir Bekto auf Xing"><i class="fa fa-xing"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="{!! url('/datenschutz'); !!}" class="{{ Request::segment(1) === 'datenschutz' ? 'active' : null }}" title="Datenschutz">Datenschutz</a></li>
                        <li><a href="{!! url('/impressum'); !!}" class="{{ Request::segment(1) === 'impressum' ? 'active' : null }}" title="Impressum">Impressum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

	<!-- GoogleMaps -->
	<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQMmpa5EMGfuyRh8xb17wrJCQn-xXoNSE&callback=initMap"></script> -->

    <!-- main.js -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>