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
    <li><a class="text-white" href="#">Home </a></li>
    <li><a href="/about" class="text-white">About us</a></li>
		<li><a href="/portfolio" class="active">Portfolio</a></li>
  </ul>
    <div class="slide-footer">
      <div class="slide-footer-content">
        <p class="text-white">My name is Matteo And&oacute;. I have more than 10 years of experience in the field of Graphic / Web Designing / Data visualization.</p>
      </div> 
      <div class="copy-right">
        <p class="mt-15 mb-200 text-white"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Andivision.it </a> All Rights Reserved </p>
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
            <a href="index-01.html"> <img class="img-fluid img-small" src="assets/images/logo-icon-light.png" alt=""> </a>
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
 <section class="page-title-single-portfolio center parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/images/bg/19.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-title-name">
								<div class="page-title-text-writing">
									<h1><span class="typer" data-delay="150" data-words="Portfolio, Works, Experiences"></span>  <span class="cursor" data-cursorDisplay="|" data-owner="some-id"></span> </h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
	
<?php include("partials/gallery.php"); ?>
 
<!--=================================
 footer -->
 
<?php include("partials/footer.php"); ?>

<!--=================================
 footer -->

  </div>
 </div>

 

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div> 
 
 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="assets/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'assets/js/';</script>
 
<!-- custom -->
<script src="assets/js/custom.js"></script>

 
 
</body>
</html>