<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Rock</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contact-page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ route('homepage') }}"><img src="/images/logo.jpg" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="{{ route('homepage') }}">Home</a> </li>
                                        <li> <a href="about.html">about</a> </li>
                                        <li> <a href="album.html"> Albums</a> </li>
                                        @auth
                                            <li class=""> <a href="{{ route('musicrequest') }}">Request</a> </li>
                                        @endauth
                                        @guest
                                            <li> <a href="{{ route('loginform') }}">Login</a> </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="/images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->

    <main>
        {{ $slot }}
    </main>
    <!--  footer -->

    <div class="copyright">
        <div class="container">
            <p>© 2024 All Rights Reserved.</a></p>
        </div>
    </div>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });


        });
            // $('#staticBackdrop').modal('show');

    </script>
</body>

</html>
