<?php $form_path='index_login/form.php'; require_once $form_path; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php include('dbconn.php'); ?>
        <meta charset="utf-8">

        <title>M-R.i.S | Client Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-blues.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/font-awesome.css" rel="stylesheet">
             <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>
    <body>

          <!-- WhatsHelp.io widget -->
      <script type="text/javascript">
          (function () {
              var options = {
                  facebook: "1542368196076290", // Facebook page ID
                  whatsapp: "+27659917616", // WhatsApp number
                  email: "info@mris.co.za", // Email
                  sms: "+27791178641", // Sms phone number

                  call_to_action: "Get In Touch", // Call to action
                  button_color: "#932C8B", // Color of button
                  position: "right", // Position may be 'right' or 'left'
                  order: "facebook,whatsapp,sms,email", // Order of buttons
              };
              var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
              var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
              s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
              var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
          })();
      </script>
      <!-- /WhatsHelp.io widget -->


      <div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">


            <div class="row utility-menu">
              <div class="col-sm-12">
                <div class="utility-inner clearfix">
                  <span class="alt-font"><i class="fa fa-map-marker"></i> 44 Stanley Ave, Braamfontein Werf, Johannesburg, 2092 | </span>
                  <span class="alt-font"><a href="mailto:info@mris.co.za"><i class="fa fa-envelope-o"></i> info@mris.co.za</a> | </span>
                                  <span class="alt-font"><i class="fa fa-whatsapp" style="color:white;"></i> <a href="https://wa.me/27659917616?text=Hello%20I%20to%20wanna%20get%20linked%20." target="_blank">+27 65 991 7616</a> </span>

                  <div class="pull-right">
                    <a href="login.php" class="btn btn-primary login-button btn-xs">Client Login</a>
                    <a href="#" class="btn btn-primary btn-filled btn-xs">Activate Account</a>

                  </div>
                </div>
              </div>
            </div><!--end of row-->


            <div class="row nav-menu">
              <div class="col-sm-3 col-md-2 columns">
                <a href="index.php">
                  <img class="logo logo-light" alt="Logo" src="img/logo/white.png">
                  <img class="logo logo-dark" alt="Logo" src="img/logo/color.png">
                </a>
              </div>


              						<div class="col-sm-9 col-md-10 columns">
              							<ul class="menu">

                                              <li ><a href="index.php">Home Page</a>
              								</li>

                                              <li class="has-dropdown"><a onchange="javascript:handleSelect(this)">About Us</a>
              									<div class="subnav subnav-fullwidth" style="width: 1170px; left: -200px;">
              										<div class="col-md-3">
              											<h6 class="alt-font">Company Background</h6>
              											<ul class="subnav">
              												<li><a  href="about.php"> Mission </a></li>

              											</ul>
              										</div>

              										<div class="col-md-3">
              											<h6 class="alt-font">Social Resposibility</h6>
              											<ul class="subnav">
              												<li><a href="social_responsibility.php">Education & Training</a></li>
              																		</ul>
              										</div>

              										<div class="col-md-3">
              											<h6 class="alt-font">Education</h6>
              											<ul class="subnav">

              												<li><a href="education.php">An Early Source Code</a></li>
              											</ul>
              										</div>

              										<div class="col-md-3">
              											 <img src="img/21457884_1861810110798762_7851157604620806765_o.jpg" class="img-responsive" alt="">
              										</div>
              									</div>
              								</li>


              								<li class="has-dropdown"><a onchange="javascript:handleSelect(this)">Services</a>
              									<div class="subnav subnav-fullwidth" style="width: 1170px; left: -200px;">
              										<div class="col-md-3">
              											<h6 class="alt-font">Software Dev</h6>
              											<ul class="subnav">
              												  <li>
                                                                                      <a href="software_development.php"><i class="fa fa-th" ></i> Custom Software Development </a>
                                                                                  </li>
                                                                                  <li>
                                                                                      <a href="software_development.php"><i class="fa fa-lock"></i> Application Security </a>
                                                                                  </li>
                                                                                  <li>
                                                                                      <a href="software_development.php"><i class="fa fa-refresh"></i> Maintenance & Support </a>
                                                                                  </li>
                                                                                   <li>
                                                                                      <a href="software_development.php"><i class="fa fa-hdd-o"></i> Software Product Development </a>
                                                                                  </li>
                                                                                   <li>
                                                                                      <a href="software_development.php"><i class="fa fa-briefcase"></i> Enterprise Application Integration </a>
                                                                                  </li>
              											</ul>
              										</div>

              										<div class="col-md-3">
              											<h6 class="alt-font">Website Design & Dev</h6>
              											<ul class="subnav">
              												 <li>
                                                                                      <a href="website_development.php"><i class="fa fa-globe"></i> Web Designs </a>
                                                                                  </li>
                                                                                  <li>
                                                                                      <a href="website_development.php"><i class="fa fa-shopping-cart"></i> CMS Maintenance </a>
                                                                                  </li>
                                                                                  <li>
                                                                                      <a href="website_development.php"><i class="fa fa-cogs"></i> UI/UX & WebDesign </a>
                                                                                  </li>
                                                                                   <li>
                                                                                      <a href="website_development.php"><i class="fa fa-comments"></i> Blog Design & RSS Integration </a>
                                                                                  </li>
                                                                                   <li>
                                                                                      <a href="website_development.php"><i class="fa fa-comment"></i> Social Media Integration </a>
                                                                                  </li>
              											</ul>
              										</div>



              										<div class="col-md-3">
              											<img src="img/mris back.png" class="img-responsive" alt="">
              										</div>
              									</div>
              								</li>
              								<!--<li class="has-dropdown"><a href="#"></a>
              									<ul class="subnav">
              										<li><a href="about.html">About Us</a></li>
              										<li><a href="about-2.html">About Us 2</a></li>
              										<li><a href="services.html">Services</a></li>
              										<li><a href="services-2.html">Services 2</a></li>
              										<li><a href="login.html">Login</a></li>
              										<li><a href="404.html">404 Error</a></li>
              										<li><a href="500.html">500 Error</a></li>
              									</ul>
              								</li> -->




              								<li class="has-dropdown"><a onchange="javascript:handleSelect(this)">Flagship Solutions</a>
              									<div class="subnav subnav-fullwidth" style="width: 1170px; left: -200px;">
              										<div class="col-md-3">
              											<h6 class="alt-font">Education Sector</h6>
              											<ul class="subnav">
              												 <li>
                                                           <a href="vhakhoufunda.php"><i class="fa fa-th" ></i> VhakhouFunda Suit</a>
                                                             </li>


              											</ul>
              										</div>






              									<div class="col-md-3">
              											<h6 class="alt-font">Point Of Sale</h6>
              											<ul class="subnav">
              												   <li>
                                                           <a onchange="javascript:handleSelect(this)"><i class="fa fa-th" ></i> sPLASHa Dry Clean POS</a>
                                                             </li>

              											</ul>
              										</div>
              									</div>
              								</li>



              								<li ><a href="portfolio.php">Portfolio</a>								</li>






              								<li ><a href="contact.php">Contact</a>

              								</li>
              							</ul>


                            <ul class="social-icons text-right">
              							  <li><a href="https://www.facebook.com/multiracialinformationsystems/" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                                      <li><a href="https://wa.me/27659917616?text=Hello,%20I%20too%20wanna%20get%20linked%20." target="_blank"><i class="fa fa-whatsapp"></i></a></li>

                                                      <li><a href="https://twitter.com/mris_company" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                       <li><a href="https://www.linkedin.com/company/multi-racial-information-systems?trk=nav_account_sub_nav_company_admin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              							</ul>
              						</div>
              					</div><!--end of row-->

              					<div class="mobile-toggle">
              						<i class="icon icon_menu"></i>
              					</div>

              				</div><!--end of container-->
              			</nav>



      </div>
      <div class="main-container">
  			<section class="no-pad login-page fullscreen-element">

  				<div class="background-image-holder">
  					<img class="background-image" alt="Poster Image For Mobiles" src="img/mmm.jpg">
  				</div>



				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
							<h1 class="text-white">Login to continue</h1>
							<div class="photo-form-wrapper clearfix">


<form method="post" id="login_form">
									<input class="form-email" type="text" name="Email_Address" placeholder="Email Address">

									<input class="form-password" type="password" name="Client_ID" placeholder="CustomerID">

									<input class="login-btn btn-filled" type="submit" value="Login">

								</form>

							 <script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "post",
						url: "login - Copy.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome Back!", { header: 'Access Granted' });
						var delay = 100;
							setTimeout(function(){ window.location = 'dashboard/index.php'  }, delay);
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}

					});
					return false;
				});
			});
			</script>


							</div><!--end of photo form wrapper-->
							<a href="#" class="text-white">Activate User Account ➞</a><br>
							<a href="#" class="text-white">I've forgotten my password</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>


		<div class="footer-container"></div>

		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>


<?php include('scripts.php');?>
<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>


    </body>
</html>
