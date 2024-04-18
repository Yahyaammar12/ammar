<!doctype html>
<html class="no-js" lang="zxx" >
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>خدمة</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@400..700&display=swap" rel="stylesheet">
		
    </head>
    <body>
	
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
		
  
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Header Area -->
		<header class="header" >
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="index.html">Home</a>
												
													
												
											</li>
											<li><a href="/#">Categories </a></li>
											<li><a href="../projetWeb 1/projects.html">Projects </a></li>
											
											
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>









		<script>

			function openModal(userType) {
				// Ouvrir le modal
				$('#modal-login').modal('show');
				
				// Vérifier le type d'utilisateur et cocher le bouton radio correspondant
				if (userType === 'job-seeker') {
					$('#job-seeker').prop('checked', true);
				} else if (userType === 'worker-seeker') {
					$('#worker-seeker').prop('checked', true);
				}
				
			}
		  
		  </script>  
		  
		  <script>
			
				// Define the loggingin() function
				function loggingin() {
					// Get the selected user type
					var userType = $('input[name="seeker-type"]:checked').val();
		
					// Set the form action based on the selected user type
					if (userType === 'job-seeker') {

						$('#form-login').attr('action', 'login-job-seeker.php');
					} else if (userType === 'worker-seeker') {
						$('#form-login').attr('action', 'login-worker-seeker.php');
					}
		
					// Submit the form
					$('#form-login').submit();
				}
			
		</script>
		
		


		










			  <script>
				// Récupérer le paramètre d'erreur depuis l'URL
				const urlParams = new URLSearchParams(window.location.search);
				const error = urlParams.get('error');
		
				// Vérifier s'il y a une erreur et afficher l'alerte correspondante
				if (error === 'email_in_use') {
					alert('L\'email est déjà utilisé. Veuillez en choisir un autre.');
		
					// Supprimer le paramètre d'erreur de l'URL sans recharger la page
					const newUrl = window.location.pathname;
					window.history.replaceState({}, document.title, newUrl);
				}
			</script>
			
			
			 <?php include 'modal.html'; ?>
		
				<script>
			
