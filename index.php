<?php
include "header.php";
?>


<!-- Start header -->
<header class="top-navbar">
	<?php
	include "nav.php";
	?>
</header>
<!-- End header -->

<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-center">
			<img src="images/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php"> See All Menu </a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-center">
			<img src="images/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Let Make Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-center">
			<img src="images/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="gallery">See Our Gallery</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/about-img.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Yamifood Restaurant</span></h1>
					<h4>Little Story</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-left">
				<p class="lead ">
					" If you're not the one cooking, stay out of the way and compliment the chef. "
				</p>
				<span class="lead">Michael Strahan</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Special Menu</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<?php
						$sql = "SELECT * FROM  category";
						$result = mysqli_query($connection, $sql);
						if (mysqli_num_rows($result) > 0) {
							foreach ($result as $r) {
						?>
								<button data-filter=".<?php echo $r['id'] ?>"><?php echo $r['name'] ?></button>
						<?php
							}
						}
						?>

					</div>
				</div>
			</div>
		</div>

		<div class="row special-list">

			<?php
			$sql = "SELECT * FROM  menu ORDER BY id DESC";
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) > 0) {
				foreach ($result as $r) {
					$category = $r['category'];
					$sql2 = "SELECT * FROM  category WHERE name='$category'";
					$resultr = mysqli_query($connection, $sql2);
					if (mysqli_num_rows($resultr) > 0) {
						foreach ($resultr as $rr) {
							$id = $rr;
			?>
							<div class="col-lg-4 col-md-6 special-grid <?php echo $rr['id'] ?>">
								<div class="gallery-single fix">
									<img style="height: 300px;" src="system/upload/<?php echo $r['feature_image'] ?>" class="img-fluid" alt="Image">
									<div class="why-text">
										<h4> <?php echo $r['name'] ?> </h4>
										<p> <?php echo $r['description'] ?> </p>
										<h5> <?php echo $r['price'] ?> </h5>
									</div>
								</div>
							</div>
			<?php
						}
					}
				}
			}
			?>





		</div>
	</div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->

<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
							<h6 class="text-dark m-0">Web Developer</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
							<h6 class="text-dark m-0">Web Designer</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
							<h6 class="text-dark m-0">Seo Analyst</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Customer Reviews -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-volume-control-phone"></i>
				<div class="overflow-hidden">
					<h4>Phone</h4>
					<p class="lead">
						+01 123-456-4590
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-envelope"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead">
						yourmail@gmail.com
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-map-marker"></i>
				<div class="overflow-hidden">
					<h4>Location</h4>
					<p class="lead">
						800, Lorem Street, US
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact info -->

<!-- Start Footer -->
<footer class="footer-area bg-f">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3>About Us</h3>
				<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Opening hours</h3>
				<p><span class="text-color">Monday: </span>Closed</p>
				<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
				<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Contact information</h3>
				<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
				<p class="lead"><a href="#">+01 2000 800 9999</a></p>
				<p><a href="#"> info@admin.com</a></p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h3>Subscribe</h3>
				<div class="subscribe_form">
					<form class="subscribe_form">
						<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
						<button type="submit" class="submit">SUBSCRIBE</button>
						<div class="clearfix"></div>
					</form>
				</div>
				<ul class="list-inline f-social">
					<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By :
						<a href="https://html.design/">html design</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- End Footer -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<?php
include "footer.php";
?>