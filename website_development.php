
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Web Development | M-R.i.S</title>
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
      <!--  <link href="css/tablecloth.css" rel="stylesheet" type="text/css" media="all" /> -->


   <link rel="stylesheet" type="text/css" href="engine1/style.css" />

   <style>

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: scroll;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: float;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 1;
}

/* Add styles to the form container */
.form-container {
  max-width: 480px;
  padding: 10px;
  background-color: silver;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

	<script type="text/javascript" src="engine1/jquery.js"></script>

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


             <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
              </div>
              <div id="overlay" ></div>


              <nav class="top-bar overlay-bar">
          <div class="container">


            <div class="row utility-menu">
              <div class="col-sm-12">
                <div class="utility-inner clearfix">
                  <span class="alt-font"><i class="fa fa-map-marker"></i> 30047 EXT 11 JHB | </span>
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
			<header class="page-header" style="height:20px">
				<div class="background-image-holder parallax-background" >
					<img class="background-image" alt="Background Image" src="img/slide-bg-new3.png">
				</div>

				<div class="container" style="margin-top:-40px;">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white alt-font"></span>
							<h1 class="text-white">Web Based Services</h1>
							<p class="text-white lead">Moving to mobile, That digital.

						</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<section class="duplicatable-content">

				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>WEB BASED SERVICES</h1>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="pull-left">
									<i class="fa fa-web"></i>
								</div>
								<div class="pull-right">

                  <p>We acknowledge the fact that web based services has become a way of life in the ever changing business and personal environment. Many businesses which don't offer web based services are actually losing out on a lot and their client based network is being narrowed with time.
                                 <br><br>
                                 Our web services are here to help you in expanding you clientele and revenue from national and international market of more than 100 million potential clients.<br><br>

                                 We will optimize your business services by offering fast, reliable, efficient and effective online services with the latest cutting edge software technology and by our highly skilled personnel.<br><br>

                                 At <b>M.R.I.S</b> we Design and Develop customized Websites from Scratch, we upgrade and reconstruct old websites which are not-effective and we offer different Website Maintenance Plan.<br><br>

                                 </p><br>
                                 <img src="img/iphone-mobile-websites-side.png">


								</div>
							</div>
						</div><!--end 6 col-->

						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="pull-left">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="pull-right">

									<p>
                    <div class="flip-front_webdev active-details">
                                 <p>M.R.I.S offers the following services under the web design and development solutions;
                               <table style="border:none; width:93%;  " class="fff">
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Standard Html website design and development</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;E-Commerce Website design and development</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Social Media integration into websites</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Interactive Web & Graphic development</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Flash and HTML5 web development</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;(CMS) Content Management Systems</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Website Maintenance Services</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Blog design and setup</p></td>
                                 </tr>
                                 <tr>
                                 <td style="border:none;"><p style="float:left;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;SEO Services</p></td>
                                 </tr>
                                 </table>

                             </div> <br><br>
                               <img src="mobile-responsive-web-design-template.png" height="100" width="100" style="position:relative; top:170px;">

							</p>
								</div>
							</div>
						</div><!--end 6 col-->





					</div><!--end of row-->
				</div>

			</section>

      <section class="pricing-1 bg-secondary-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="text-white">We craft meaningful digital experiences<br>Website Prices</h1>
              <center>
            <table style="width:50%">
            <tr>
            <th><center> <button class="btn btn-primary btn-white" onclick="openForm()"><p>Get a free quote<p></button><center>
            <br>
            <div class="form-popup" id="myForm">
            <!-- Start Formoid form-->
            <link rel="stylesheet" href="g12/formoid_files/formoid1/formoid-metro-green.css" type="text/css" />
            <script type="text/javascript" src="g12/formoid_files/formoid1/jquery.min.js"></script>
            <form class="formoid-metro-green" style="background-color:silver;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#000000;max-width:100%;min-width:150px" method="post"><div class="title"><h2>Get A Free Quote</h2></div>
            <div class="element-input"><label class="title">First and Last Name<span class="required"></span></label><input class="large" type="text" name="input" required="required"/></div>

            <div class="element-phone"><label class="title">Phone Number<span class="required"></span></label><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" required="required" value=""/></div>
            <div class="element-email"><label class="title">Email<span class="required"></span></label><input class="large" type="email" name="email" value="" required="required"/></div>
            <div class="element-select"><label class="title">Website Package<span class="required"></span></label>

            <div class="large"><span><select name="select" required="required">

            <option value="--- Select ---">--- Select Package---</option>
            <option value="Bronze Package">Bronze Package</option>
            <option value="Silver Package">Silver Package</option>
            <option value="Gold Package">Gold Package</option>
            <option value="Ultimate Package">Ultimate Package</option>
            </select><i></i></span></div></div>
            <div class="element-textarea"><label class="title">Other Instructions</label><textarea class="small" name="textarea" cols="20" rows="5" ></textarea></div>


            <div class="submit">

            <input type="submit" value="Submit"/>
            <input type="submit" value="close Form" onclick="closeForm()" style="background-color:red;"/>

            </div>

            </form>

            <script type="text/javascript" src="g12/formoid_files/formoid1/formoid-metro-green.js"></script>

            <!-- Stop Formoid form-->

            </div>

            <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
            </script>

            </th>
            </tr>

            </table>
            </center>
            <br>
						</div>
					</div><!--end of row-->

					<div class="row clearfix pricing-tables">
						<div class="col-md-3  col-sm-6 no-pad-right">
							<div class="pricing-table">
								<div class="price">
									<span class="sub">R</span>
									<span class="amount">250</span>
									<span class="sub">/mo</span>
								</div>
								<ul class="features">
									<li><strong>0-5</strong> Web Pages</li>
									<li><strong>Unlimited</strong> Social Media Networks</li>
									<li><strong>24/7</strong> Support</li>
									<li><strong>0</strong> Blog Integration</li>
                  <li><strong>Yes</strong> SEO</li>
                  <li><strong>0</strong> Database Integration</li>
                  <li><strong>No</strong> Online Store</li>
                  <li><strong>No</strong> Web App / Native App</li>
								</ul>

							</div>
						</div>

						<div class="col-md-3  col-sm-6 no-pad">
							<div class="pricing-table">
								<div class="price">
									<span class="sub">R</span>
									<span class="amount">360</span>
									<span class="sub">/mo</span>
								</div>
								<ul class="features">
                  <li><strong>5-7</strong> Web Pages</li>
                  <li><strong>Unlimited</strong> Social Media Networks</li>
                  <li><strong>24/7</strong> Support</li>
                  <li><strong>Yes</strong> Blog Integration</li>
                  <li><strong>Yes</strong> SEO</li>
                  <li><strong>0</strong> Database Integration</li>
                  <li><strong>No</strong> Online Store</li>
                    <li><strong>No</strong> Web App / Native App</li>
								</ul>

							</div>
						</div>

						<div class="col-md-3  col-sm-6 no-pad">
							<div class="pricing-table emphasis">
								<div class="price">
									<span class="sub">R</span>
									<span class="amount">500</span>
									<span class="sub">/mo</span>
								</div>
								<ul class="features">
                  <li><strong>5-7</strong> Web Pages</li>
                  <li><strong>Unlimited</strong> Social Media Networks</li>
                  <li><strong>24/7</strong> Support</li>
                  <li><strong>Yes</strong> Blog Integration</li>
                  <li><strong>Yes</strong> SEO</li>
                  <li><strong>0</strong> Database Integration</li>
                  <li><strong>Yes</strong> Online Store</li>
                    <li><strong>No</strong> Web App / Native App</li>
								</ul>

							</div>
						</div>

						<div class="col-md-3  col-sm-6 no-pad-left">
              <div class="pricing-table">
								<div class="price">
									<span class="sub">R</span>
									<span class="amount">800</span>
									<span class="sub">/mo</span>
								</div>
								<ul class="features">
                  <li><strong>5-7</strong> Web Pages</li>
                  <li><strong>Unlimited</strong> Social Media Networks</li>
                  <li><strong>24/7</strong> Support</li>
                  <li><strong>Yes</strong> Blog Integration</li>
                  <li><strong>Yes</strong> SEO</li>
                  <li><strong>Yes</strong> Database Integration</li>
                  <li><strong>Yes</strong> Online Store</li>
                    <li><strong>Yes</strong> Web App / Native App</li>
								</ul>


							</div>
						</div>



					</div><!--end of row-->

				</div><!--end of container-->
      </section>

      <section class="pricing-1 bg-secondary-1">
              <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/slide-bg-new3.png">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text-center">

                    <h1 class="text-white">Our Process</h1>
                  </div>
                </div><!--end of row-->

                <div class="row">
                  <div class="col-sm-4">
                    <div class="feature feature-icon-large" >
                      <i class="fa fa-book" style="color:#fff;"></i>
                      <h5 class="text-white">Research</h5>

                      <p class="text-white"  ><table style="border:none; width:100%;color:fff;  " >
                        <tr>
                        <td style="border:none;"><p style="float:left; color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Sign on the acceptance of quote.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;50% Deposit Payable at this point.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Brain storming designs.</p></td>
                        </tr>

                        </table>
</p>

                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="feature feature-icon-large">
                      <i class="fa fa-globe" style="color:#fff;"></i>
                      <h5 class="text-white">Develop</h5>
                      <p class="text-white"><table style="border:none; width:100%;color:fff;  " >
                        <tr>
                        <td style="border:none;"><p style="float:left; color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;We will design 2 Unique Samples to choose from.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;After approval, we proceed and perform minor changes.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Sign off the Design</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Client provide us with all contents needed for the website</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Development takes place.</p></td>
                        </tr>

                        </table></p>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="feature feature-icon-large">
                      <i class="fa fa-refresh" style="color:white;"></i>
                      <h5 class="text-white">Deliver</h5>
                      <p class="text-white"><table style="border:none; width:100%;color:fff;  " >
                        <tr>
                        <td style="border:none;"><p style="float:left; color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Test the finalized website for client.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Minor changes in the content can be applied.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Payment Settlement.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Website goes online.</p></td>
                        </tr>
                        <tr>
                        <td style="border:none;"><p style="float:left;color:white;"><img src="img/check2.png">&nbsp;&nbsp;&nbsp;Client can request receive monthly stats of the website performance.</p></td>
                        </tr>

                        </table></p>
                    </div>
                  </div>
                </div><!--end of row-->
              </div><!--end of container-->
            </section>

		</div>
		<!-- Footer -->

		<div class="footer-container">
		<!-- Footer -->
<footer id="footer-block">



            <div class="footer-information">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>About Us</h3>
                            </div>
                           <p style="font-family:Arial, Helvetica, sans-serif;"><b>M.R.I.S</b> is a 100% black owned private company, registered and operating in South Africa.
<br><br>
The company trade under the name of <b>M.R.I.S</b> and specialize in Software development, Website Design, and other related services.
<br><br>
<b>M.R.I.S</b> is a company which does not discriminate and try by all means to establish a balance on its employment policies, the company employs males, females and physically challenged personnel.
</p>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Facebook</h3>
                            </div>
                            <center><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" style="  border: 1px solid #CCC; " data-href="https://www.facebook.com/multiracialinformationsystems/" data-height="350" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div></center>


                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Twitter</h3>
                            </div>
                          	<div class="four columns"  style=" ">
		<a href="https://twitter.com/mris_company" class="twitter-follow-button" data-show-count="false">Follow @mris_company</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

 <a class="twitter-timeline" data-height="330"  href="https://twitter.com/mris_company" data-widget-id="704681489099788289">Tweets by @mris_company</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>



                        </div>
                        <div class="col-md-3">
                            <div class="header-footer" >
                                <h3>Get In Touch</h3>
                            </div>
                            <p style="font-family:Arial, Helvetica, sans-serif;"><strong>Email:</strong> <a href="mailto:info@mris.co.za" style=" text-transform:lowercase;">info@mris.co.za</a></p>
                            <p style="font-family:Arial, Helvetica, sans-serif;">44 Stanley Ave, Braamfontein Werf, Johannesburg, 2092</p>
                            <p style="font-family:Arial, Helvetica, sans-serif;"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1790.1733483120793!2d28.017971092047304!3d-26.185397974382155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c0a6ffc9379%3A0x3d365796c1f181b!2s44+STANLEY!5e0!3m2!1sen!2sza!4v1562234752728!5m2!1sen!2sza"  height="260" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copy color-scheme-1" style="background-color:black;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="index.html" class="logo-copy pull-left"></a>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center" style="font-family:Arial, Helvetica, sans-serif;">
                                <a href="" style="color:#CD9DFF;">Copyright © 2016</a> M.R.I.S | All rights reserved.<br>Multi-Racial Information Systems.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


		<script src="https://www.youtube.com/iframe_api"></script>
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



    <script src='js/fudz.js'></script>
    <script src='js/index.js'></script>


    </body>
</html>
