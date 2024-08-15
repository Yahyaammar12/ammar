<?php
session_start();
if (isset($_SESSION['last_name'])) {
    // If not logged in, redirect to the login page
	header('Location: /tpweb/dashboard1/index-job-seeker.html');
    exit;
}else if (isset($_SESSION['first_name'])) {
    // If not logged in, redirect to the login page
	header('Location: /tpweb/dashboard1/index-worker-seeker.html');
    exit;
} ?>
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
        <title>Ammar</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/logo.png">
		
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
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
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


									<a href="index.html"><img src="./img/logo.png" alt="" style="height: 5vh;">
									</a>
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
											<li><a href="index.html">electro menager <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li >
														<li><a href="./petit.html">petit electro </a> </li>
													
														<li >
															<li><a href="./grand.html">grand electro </a> </li>
														
														<li >
												</ul>
											</li>
											<li><a href="#">meubles <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="./category.html">chaise plastique </a> </li>
													
													
													<li >
														<li><a href="./salon plastique.html">salon plastique </a> </li>
													
													<li >
														<li >
															<li><a href="./chambre.html">chambre a coucher </a> </li>
														
														<li >
													 
													<li >
														<li><a href="./salon plastique.html">burautique </a> </li>
													
													<li >
													</ul>
											</li>
											<li><a href="contact.html">Contact Us</a></li>
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
			
  <div class="modal fade" id="modal-job-seeker" >  
    <div class="modal-dialog">   
      <div class="modal-content">
      
         <div class="modal-header" style="background-color: #f2fcf9;">
        <h5 class="modal-title" id="staticBackdropLabel">Please sign this form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
        <form  action="./formulaireworker.php" method="post" class="container" id="form-job-seeker" enctype="multipart/form-data" > 
          <div class="form-row">
            <div class="col-md-4 mb-3">
              
              <div class="form-floating">
               
              <input type="text" name="first_name" class="form-control" id="first-name-job-seeker" placeholder="first_name" required>
              <label for="first-name-job-seeker" style="color: black;">First name</label>
              </div>
            </div> 
            <div class="col-md-4 mb-3">
              
              <div class="form-floating">
               
              <input type="text" name="last_name"  class="form-control" id="last-name-job-seeker" placeholder="last_name" required>
              <label for="last-name-job-seeker" style="color: black;">Last name</label>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              
              <div class="form-floating">
               
              <input  type="text" name="phone_number"  class="form-control" id="phone-number-job-seeker" placeholder="phone_number" pattern="\d{8}" required>
              <label for="phone-number-job-seeker" style="color: black;">Phone number</label>
              </div>
            </div>
            </div>
          <div class="form-row">
            
            <div class="col-md-6 mb-3">
            <div class="form-floating">
            <input name="city" type="text" class="form-control" id="city-job-seeker" placeholder="city" required>
            <label for="city-job-seeker" style="color: black;">City</label>
            </div>
          </div>
          
           <div class="col-md-12 mb-3">
          <div class="form-floating">
          <input name="email" type="email" class="form-control" id="email-job-seeker" placeholder="email" required>
          <label for="email-job-seeker" style="color: black;">E-mail address</label>
          </div></div>
          <div class="col-md-12 mb-3">
          <div class="form-floating">
          <input name="password" type="password" class="form-control" id="password-job-seeker" placeholder="password" required>
          <label for="password" style="color: black;">Password</label>
          </div>
        </div> 
        <div class="col-md-12 mb-3">
          <div class="form-container">
          <input name="valid-password" type="password" class="form-control" id="valid-password-job-seeker" placeholder="valid-password" required>
          <label for="valid-password" style="color: black;">valider Password</label>
          </div>
        </div>
          <div class="col-md-12 mb-3">
          <div class="form-container">
            <label for="cin">Please drop your CIN image in PDF format</label>
            <input name="cin" type="file" class="form-control" id="cin-job-seeker" accept=".pdf" required>
            <small id="cin-job-seeker" class="form-text text-muted">Please upload your CIN image in PDF format, with a maximum file size of 2MB.</small>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="form-container">
            <label for="cv">If you a CV Please drop it in PDF format</label>
            <input name="cv" type="file" class="form-control" id="cv-job-seeker" accept=".pdf" >
            <small id="cv-job-seeker" class="form-text text-muted">Please upload your CV in PDF format, with a maximum file size of 2MB.</small>
          </div> 
        </div>
          
          </div>
          <div class="container">
              <div class="text-right">
            
               <button name="registrer" class="btn btn-outline-primary mt-3 " >Register</button>
             
              </div>
            </div>
          </form>
        </div>  
        <div id="alertContainer-job-seeker"></div>
        
        </div>
        
      </div>
      </div>
    
  <!-- End Header Area -->
  <div class="modal fade" id="modal-worker-seeker" >  
    <div class="modal-dialog">   
      <div class="modal-content">
      
         <div class="modal-header" style="background-color: #f2fcf9;">
        <h5 class="modal-title" id="staticBackdropLabel">Please sign this form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
        <form action="./formulaireseeker.php"  method="post" class="container" id="form-worker-seeker" enctype="multipart/form-data"  > 
          <div class="form-row">
            <div class="col-md-4 mb-3">
            
              <div class="form-floating">
               
                <input type="text" name="full_name" class="form-control" id="full-name-job-seeker" placeholder="full_name" required>
                <label for="full-name-job-seeker" style="color: black;">Full name</label>
              </div>
              </div> 
          </div>
          <div class="form-row">

            <div class="col-md-4 mb-3">
            
            <div class="form-floating">
             
              <input type="text" name="manager_first_name" class="form-control" id="manager-first-name" placeholder="manager_first_name" required>
              <label for="manager-first-name" style="color: black;">Manager First name</label>
            </div>
            </div> 

            <div class="col-md-4 mb-3">
            
            <div class="form-floating">
             
              <input type="text" name="manager_last_name"  class="form-control" id="manager-last-name" placeholder="manager_last_name" required>
              <label for="manager-last-name" style="color: black;">Manager Last name</label>
            </div>
            </div>
            <div class="col-md-4 mb-3">
            
            <div class="form-floating">
             
              <input  type="text" name="phone_number"  class="form-control" id="phone-number-worker-seeker" placeholder="phone_number" pattern="\d{8}" required>
              <label for="phone-number-worker-seeker" style="color: black;">Phone number</label>
            </div>
            </div>
          </div>
          <div class="form-row">
            
            <div class="col-md-6 mb-3">
            <div class="form-floating">
            <input name="city" type="text" class="form-control" id="city-worker-seeker" placeholder="city" required>
            <label for="city-worker-seeker" style="color: black;">City</label>
            </div>
          </div>
          
          
          <div class="col-md-12 mb-3">
          <div class="form-floating">
          <input name="email" type="email" class="form-control" id="email-worker-seeker" placeholder="email" required>
          <label for="email-worker-seeker" style="color: black;">E-mail address</label>
          </div></div>
          <div class="col-md-12 mb-3">
          <div class="form-floating">
          <input name="password" type="password" class="form-control" id="password-worker-seeker" placeholder="password" required>
          <label for="password-worker-seeker" style="color: black;">Password</label>
          </div>
        </div> <div class="col-md-12 mb-3">
          <div class="form-floating">
          <input name="valid-password" type="password" class="form-control" id="valid-password-worker-seeker" placeholder="valid-password" required>
          <label for="valid-password" style="color: black;">valider Password</label>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="form-container">
            <label for="cin">Please drop the Manager CIN photo</label>
            <input name="man_cin" type="file" class="form-control" id="cin-worker-seeker" accept=".pdf" required>
            <small id="cin-worker-seeker" class="form-text text-muted">Please upload your CIN in PDF format, with a maximum file size of 2MB.</small>
          </div>
        </div>
          
        </div>
          <!-- Alert for Password Validation -->
          <div id="alertContainer-worker-seeker"></div>
          </div>
          <div class="container">
              <div class="text-right">
            
               <button name="registrer-job-seeker" class="btn btn-outline-primary mt-3 " id="registration-button-job-seeker" >Register</button>
             
              </div>
            </div>
          </form>
        </div>  
        
        
        </div>
        
      </div>
      </div>
    

      <div class="modal fade" id="modal-login" >  
        <div class="modal-dialog mb-5">   
          <div class="modal-content">
          
             <div class="modal-header" style="background-color: #f2fcf9;">
            <h5 class="modal-title" id="staticBackdropLabel">Please login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
            <form  method="post" class="container" id="form-login" enctype="multipart/form-data"> 
              <div class="form-row">
                <div class="col-md-6 mb-3">
                
                <div class="form-floating">
                  <label for="email" style="color: black;">Email</label>
                  <input type="email" name="email" class="form-control" id="email-login" placeholder="email" required>
                  
                </div>
                </div> 
                <div class="col-md-6 mb-3">
                
                <div class="form-floating">
                  <label for="password" style="color: black;">PASSWORD</label>
                  <input type="password" name="password"  class="form-control" id="password-login" placeholder="password" required>
                  
                </div>
                </div>
               
              </div>
              
                
              <label for="job-seeker" class="form-check-label">Vous êtes :</label><br>
                    <div class="form-group form-row">
                        <div class="col-6">
                     
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="seeker-type" id="job-seeker" value="job-seeker" required>
                        <label class="form-check-label" for="job-seeker">searching job</label>
                      </div></div>
                      <div class="col-6 ">

                      &nbsp; <!-- Espacement -->
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="seeker-type" id="worker-seeker" value="worker-seeker" required>
                        <label class="form-check-label" for="work-seeker">searching worker</label>
                      </div>
                    
                  
                </div>
              </div>
            
  
              
              </div>
              <div class="container mb-5">
                  <div class="text-right">
                
                   <button name="login" class="btn btn-outline-primary mt-3 " id="login-button"onclick="loggingin()" >Login</button>
                 
                  </div>
                </div>
              </form>
            </div>  
            
            
            </div>
            
          </div>
          </div>
















			
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



		
		<!--/End Start schedule Area -->



        
		<!-- Start Schedule Area -->
		<section class="schedule mt-5">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="icofont-farmer"></i>
									</div>
									<div class="single-content">
										<h4>Agriculture</h4> <br>
										<p>
                                            The "Agriculture" category covers jobs related to farming, including planting, harvesting, and animal care. Roles include farm workers, technicians, and managers. These jobs are essential for food production and require physical stamina and farming knowledge.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<h4>Healthcare</h4> <br>
										<p>
                                            The "Healthcare" category includes professions focused on maintaining and restoring health. This encompasses doctors, nurses, therapists, and support staff who provide medical care in various specialties. Healthcare workers diagnose illnesses, treat injuries, and offer preventive care in hospitals, clinics, and other settings. Careers in healthcare demand compassion, communication skills, and specialized training.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-truck"></i>
									</div>
									<div class="single-content " >
										<h4>Trnsportation</h4> <br>
                                        <p>
                                            The "Healthcare" category includes professions focused on maintaining and restoring health. This encompasses doctors, nurses, therapists, and support staff who provide medical care in various specialties. Healthcare workers diagnose illnesses, treat injuries, and offer preventive care in hospitals, clinics, and other settings. Careers in healthcare demand compassion, communication skills, and specialized training.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->
        <!-- Start Schedule Area -->
		<section class="schedule mt-5" >
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="icofont-book-alt"></i>
									</div>
									<div class="single-content">
										<h4>adminstration</h4> <br>
										<p>
                                            The "Administration" category covers roles that support daily business operations, like administrative assistants and office managers. These professionals handle tasks such as scheduling, record-keeping, and office management, ensuring smooth business functioning.</p>
									</div>
								</div>
							</div>
						</div>
						
							
						
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->
		
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