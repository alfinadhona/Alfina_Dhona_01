<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SAVORY</title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?= base_url('assets')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	 rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	 rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="<?= base_url('assets')?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?= base_url('assets')?>/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">SAVORY</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">Reservation</a>
					</li>
					<!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li> -->
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
					<!-- <li class="nav-item">
              <a class="nav-item nav-link" href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a>
            </li> -->
				</ul>
			</div>
		</div>
	</nav>

	<header class="masthead text-center text-white d-flex">
		<div class="container my-auto">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<h1 class="text-uppercase">
						<strong>S A V O R Y</strong>
					</h1>
					<hr>
				</div>
				<div class="col-lg-8 mx-auto">
					<p class="text-faded mb-5">Since 2014 <br>
					</p>
					<!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
				</div>
			</div>
		</div>
	</header>

	<section class="bg-primary" id="about">
		<div class="container">
			<h1>RESERVATION</h1>
			<br>
			<br>
			<br>
			<form action="<?= base_url('user/inputUser') ?>" method="POST">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name">
					</div>
				</div>
				<!-- <div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Person</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="Person" name="person">
					</div>
				</div> -->
				<div class="form-group row">
					<label for="inputPassword4" class="col-sm-2 col-form-label">Date and Time</label>
					<div class="col-sm-10">
						<input type="datetime-local" class="form-control" id="inputPassword3" placeholder="Date and Time" value="2019-01-1500:00"
						 name="datetime">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword4" class="col-sm-2 col-form-label">Table</label>
					<div class="col-sm-10">
						<select class="form-control" id="exampleFormControlSelect1" name="id_meja">
							<option>1 (2 person)</option>
							<option>2 (2 person)</option>
							<option>3 (4 person)</option>
							<option>4 (4 person)</option>
							<option>5 (6 person)</option>
							<option>6 (6 person)</option>
						</select>
					</div>

					<div class="form-group row">
						<div class="mb-4">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Reserve Now</button>
						</div>
					</div>
			</form>
			<!-- <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
		</div>
		</div>
		</div>
	</section>

	<section class="p-0" id="portfolio">
		<div class="container-fluid p-0">
			<div class="row no-gutters popup-gallery">
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/7.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/7.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/8.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/8.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/9.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/9.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/10.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/10.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/11.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/11.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/12.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/12.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/13.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/13.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/14.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/14.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/15.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/15.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/20.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/20.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/17.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/17.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/24.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/24.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/31.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/31.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/26.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/26.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/28.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/28.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/27.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/27.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/24.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/24.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/30.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/30.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/21.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/21.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/22.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/22.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/23.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/23.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/34.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/34.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/32.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/32.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/33.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/33.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/37.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/37.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/35.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/35.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="<?= base_url('assets')?>/img/portfolio/fullsize/36.jpg">
						<img class="img-fluid" src="<?= base_url('assets')?>/img/portfolio/thumbnails/36.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-dark text-white">
		<div class="container text-center">
			<h1><b>Opening Hours</b></h1>
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="w3-col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
  </div>
</div>
			</div>
			</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="my-4">
					<p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we
						will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center">
					<i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
					<p>123-456-6789</p>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
					<p>
						<a href="mailto:your-email@your-domain.com">savory@hitmeup.com</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link" href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a>
		</div>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="<?= base_url('assets')?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets')?>/vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="<?= base_url('assets')?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="<?= base_url('assets')?>/js/creative.min.js"></script>

</body>

</html>
