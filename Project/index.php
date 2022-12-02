<?php

// require'connection.php';

// if(!empty($_SESSION["id"])){
// 	$id = $_SESSION[""];
// 	$result = mysqli_query($conn, "SELECT * FROM register WHERE id=$id");
// 	$row= mysqli_fetch_assoc($result);
// }
// else{
// 	header("Location: login.php");
// }

?>

<?php 
include "connection.php";
error_reporting(0);
if(isset($_POST["submit"])){

 
$name =   strip_tags($_POST['your-name']);
$email =   strip_tags($_POST['your-email']);
$number =   strip_tags($_POST['your-phone']);
$msg =   strip_tags($_POST['your-message']);
 
$sql = "INSERT INTO contact (name , email, phone, msg) VALUES ('$name', '$email', '$number', '$msg')";

if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Message Sent")</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

$result = mysqli_query($conn, $sql);
if ($result) {
        echo '<script>alert("Message Sent")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Paw Care</title>
	<link rel='stylesheet' id='bootstrap-css' href='bootstrap-3.3.7/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='skin-style-css' href='bootstrap-3.3.7/css/skin.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-css' href='bootstrap-3.3.7/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='slick-style-css' href='bootstrap-3.3.7/css/slick.css' type='text/css' media='all' />
	<script type='text/javascript' src='bootstrap-3.3.7/js/jquery.js'></script>
	<script type='text/javascript' src='bootstrap-3.3.7/js/jquery-migrate.min.js'></script>
	<style type='text/css' media='all'>
		body {
			font-family: "Lato";
			font-size: 16px;
		}

		#about-section {
			z-index: 0;
		}

		.new-btn button{
	 		background-image: linear-gradient(to bottom , brown, blue);, 
	 		tend: #21D4FD
	 		border: none; 
	 		padding: 15px 32px; 
	 		text-align: center; 
	 		text-decoration: none; 
	 		display: inline-block; 
	 		font-size: 16px; 
	 		border-radius: 15pt; 
	 		font-size: 20px;
		}

		.new-btn button a{
			color: white;
		}
	</style>
</head>

<body class="home page-template page-template-homepage page-template-homepage-php page page-id-6">
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row responsive_menu">
					<div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
						<div class="logo-midde logo">
							<h1 class="header-logo">
								<a href="index.php" rel="home">
								 <img class="logo-default"  src="logo.png" alt="logo" />
								</a>
							</h1>
							<!-- header-logo -->
						</div>
						<!-- logo-midde logo -->
					</div>
					<div class="col-lg-9 col-md-9 col-sm-4 col-xs-4 col_menu">
						<div class="header-menu">
							<div class="header-container">
								<div class="open-menu-mobile">
									<i class="fa fab fa-bars"></i>
									<i class="fa fa-times"></i>
								</div>
								<div class="header-center">
									<nav id="site-navigation" class="main-navigation">
										<div class="menu-main-menu-container">
											<ul id="menu-main-menu" class="mega-menu">
												<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-25"><a href="index.php">Home</a></li>
												<li id="menu-item-183" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183"><a href="#about-section">About Us</a></li>
												<li id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-182"><a href="../Project/doctor.php">Doctors</a></li>
												<li id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-181"><a href="../Project/shelter.php">Shelter</a></li>
												<li id="menu-item-180" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-180"><a href="#contact-section">Contact</a></li>
												<li id="menu-item-180" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-180"><a href="../Project/login.php" onclick="openForm()">LOGIN</a></li>
												<li id="menu-item-180" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-180"><a href="logout.php">Logout</a></li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</header>
		<div id="main" class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div id="home-banner" class="home-banner">
						<div class="warp-body">
							<div class="warp-content">
								<h2 class="title">&ldquo;SAFE. <br /> ANIMAL. <br />ENVIRONMENT.<br />COMMUNITY.&rdquo;</h2>
								<div class="desc">
									<p>Based in Haridwar. A website to provide information of nearby shelters and doctors for Stray Animals.</p>
								</div>
							</div>
							<div class="right">
								<div class="video">
									<!--<a href="https://www.youtube.com/watch?v=UZVikOCTdgs" data-youtube-id="UZVikOCTdgs" class="video-thumb js-trigger-video-modal">
                                              <img src="images/video.jpg" alt="Image Video">
                                              <div class="icon-play">
                                                  <i class="fa fa-play"></i>
                                              </div>
                                            </a>-->
									<div class="bg-rgba"></div>
									<!-- video modal -->
									<section class="video-modal">
										<div id="video-modal-content" class="video-modal-content">
											<iframe id="youtube" allowfullscreen></iframe>
											<a href="#" class="close-video-modal">
                                                      <i class="fa fa-close"></i>
                                                    </a>
										</div>
										<!-- end modal content wrapper -->
										<div class="overlay"></div>
									</section>
									<!-- end video modal -->
								</div>
							</div>
						</div>
					</div>

					<div id="about-section" class="turning-section">
						<div class="container">
							<div class="turn-content">
								<h2 class="title">“Provide a SAFE ENVIRONMENT <br /> Help them FIND HOME”</h2>
								<div class="desc">
									<p>Getting a home for ourselves is very diffucult itself, think of those who cannot ask verbally about it. Help those helpless stray animals who are roaming around aimlessly with no particular home in sight. Your one step towards humanity can save an innocent life. </p>
									<p>Go beyond your comfort zone and help them have a new life.</p>
								</div>
							</div>
						</div>
						<div class="ps-l-1"></div>
						<div class="ps-r-1"></div>
					</div>

					<div class="services-section">
						<center>
							<p style="font-size: 60;">BLOGS</p>
						</center>
					</div>

					<div class="development-section">
						<div class="container">
							<div class="development-content item-l">
								<div class="thum">
									<img src="images/bg-dev-1.jpg" alt="Dog">
								</div>
								<div class="content">
									<h3 class="title">Unpleasant odor? <br />Homemade Deodorizing!!</h3>
									<div class="dev-content">
										<p>The unpleasant odor is in addition to the redness, sneezing, swelling, and other symptoms that a skunk contact may cause for your dog. A combination of baking soda, dishwashing liquid, and hydrogen peroxide works as a de-skunking treatment on skunked hair and anything the skunked fur comes into touch with.  </p>
										<p>Apply 4 cups of hydrogen peroxide on your pet’s coat, along with 1/3 cup baking soda with a tiny spray of dishwashing detergent. After approximately five minutes, rinse well and repeat if required. This treatment also works for smelly anal glands, but that’s not really the most glamorous subject to talk about.</p>
									</div>
								</div>
							</div>

							<div class="development-content item-r">
								<div class="thum">
									<img src="images/bg-dev-2.jpg" alt="Dog">
								</div>
								<div class="content">
									<h3 class="title">Electrolyte: For Diarrhea</h3>
									<div class="dev-content">
										<p>Flavorless electrolyte-replacing beverages (like pediatric drinks or sports waters) may not only help athletes rehydrate and infants recover from sickness, but they can also provide much-needed hydration and electrolytes to your sick dog if he’s struggling from diarrhea.</p>
										<p>When dogs have diarrhea, they can lose fluids and electrolytes, so giving them a beverage that contains both can be beneficial, especially if their appetite hasn’t fully recovered. Before giving your dog such liquids, consult your veterinarian to determine the proper dosage and if additional treatment is required.</p>
									</div>
								</div>
							</div>

							<div class="development-content item-l">
								<div class="thum">
									<img src="images/bg-dev-3.jpg" alt="Dog">
								</div>
							<div class="content">
									<h3 class="title">Bad Breath? <br />Aloe Vera Toothpaste!!</h3>
									<div class="dev-content">
										<p>Known for its healing properties, some aloe vera has been shown to have beneficial effects in the treatment of various mouth problems from gingivitus to bad breath. The paste is generally mixed with Bee propolis for added antibacterial asistance.</p>
										<p>Be aware though, not all aloe vera is suitable for cats. The gel is not toxic, but the latex can cause problems for your dog or cat so make sure if you do buy any aloe vera it has no latex at all in its ingredients.</p>
									</div>
								</div>
							</div>

							<div class="development-content item-r">
								<div class="thum">
									<img src="images/bg-dev-4.png" alt="Dog">
								</div>
								<div class="content">
									<h3 class="title">Quick First Aid</h3>
									<div class="dev-content">
										<p>A combination of a few herbs which comfort and reassure. It is also excellent for depression and stress. Use at times of extreme shock or when introducing a new cat into the household (give some to the existing cat and take some yourself!) This amazing remedy can be bought at most chemists now.</p>
										<p>
											<li>Aloe Vera Gel: Can be applied topically to wounds or burns or taken internally for Bowel problems.</li>
											<li>Chlorella: Only very small quantities can improve digestion, coat, growth and boost the immune system.</li>
											<li>Pumpkin: For upset bowels Some cats like it as is, but many people mix it with with a wet food.</li>
										</p>
									</div>
								</div>
							</div>

							<div class="development-content item-l">
								<div class="thum">
									<img src="images/bg-dev-5.jpg" alt="Dog">
								</div>
							<div class="content">
									<h3 class="title">Apple Cider Vinegar... <br />Amazing remedies..!!</h3>
									<div class="dev-content">
										<p>Apple cider vinegar has been used for centuries for a whole number of things. From cleaning wounds, getting rid of mould, helping improve your gut health and also for benefiting animals! Used as a folk remedy for both humans and animals, ACV is known for its beneficial properties. Containing antioxidants and polyphenols, ACV has antibacterial and anti-inflammatory properties, too. ACV contains healthful substances such as potassium, proteins, acetic acid and vitamins.  </p>
										<p>Benefits:
											<li>Due to the alkalising effect of ACV, it generally improves health in dogs. Apple cider vinegar may also improve fertility and endurance of working dogs.</li>
											<li>As a result of ACV’s anti-inflammatory properties, it may reduce any irritation or itching caused by fleas, ringworms or other skin allergies, when used as a solution in a bath.</li>
											<li>It is thought to help encourage feathering and growth in birds.</li>
											<li>Apple cider vinegar may also be used as a treatment for bug bites, cleaning and for disinfecting.</li>
											<li>May increase egg production in chickens</li>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="ps-l-2"></div>
						<div class="ps-r-2"></div>
					</div>


					<div id="testimonial-section" class="testimonial-section">
						<div class="container">
							<div class="regular slider">
								<div class="testimonial-item">
									<div class="thumb">
										<img width="120" height="120" src="images/event.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> </div>
									<div class="desc">
										<p>We provide a way to connect with nearby Shelters and Doctors. Help a life so that they can live better.</p>
									</div>
									<a class="title" href="#">
										<h2>Paw care</h2>
									</a>
									<span class="countries">India</span>
									

								</div>

								<div class="testimonial-item">
									<div class="thumb">
										<img width="120" height="120" src="images/event.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" /> </div>
									<div class="desc">
										<p>We provide a way to connect with nearby Shelters and Doctors. Help a life so that they can live better.</p>
									</div>
									<a class="title" href="#">
										<h2>Paw Care</h2>
									</a>
									<span class="countries">India</span>

								</div>

							</div>
							<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".regular").slick({
										dots: false,
										infinite: true,
										slidesToShow: 1,
										slidesToScroll: 1,
										autoplay: false,
										autoplaySpeed: 2000,
										prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left"></i></button>',
										nextArrow: '<button class="slick-next" aria-label="Nexts" type="button"><i class="fa fa-chevron-right"></i></button>'
									});

								});
							</script>
						</div>
					</div>

					<div id="contact-section" class="contact-section" style="background: url('images/contact-bg.png');">
						<div class="container">
							<div class="contact-content">
								<div class="contact-title">
									Want to know more? </div>

								<div class="contact-desc">
									<p>Just Get in Touch with us <br />and we will help you out</p>
								</div>

								<div class="contact-form">
									<div role="form" class="wpcf7" id="wpcf7-f75-o1" lang="en-US" dir="ltr">
										<div class="screen-reader-response"></div>
										<form class="wpcf7-form" action="" method="POST">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-6">
													<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your Name" /></span>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Your Email" /></span>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-6">
													<span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Your Phone No." maxlength="10" minlength="10" /></span>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Type Your Message"></textarea></span>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
													<input type="submit" value="Contact Us" name="submit" class="wpcf7-form-control wpcf7-submit" />
												</div>
											</div>
											<div class="wpcf7-response-output wpcf7-display-none"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
		<!-- End main-->
		<footer id="colophon" class="footer">

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 main-footer">
							<div class="menu-footer">
								<div class="menu-main-menu-container">
									<ul id="menu-main-menu-1" class="menu">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-25"><a href="index.php">Home</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183"><a href="#about-section">About Us</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-182"><a href="../Project/doctor.php">Doctors</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-181"><a href="../Project/shelter.php">Shelter</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-180"><a href="#contact-section">Contact</a></li>
									</ul>
								</div>
							</div>

							<div class="bottom-footer text-center">
								<p>(C) All Rights Reserved | Developer: Shreya Singh
							<div class="bottom-footer social-footer">
								<ul>
									<li><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-google-plus-official"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End footer -->
		</footer>
		<!-- End colophon -->
		<div class="backtotop"><i class="fa fa-angle-up"></i></div>
	</div>
	
						<div class="new-btn" style="text-align:right; margin: 5px;">
							<button ><a href="Admin/admin_login.php">Admin Login</a></button>
						</div>

	<!-- End page-->
	<script type='text/javascript' src='bootstrap-3.3.7/js/slick.min.js'></script>
	<script type='text/javascript' src='bootstrap-3.3.7/js/default.js'></script>
	<script type='text/javascript' src='bootstrap-3.3.7/js/template.min.js'></script>
</body>

</html> 