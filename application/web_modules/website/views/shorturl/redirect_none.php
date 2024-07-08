<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CANVAS;?>css/magnific-popup.css" type="text/css" />
    <script src="https://kit.fontawesome.com/b377fabc22.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo CANVAS;?>css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $title;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="mx-auto border-0 px-0">
							<a href="index.html" class="standard-logo" data-dark-logo="<?php echo CANVAS;?>images/logo-dark.png"><img src="<?php echo CANVAS;?>images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="<?php echo CANVAS;?>images/logo-dark@2x.png"><img src="<?php echo CANVAS;?>images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content" class="include-header">
			<div class="content-wrap py-0">
				<div class="container">

					<div class="vh-100">
						<div class="vertical-middle">

							<div class="row justify-content-center col-mb-50">

								<div class="col-sm-8 col-lg-8">
									<div class="feature-box fbox-center fbox-light fbox-plain">
										<div class="fbox-icon" data-animate="pulse infinite">
											<a href="#"><i class="fa-solid fa-link-slash"></i></a>
										</div>
										<div class="fbox-content">
											<h2>ไม่พบ Link ที่ท่านต้องการ</h2>
											<p>กำลังพาท่านกลับไปยังหน้าแรกในอีก <span id="cooldown_time"></span> วินาที หรือ <a href="<?php echo site_url()?>">คลิกไปยังลิงค์ทันที</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo CANVAS;?>js/jquery.js"></script>
	<script src="<?php echo CANVAS;?>js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo CANVAS;?>js/functions.js"></script>

    <script>
        var full_time = 5;
        var counter = 0;
        var x = setInterval(function() {
            
            document.getElementById("cooldown_time").innerHTML = full_time;
            full_time--;
            if(full_time < 0){
                clearInterval(x);
                window.location.href = "<?php echo site_url();?>";
            }
        }, 1000);
        

/*var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("cooldown_time").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("cooldown_time").innerHTML = "EXPIRED";
  }
}, 1000);*/
    </script>

</body>
</html>