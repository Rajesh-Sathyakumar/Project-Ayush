
<?php
include ("contact.php");
if(isset($_POST["submit"]))
  {
      $name=$_POST['name'];
      $email=$_POST['email'];
	   $subject=$_POST['subject'];
      $message=$_POST['message'];
	  contact($name,$email,$subject,$message);

  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Ministry of Ayush</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">


	<link rel="stylesheet" href="css/bootstrap.min.css">


	<link rel="stylesheet" href="css/animate.min.css">

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">



	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

	
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	
   	<link rel="stylesheet" href="css/bxslider.css">

   	
	<link rel="stylesheet" href="css/style.css">

	
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section  class="preloader">

	<div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="smoothScroll navbar-brand">MINISTRY OF AYUSH</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            
				<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
                

				<li><a href="../login.php" class="smoothScroll">LOGIN</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider">
        <ul class="bxslider">
			<li>
                <img src="img/home2.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>MINISTRY OF AYUSH</h2>
                                <p class="color-white">Ministry of Ayurveda,Yoga,Unani,Siddha and Homeopathy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="img/ayu4.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
						<h2>AYURVEDA</h2>
						<p class="color-white"></p>
                    </div>
                </div>
            </li>
            <li>
                <img src="img/ayur.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>HOMEOPATHY</h2>
                                <p class="color-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="img/nat1.png" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <table width="100%" align="center">
									<tr>
								<td><h2>SIDDHA</h2></td>

									</tr>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="img/slider1.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>UNANI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->

    </div> <!-- /.site-slider -->
</div>


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->



			<!-- Work Owl Carousel section
			================================================== -->
			<div href="#" id="owl-work" class="owl-carousel">

				<div  class="item animate col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<a href="#contact"><span  style="color:orange;font-size: 50px" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
						<h3>Contact Us</h3>
					</a>
				</div>



				<div  class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<a href="../searchindex.html"><span style="color:orange;font-size: 50px" class="glyphicon glyphicon-search" aria-hidden="true"></span>
						<h3>Search</h3>

					</a>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<a href="#faq"><span style="color:orange;font-size: 50px" class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<h3>FAQ</h3>
					</a>
				</div>

			</div>

		</div>
	</div>
</section>

<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
	
			<div class="col-md-6 col-sm-12">
				<h3 class="color-white">DESCRIPTION</h3>
				<h2>MINISTRY OF AYUSH</h2>
				<p class="color-white">The Ministry of AYUSH was formed with effect from 9 November 2014 by elevation of the Department of AYUSH Ayush is also a common Hindu given name, derived from Sanskrit, meaning "life".the ministry of AYUSH was formed with the desire to give the people a clear insight on Ayruvedha,Siddha,Unani,Yoga and Homeopathy.Ayush was created in order to bridge the gap between ancient medical science with the Modern medical science.The ministry of AYUSH    has  established various educational and research centers in the field of Ayruvedha,Siddha,Unani,Yoga and Homeopathy</p>

			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top">CATEGORIES</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          							SIDDHA
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
      						<p>Siddha system is one of the oldest systems of medicine in India . Eighteen Siddhars were said to have contributed towards the development of this medical system. Siddha literature is in Tamil and it is practised largely in Tamil speaking part of India and abroad. The Siddha System is largely therapeutic in nature.</p>

      						</div>
   						 </div>
 					 </div>

  	 				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          							AYURVEDHA
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
      						<p>Ayurveda medicine, is a system of medicine with historical roots in the Indian subcontinent.According to some sources, up to 80 percent of people in India use some form of traditional medicine, a category which includes Ayurveda. </p>
      						</div>
   						 </div>
 					 </div>

					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          							HOMEOPATHY
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
      						<p>Homoeopathy today is a rapidly growing system and is being practiced almost all over the world.. A rough study states that about 10% of the Indian population solely depend Homoeopathy for their Health care needs and is considered as the Second most popular system of medicine in the Country.</p>
      						</div>
						</div>
 					 </div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									UNANI
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<p>As the name indicates, Unani system originated in Greece. The foundation of Unani system was laid by Hippocrates. The Unani System of Medicine has a long and impressive record in India. It has the largest number of Unani educational, research and health care institutions</p>
							</div>
						</div>
					</div>

 				 </div>
			</div>


		</div>
	</div>
</section>


<!-- team section
================================================== -->
<section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h1 align="center">FAQ</h1><br>
				<p>
							1. How do i rate the company?
				</p>
				<p>		    2. What are the types of grievances which are not taken up for redress by the Department?</p>
				<p>
                            3. What are the contact details of the Nodal Officers of Public Grievances in Ministries/Departments?></p>
				<p>
                            4. How do I search the companies based on there location
				</p>
				<p>
                            5. Can we use the drugs which are not listed here
				</p>

			</div>
		</div>
	</div>
</section>


<!-- Plan section
================================================== -->


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->

			<!-- Contact form section
			================================================== -->
			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h1 align="center">Contact Us</h1><br>

				<form 2 class="wow fadeInUp" data-wow-delay="0.6s">

					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" name="submit" value="SEND MESSAGE">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>hello@company.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>0000000000 | 000000000</p>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
			<div class="col-md-12 col-sm-12">

				
				<p>Copyright &copy; 2017 Ministry of Ayush

			</div>
	</div>
</footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
