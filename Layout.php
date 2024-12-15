<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FancyShop</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
	<link rel="stylesheet" href="./css/animate.css" />
	<link rel="stylesheet" href="./css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="./css/owl.carousel.min.css" />
	<link rel="stylesheet" href="./css/meanmenu.min.css" />
	<link rel="stylesheet" href="./css/venobox.css" />
	<link rel="stylesheet" href="./css/font-awesome.css" />
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="./style.css" />
	<link rel="stylesheet" href="./css/responsive.css" />
</head>

<body>

	<!--  Preloader  -->
	<div class="preloader">
		<div class="status-mes">
			<div class="bigSqr">
				<div class="square first"></div>
				<div class="square second"></div>
				<div class="square third"></div>
				<div class="square fourth"></div>
			</div>
			<div class="text_loading text-center">loading</div>
		</div>
	</div>

	<div class="header_btm_area">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<a class="logo" href="index.html"> <img alt="" src="./image/logo.png"></a>
				</div><!--  End Col -->

				<div class="col-xs-12 col-sm-12 col-md-9 text-right">
					<div class="menu_wrap">
						<div class="main-menu">
							<nav>
								<ul>
									<li><a href="ProductPage.php">Home</a>
									</li>
		
									<li><a href="OrderHistoryPage.php">History</a>
									</li>

									<li><a href="Contact.php">Contact</a>
									</li>

									<li><a href="ProfilePage.php">Profile</a>
									</li>

									<li><a href="LogoutFunct.php">Logout</a>
									</li>
								</ul>
							</nav>
						</div> <!--  End Main Menu -->

						<div class="right_menu">
							<ul class="nav justify-content-end">
								<li>
									<div class="search_icon">
										<i class="fa fa-search search_btn" aria-hidden="true"></i>
										<div class="search-box">
											<form action="#" method="get">
												<div class="input-group">
													<input type="text" class="form-control"
														placeholder="enter keyword" />
													<button type="submit" class="btn btn-default"><i
															class="fa fa-search"></i></button>
												</div>
											</form>
										</div>
									</div>
								</li>

								<li>
									<div class="cart_menu_area">
										<div class="cart_icon">
											<a href="CartPage.php"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
										</div>
									</div>
								</li>						
							</ul>
						</div>
					</div>
				</div><!--  End Col -->
			</div>
		</div>
	</div>
	</header>
	<!--  End Header  -->


    <main>
        <?php echo $content; ?>
    </main>



	<!-- Testimonials Area -->
	<section id="testimonials" class="testimonials_area section_padding"
		style="background: url(./image/testimonial-bg.jpg); background-size: cover; background-attachment: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="testimonial-slider" class="owl-carousel">
						<div class="testimonial">
							<div class="pic">
								<img src="./image/testimonial/1.jpg" alt="">
							</div>
							<div class="testimonial-content">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Vivamus sed accumsan diam. Suspendisse molestie nibh at
									tempor mollis. Integer aliquet facilisis
								</p>
								<h3 class="testimonial-title">williamson</h3>
								<small class="post"> - Themesvila</small>
							</div>
						</div>

						<div class="testimonial">
							<div class="pic">
								<img src="./image/testimonial/2.jpg" alt="">
							</div>
							<div class="testimonial-content">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Vivamus sed accumsan diam. Suspendisse molestie nibh at
									tempor mollis. Integer aliquet facilisis
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<small class="post"> - Themesvila</small>
							</div>
						</div>


						<div class="testimonial">
							<div class="pic">
								<img src="./image/testimonial/3.jpg" alt="">
							</div>
							<div class="testimonial-content">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Vivamus sed accumsan diam. Suspendisse molestie nibh at
									tempor mollis. Integer aliquet facilisis
								</p>
								<h3 class="testimonial-title">williamson</h3>
								<small class="post"> - Themesvila</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- End STestimonials Area -->

	<!--  Blog -->
	<section id="blog_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">
						<h2>latest <span>Blog</span></h2>
						<div class="divider"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="./image/blog/1.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 25</div>
								<div class="bd_month">Aug</div>
							</div>
						</div>

						<div class="blog_content">
							<h4 class="post_title"><a href="#">Integer euismod dui non auctor</a> </h4>
							<ul class="post-bar">
								<li><i class="fa fa-user"></i> Admin</li>
								<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
								<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
							</ul>
							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="./image/blog/2.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 25</div>
								<div class="bd_month">Aug</div>
							</div>
						</div>

						<div class="blog_content">
							<h4 class="post_title"><a href="#">Integer tempor urna a condimentum</a> </h4>
							<ul class="post-bar">
								<li><i class="fa fa-user"></i> Admin</li>
								<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
								<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
							</ul>

							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="./image/blog/3.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 25</div>
								<div class="bd_month">Aug</div>
							</div>
						</div>

						<div class="blog_content">

							<h4 class="post_title"><a href="#">Vivamus velit est iaculis id tempus</a> </h4>
							<ul class="post-bar">
								<li><i class="fa fa-user"></i> Admin</li>
								<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
								<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
							</ul>
							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

			</div>
		</div>
	</section>
	<!--  Blog end -->


	<!--  Process -->
	<section class="process_area section_padding gradient_section">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="fa fa-truck"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>free shipping</h3>
							<p>Lorem ipsum dummy</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="fa fa-money"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Cash On Delivery</h3>
							<p>Lorem ipsum dummy</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="fa fa-headphones "></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Support 24/7</h3>
							<p>Lorem ipsum dummy</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="fa fa-clock-o"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Opening All Week</h3>
							<p>Lorem ipsum dummy</p>
						</div>
					</div>
				</div> <!-- End Col -->

			</div>
		</div>
	</section>
	<!--  End Process -->

	<!--  Brand -->
	<section id="brand_area" class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="brand_slide owl-carousel">
						<div class="item text-center"> <a href="#"><img src="./image/brand/1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/2.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/3.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/4.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/5.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/6.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/7.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/8.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="./image/brand/9.png" alt=""
									class="img-responsive" /></a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--   Brand end  -->

	<!--  FOOTER START  -->
	<footer class="footer_area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="single_ftr">
						<h4 class="sf_title">Contacts</h4>
						<ul>
							<li>Trinh Van Bo, Nam Tu Liem, Ha Noi</li>
							<li>032 960 5828</li>
							<li>btecfpt@fe.edu.vn</li>
						</ul>
					</div>
				</div> <!--  End Col -->

				<div class="col-md-3 col-sm-6">
					<div class="single_ftr">
						<h4 class="sf_title">Information</h4>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div> <!--  End Col -->

				<div class="col-md-3 col-sm-6">
					<div class="single_ftr">
						<h4 class="sf_title">Services</h4>
						<ul>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
						</ul>
					</div>
				</div> <!--  End Col -->

				<div class="col-md-3 col-sm-6">
					<div class="single_ftr">
						<h4 class="sf_title">Newsletter</h4>
						<div class="newsletter_form">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have
							</p>
							<form method="post" class="form-inline">
								<input name="EMAIL" id="email" placeholder="Enter Your Email" class="form-control"
									type="email">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div> <!--  End Col -->

			</div>
		</div>


		<div class="ftr_btm_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="ftr_social_icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<p class="copyright_text text-center">&copy; 2024 FancyShop</p>
					</div>

					<div class="col-sm-4">
						<div class="payment_mthd_icon text-right">
							<ul>
								<li><i class="fa fa-cc-paypal"></i></li>
								<li><i class="fa fa-cc-visa"></i></li>
								<li><i class="fa fa-cc-discover"></i></li>
								<li><i class="fa fa-cc-mastercard"></i></li>
								<li><i class="fa fa-cc-amex"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--  FOOTER END  -->

	<script src="./js/vendor/jquery-1.12.4.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.meanmenu.min.js"></script>
	<script src="./js/jquery.mixitup.js"></script>
	<script src="./js/jquery.counterup.min.js"></script>
	<script src="./js/waypoints.min.js"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/venobox.min.js"></script>
	<script src="./js/owl.carousel.min.js"></script>
	<script src="./js/simplePlayer.js"></script>
	<script src="./js/main.js"></script>
</body>

</html>