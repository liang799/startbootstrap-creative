<?php
	require_once "include/index.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!--?php include "include/bootstrap.php" //bootstrap stylesheets and scripts ?-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TREE.com</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <style>
			.bg-dark {
				background-color: black !important;
			}
			header.masthead {
			  padding-top: 10rem;
			  padding-bottom: calc(10rem - 4.5rem);
			  background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("assets/img/bg.jpg");
			  background-position: center;
			  background-repeat: no-repeat;
			  background-attachment: scroll;
			  background-size: cover;
			}
			.btn-sm {
				font-size: 0.85rem;
				font-weight: 700;
				border: none;
				border-radius: 10rem;
			}

			#mainNav .navbar-nav .nav-item:last-child .nav-link {
				padding:0px 16px;
			}
			.paypal-button-text{
				color:white!important;
			}
                        .rating {
                            display: inline-block;
                            position: relative;
                            height: 50px;
                            line-height: 50px;
                            font-size: 50px;
                        }

                        .rating label {
                          position: absolute;
                          top: 0;
                          left: 0;
                          height: 100%;
                          cursor: pointer;
                        }

                        .rating label:last-child {
                          position: static;
                        }

                        .rating label:nth-child(1) {
                          z-index: 5;
                        }

                        .rating label:nth-child(2) {
                          z-index: 4;
                        }

                        .rating label:nth-child(3) {
                          z-index: 3;
                        }

                        .rating label:nth-child(4) {
                          z-index: 2;
                        }

                        .rating label:nth-child(5) {
                          z-index: 1;
                        }

                        .rating label input {
                          position: absolute;
                          top: 0;
                          left: 0;
                          opacity: 0;
                        }

                        .rating label .icon {
                          float: left;
                          color: transparent;
                        }

                        .rating label:last-child .icon {
                          color: #000;
                        }

                        .rating:not(:hover) label input:checked ~ .icon,
                        .rating:hover label:hover input ~ .icon {
                          color: #78BE21;
                        }

                        .rating label input:focus:not(:checked) ~ .icon:last-child {
                          color: #000;
                          text-shadow: 0 0 5px #09f;
                        }
                        a.small:hover{
                            color:#f4623a;
                        }
                        #portfolio .container-fluid .portfolio-box .portfolio-box-caption, #portfolio .container-sm .portfolio-box .portfolio-box-caption, #portfolio .container-md .portfolio-box .portfolio-box-caption, #portfolio .container-lg .portfolio-box .portfolio-box-caption, #portfolio .container-xl .portfolio-box .portfolio-box-caption, #portfolio .container-xxl .portfolio-box .portfolio-box-caption {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  height: 100%;
  position: absolute;
  bottom: 0;
  text-align: center;
  opacity: 0;
  color: #fff;
  background: rgba(244, 98, 58, 0.9);
  transition: opacity 0.25s ease;
  text-align: center;
}
 
			<?php 
				if (!$contact_success) {
					echo '
					#submitSuccessMessage {
						visibility: hidden;
					}
					';
				} else {
					echo '
					#submitButton {
						visibility: hidden;
					}
					';
				}
			?>
		</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">TREE.com</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#activity">Activities</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a></li>
                    </ul>                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
        <br>
        <marquee><h1><?php
        
        $sql="SELECT * FROM announcements ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
	$queryResult = mysqli_fetch_assoc($result);
        
        if (isset($queryResult)) {
         echo $queryResult['content'];
        }
        
        ?></h1></marquee>
        </div>
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">TREE Revitalizes Earth's Environment</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
							TREE is a non-profit organisation that is committed to
							making a world a better place by gathering volunteers to plant more trees
							and raising awareness of deforestation
						</p>
                        <a class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#registerModal">Join Now</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About Us!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">
							TREE was founded on February 2022 not in a Garage, but at an institution called
							Singapore Polytechnic. As such, it is currently headquartered in Singapore Polytechnic.
							We are committed to plant more trees as the deforestation rate is currently at 
							10 million hectares per year, which is very alarming. We also wish to spread awareness about
							the consequences of deforestation. We are currently actively looking for members.
						</p>
                       
                    </div> 
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-6">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BN9qnvRpTos"></iframe>
                        </div>
                        <div class="col-lg-6">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.29856015750988!2d103.77903855730713!3d1.3090930241409915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf15437f759d83d9d!2zMcKwMTgnMzMuMSJOIDEwM8KwNDYnNDQuNSJF!5e0!3m2!1sen!2ssg!4v1643702434856!5m2!1sen!2ssg" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>           
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-flower1 fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Join Our Programs</h3>
                            <p class="text-muted mb-0">Here at TREE, we collaborate with other organisations to come up with projects to raise awareness about environmental sustainability. Join Us!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-megaphone-fill fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">Learn about our latest activities in our announcements and share them on social media!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-chat-right-text fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Access our forums</h3>
                            <p class="text-muted mb-0">Share and interact with other great members in our community on how to save our environment!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Donate To Our Cause</h3>
                            <p class="text-muted mb-0">Our organisation is non-profit. Your donations help us to fund our projects to we can present more opportunities to the public!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/joseph.jpg" title="Joseph<br>CSS CODER<br>p2032120">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/joseph.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">P2032120</div>
                                <div class="project-name">Joseph Loh</div>
                                <div class="project-category text-white-50">CSS Child</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/tianpok.jpeg" title="Tian Pok<br>Server Side Savant<br>p2032203">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/tianpok.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">P2032203</div>
                                <div class="project-name">Neoh Tian Pok</div>
                                <div class="project-category text-white-50">Server-side Savant</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/boyan.jpeg" title="Boyan<br>Database Developer<br>p2019590">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/boyan.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">P2019590</div>
                                <div class="project-name">Shen BoYan</div>
                                <div class="project-category text-white-50">Database Developer</div>
                            </div>
                        </a>
                    </div>
                    <!-- comment -->
                    <!--maybe rename the projects and change photos to people's portraits-->              
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Become an Honorary Member!</h2>
            <div id="paypal-button-container-P-7YF52428BY641674SMIEMUWI" ></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AebQTHYqSrLkzSBiQeRGNDnx5jxbhSpRGU5-4Ekvi_QLRErQZhD9hezg_MZdMYOoyBJOgo_lpT-wJLt1&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
            <script>
              paypal.Buttons({
                  style: {
                      shape: 'pill',
                      color: 'gold',
                      layout: 'horizontal',
                      label: 'subscribe'
                  },
                  createSubscription: function(data, actions) {
                    return actions.subscription.create({
                      /* Creates the subscription */
                      plan_id: 'P-7YF52428BY641674SMIEMUWI'
                    });
                  },
                  onApprove: function(data, actions) {
                    alert(data.subscriptionID); // You can add optional success message for the subscriber here
                  }
              }).render('#paypal-button-container-P-7YF52428BY641674SMIEMUWI'); // Renders the PayPal button
            </script>
            </div> 
        </section>

        <!--Activity-->
        <section class="page-section" id="activity">
        <div class="container p-3 my-3 text-center" style="width:1060px">
            <h1 class="card-text" >Our Activities!</h1>
            <p class="card-text">Join our wide variety of programs</p>

            <div class="card-vertical ">
                <div class="container text-center">
                    <div class="card" style="width:1000px">
                        <img class="card-img-top" src="assets/img/portfolio/fullsize/treeplanting.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">

                            <h4 class="card-title text-black">Tree Planting</h4>
                            <p class="card-text text-black"> Join Us at our tree planting events every month!</p>
                            <p class="card-text text-black"> CALL US AT 90231253</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinModal">
                                Join Activity!
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="container text-center ">
                    <div class="card" style="width:1000px">
                        <img class="card-img-top" src="assets/img/portfolio/fullsize/beachcleaning.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            
                            <h4 class="card-title">Beach Cleanup</h4>
                            <p class="card-text"> We host beach cleanups every weekend!</p>
                            <p class="card-text"> CALL US AT 90438532</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinModal">
                                Join Activity!
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="container text-center">
                    <div class="card" style="width:1000px">
                        <img class="card-img-top" src="assets/img/portfolio/fullsize/workshop.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            
                            <br>
                            <h4 class="card-title">Environmental Talks and Workshops</h4>
                            <p class="card-text"> We frequently hold talks and workshops to educate the public on how to take better care of the environment</p>
                            <p class="card-text"> CALL US AT 68495435</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinModal">
                                Join Activity!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</section>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Every message is perused by Ranson and replied within a day.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                            <form action="#contact" method="post"> <!--- modern html don't need to self --->
                            <!-- first name input-->
                            <div class="form-floating mb-3">
                                <input type="text" name="first" class="form-control <?php echo (!empty($first_err)) ? 'is-invalid' : ''; ?>" 
                                value="<?php echo $first; ?>" <?php if ($contact_success) echo "disabled" ?> >
                                <label for="first">First name</label>
                                <div class="invalid-feedback" ><?php echo $first_err ?></div>
                            </div>
                            <!-- last name input-->
                            <div class="form-floating mb-3">
                                <input type="text" name="last" class="form-control <?php echo (!empty($last_err)) ? 'is-invalid' : ''; ?>" 
                                value="<?php echo $last; ?>" <?php if ($contact_success) echo "disabled" ?>>
                                <label for="last">Last name</label>
                            <div class="invalid-feedback" ><?php echo $last_err ?></div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" 
                                value="<?php echo $email; ?>" <?php if ($contact_success) echo "disabled" ?> >
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" ><?php echo $email_err ?></div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea name="message" type="text" style="height: 10rem" 
                                class="form-control <?php echo (!empty($msg_err)) ? 'is-invalid' : ''; ?>"
                                <?php if ($contact_success) echo "disabled" ?> > <?php echo $msg; ?></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" ><?php echo $msg_err ?></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
									<div><a href="#contact" data-bs-toggle="modal" data-bs-target="#submitModal">Help us out by rating your experience!</a></div>   
                                </div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

		<!---- Register Modal ---->
		<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				  <form action="include/register.php" method="post">
					<div class="mb-3 form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
						<span class="invalid-feedback"><?php echo $username_err; ?></span>
					</div>
					<div class="mb-3 form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
						<span class="invalid-feedback"><?php echo $password_err; ?></span>
					</div>
					<div class="modal-footer form-group">
						<input type="reset" class="btn btn-secondary ml-2" value="Reset">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				  </form>
				</div>
			  </div>
			</div>
		</div>
                <!---- Submit Modal ---->
		<div class="modal fade" id="submitModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="submitModal" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Rate Us!</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="rating" action="include/rating.php">
                                    <label>
                                      <input type="radio" name="stars" value="1" />
                                      <span class="icon">★</span>
                                    </label>
                                    <label>
                                      <input type="radio" name="stars" value="2" />
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                    </label>
                                    <label>
                                      <input type="radio" name="stars" value="3" />
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>   
                                    </label>
                                    <label>
                                      <input type="radio" name="stars" value="4" />
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                    </label>
                                    <label>
                                      <input type="radio" name="stars" value="5" />
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                      <span class="icon">★</span>
                                    </label>                                   			
                                </div>
                            <div class="modal-footer form-group">
                                    <input type="hidden" id="rating-type" name="rating-type" value="Contact Us form">
                                    <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
		<!---- Login Modal ---->
		<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				  <form action="include/login.php" method="post">
					<div class="mb-3 form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
						<span class="invalid-feedback"><?php echo $username_err; ?></span>
					</div>
					<div class="mb-3 form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
						<span class="invalid-feedback"><?php echo $password_err; ?></span>
					</div>
					<div class="modal-footer form-group">
						<input type="reset" class="btn btn-secondary ml-2" value="Reset">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				  </form>
				</div>
			  </div>
			</div>
		</div>
                <!-- Join Modal -->
                            <div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thank you!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-body">Thank you for expressing your interests. We will email more details to you shortly!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

		<?php include 'include/footer.php' ?>
        <!-- Register/Login Form -->
		<script type="text/javascript">
			var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
			var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
                        var submitModal = new bootstrap.Modal(document.getElementById('submitModal'));
                        var joinModal = new bootstrap.Modal(document.getElementById('joinModal'));
			<?php
				if ($showLogin)
					echo "loginModal.show()";
				if ($showRegister)
					echo "registerModal.show()";
			?>
                                    //submitModal.show();
		</script>
    </body>
</html>
