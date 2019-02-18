<?php include("includes/head.php");?>

<body class="st-container st-effect-1">



    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-12.svg" alt="">
        </div>

        <!--=================================
 preloader -->


        <!--=================================
 st-menu -->

        <div class="st-menu st-effect-1 scrollbar right-side big-side" id="menu-1">
            <div class="pos-bot">
                <ul class="menu">
                    <li><a href="./" class="text-white">Home </a>
                    </li>
                    <li><a href="./portfolio.php" class="active">Portfolio</a>
                    </li>
                    <li><a href="./about.php" class="text-white">About</a>
                    </li>
                </ul>
                <div class="slide-footer">
                    <div class="slide-footer-content">
                        <p class="text-white">My name is Matteo And&oacute;. I have more than 10 years of experience in the field of Graphic / Web Designing / Data visualization.</p>
                    </div>
                    <div class="copy-right">
                        <p class="mt-15 mb-200 text-white"> &copy;Copyright
                            <span id="copyright">
                                <script>
                                    document.getElementById( 'copyright' ).appendChild( document.createTextNode( new Date().getFullYear() ) )
                                </script>
                            </span> <a href="#"> Andivision.it </a> All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>

        <!--=================================
 st-menu -->

        <!--=================================
 header -->

        <div class="st-pusher">
            <header class="header burger">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="logo">
                                <a href="./"> <img class="img-fluid img-small" src="assets/images/logo_white.png" alt=""> </a>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="#" class="menu-icon medium side-panel-trigger"><span class="ti-menu text-white"></span></a>
                        </div>
                    </div>
                </div>
            </header>

            <!--=================================
 header -->
            <section class="bg-overlay-black-60 slider-parallax personal-typer-banner parallax" data-jarallax='{"speed": 0.6}' style="background: url(assets/images/bg/19.jpg);background-repeat: no-repeat;background-position: bottom right; ">
                <div class="slider-content-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="slider-content">
                                    <span class="sub-text text-white">Hello <b>my friend!  </b> </span>
                                    <h2> <span class="typer" data-delay="300" data-words="Portfolio, Works, Experiences"></span>  <span class="cursor" data-cursorDisplay="|" data-owner="some-id"></span> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg-bottom-before"></div>
            <?php include("partials/gallery.php"); ?>

            <!--=================================
 footer -->

            <?php include("partials/footer.php"); ?>

            <!--=================================
 footer -->

        </div>
    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a>
    </div>


    <!--=================================
 jquery -->

    <!-- jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="assets/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = 'assets/js/';
    </script>

    <!-- custom -->
    <script src="assets/js/custom.js"></script>



</body>
</html>