$(document).ready(function() {
    $('#form-job-seeker').submit(function(event) {
        event.preventDefault();
        var password = $('#password-job-seeker').val();
        var validpassword = $('#valid-password-job-seeker').val();
        // Supprimer tout contenu précédent
        $('#alertContainer-job-seeker').empty();
        if (password.length < 8) {
            // Ajouter l'alerte pour la longueur du mot de passe
            $('#alertContainer-job-seeker').append('<div class="alert alert-danger" role="alert">Le mot de passe doit avoir au moins 8 caractères</div>');
            if (password != validpassword) {
                // Ajouter l'alerte pour la non-correspondance des mots de passe
                $('#alertContainer-job-seeker').append('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>');
            }
        } else {
            if (password != validpassword) {
                // Ajouter l'alerte pour la non-correspondance des mots de passe
                $('#alertContainer-job-seeker').append('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>');
            } else {
                // Soumettre le formulaire si les mots de passe sont valides
                this.submit();
            }
        }
    });
});

					</script>
						<script>
			
							$(document).ready(function() {
								$('#form-worker-seeker').submit(function(event) {
									event.preventDefault();
									var password1 = $('#password-worker-seeker').val();
									var validpassword1 = $('#valid-password-worker-seeker').val();
									// Supprimer tout contenu précédent
									$('#alertContainer-worker-seeker').empty();
									if (password1.length < 8) {
										// Ajouter l'alerte pour la longueur du mot de passe
										$('#alertContainer-worker-seeker').append('<div class="alert alert-danger" role="alert">Le mot de passe doit avoir au moins 8 caractères</div>');
										if (password1 != validpassword1) {
											// Ajouter l'alerte pour la non-correspondance des mots de passe
											$('#alertContainer-worker-seeker').append('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>');
										}
									} else {
										if (password1 != validpassword1) {
											// Ajouter l'alerte pour la non-correspondance des mots de passe
											$('#alertContainer-worker-seeker').append('<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>');
										} else {
											// Soumettre le formulaire si les mots de passe sont valides
											this.submit();
										}
									}
								});
							});
							
												</script>



		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text m-5">
									<h1>Connecting talents with opportunities, bridging dreams with realities. Welcome to  <span class="khedma-word">خدمة</span>, where every service finds its match. <span>Trust!</span></h1>
									<p> </p>
									<div class="button">
										<a href="#" class="btn"onclick="openModal('worker-seeker')">Find a Worker</a>
										<a href="#" class="btn primary"onclick="openModal('job-seeker')">Find a Job</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text m-5">
									<h1>Empowering connections, transforming services. Welcome to  <span class="khedma-word">خدمة</span>  Services That You Can <span>Trust!</span></h1>
									<p> </p>
									<div class="button">
										<a href="#" class="btn"onclick="openModal('worker-seeker')">Find a Worker</a>
										<a href="#" class="btn primary"onclick="openModal('job-seeker')">Find a Job</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text m-5">
									<h1>We Provide <span>Many</span> Services That You Can <span>Trust!</span></h1>
									<p></p>
									<div class="button">
										<a href="#" class="btn"onclick="openModal('worker-seeker')">Find a Worker</a>
										<a href="#" class="btn primary"onclick="openModal('job-seeker')">Find a Job</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Lorem Amet</span>
										<h4>Freelancers</h4>
										<p>Explore opportunities to join our vibrant community of freelancers, where you can offer your services and connect with project owners seeking your skills .</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-plugin"></i>

									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Basic Jobs</h4>
										<p>Whether you're looking to join as a service provider or hire professionals for your everyday needs, our platform makes to get the job done.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Donec luctus</span>
										<h4>Projects</h4>
										<p>Join our platform to discover skilled professionals for your projects, or present your own projects and find the perfect match among our talented freelancers.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>In our platform's embrace, dreams take flight,
								Seekers find purpose, employers delight.</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-search-job"></i>
							</div>
							<h3>Search</h3>
							<p></p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ui-contact-list"></i>
							</div>
							<h3>Contact</h3>
							<p></p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-ui-love-add"></i>
							</div>
							<h3>Give Your Feedback</h3>
							<p></p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Employers</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-money-bag"></i>
							<div class="content">
								
									<span class="counter">5000</span><span>DT</span>
								
								<p>Paid Invoices</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-money"></i>
							<div class="content">
								<span class="counter">4379</span><span>DT</span>
								<p>Paid to Workers</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-ui-rate-add"></i>
							<div class="content">
								<span><span class="counter">99</span>%</span>
								<p>Customer Satisfaction Rate</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Empowering Connections: Discover Our Comprehensive Services</h2>
							<img src="img/section-img.png" alt="#">
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p> Welcome to <span class="khedma-word">خدمة</span> - your destination for seamless connections between job seekers and employers. Whether you're a professional seeking new opportunities or a company searching for top talent, our platform provides the perfect space to bridge the gap. Join us as we navigate the realms of employment together, creating pathways to success and fulfillment, no matter where you are in your journey.</p>
							<p> </p>
							
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right" >
							<div class="video-image" >
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="/img/video.mp4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		
		
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Welcome to our platform, where we provide a variety of services tailored to meet the needs of both job seekers and employers.</h2>
							<img src="img/section-img.png" alt="#">
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont">
								<img class="" src="./img/recruitment.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							
							<h4><a href="service-details.html"> Job Matching</a></h4>
							<p> </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont">
								<img class="" src="./img/freelance-work.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							<h4><a href="service-details.html"> Freelance Services</a></h4>
							<p> </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont">
								<img class="" src="./img/creative-thinking.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							<h4><a href="service-details.html">Skill Development </a></h4>
							<p> </p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont">
								<img class="" src="./img/resume.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							<h4><a href="service-details.html">Resume Building</a></h4>
							<p></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont">
								<img class="" src="./img/networking.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							<h4>
								<a href="service-details.html">Networking Events</a></h4>
							<p></p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12" >
						<!-- Start Single Service -->
						<div class="single-service" >
							<i class="icofont">
								<img class="" src="./img/need-assessment.png" style="width: 3rem; height: 3rem;" alt="Description">
							</i>
							<h4><a href="https://www.flaticon.com/free-icons/career" title="career icons">Career Counseling</a>
								<a href="service-details.html">Career Counseling</a></h4>
							<p></p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		
		
		
		<!-- Start clients -->
		<div class="clients overlay mb-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="./img/client11111.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client222.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client333.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client4444.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client55.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client11111.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client222.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client333.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="./img/client4444.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>At <span class="khedma-word">خدمة</span>, we're dedicated to connecting people and businesses seamlessly. Our platform simplifies the job search process and empowers businesses to find the right talent. Join us in shaping the future of work.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-linkedin"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Categories</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Projects</a></li>	
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">larma.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		






		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>






		
    </body>
</html>