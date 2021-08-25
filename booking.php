<?php include('formProcessor.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Welcome to our booking page. You can book through whatsapp or through email.">
        <meta name="author" content="Juan Scanlan">
        <title>Online Booking</title>
        <link rel="icon" type="image/png" href="assets/img/SharkIconWire.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
            crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/button.css" rel="stylesheet">
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top"
            id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html">ScubaJuan Cozumel</a>
                <button class="navbar-toggler navbar-toggler-right"
                    type="button" data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link
                            js-scroll-trigger" href="index.html#projects">Services</a></li>
                        <li class="nav-item"><a class="nav-link
                            js-scroll-trigger" href="MediaGallery.html">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link
                            js-scroll-trigger" href="faq.html">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link
                            js-scroll-trigger" href="index.html#about">About</a></li>
                        <li class="nav-item"><a class="nav-link
                            js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="formhead"> 
            <div class="container d-flex h-100 align-items-center mb-5">
                <div class="text-center mx-auto contact-form">
                    
                    <h5 class="text-center">FASTEST CONTACT METHOD:</h5>
                    <hr>
                    <a href="https://wa.me/529871005804" target="_blank" style="
                        position: relative;
                        left: -10%;
                        width: 5em;
                        height: auto;">
                        <img class="buttonBookingWhats" src="assets/img/booking/WhatsApp.png" alt="">
                    </a>   
                    <a href="http://m.me/scubajuancozumel" target="_blank" style="
                        position: relative;
                        left: 10%;
                        width: 5em;
                        height: auto;">
                        <img class="buttonBookingMess" src="assets/img/booking/messenger.png" alt="">
                    </a>  
                </div>
            </div> 
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto contact-form">
                    <form id="contactForm" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                        <h5 class="text-center">OR THROUGH EMAIL:</h5>
                        <br>
                        <!--Service-->
                        <div>
                            <select class="form-control"
                                id="diveType" name="service">
                                <option value="" selected disabled hidden>Select a Service</option>
                                <optgroup label="Beginner Courses">
                                    <option <?php if ($service == 'Discover Scuba Diving') echo "selected";?>>Discover Scuba Diving</option>
                                    <option <?php if ($service == 'Refresher Dive') echo "selected";?>>Refresher Dive</option>
                                </optgroup>
                                <optgroup label="Certification Courses">
                                    <option <?php if ($service == 'PADI: Open Water') echo "selected";?>>PADI: Open Water</option>
                                    <option <?php if ($service == 'PADI: Advanced Open Water') echo "selected";?>>PADI: Advanced Open Water</option>
                                    <option <?php if ($service == 'PADI: Referral Course') echo "selected";?>>PADI: Referral Course</option>
                                    <option <?php if ($service == 'PADI: Rescue Diver') echo "selected";?>>PADI: Rescue Diver</option>
                                    <option <?php if ($service == 'PADI: Dive Master') echo "selected";?>>PADI: Dive Master</option>
                                </optgroup>
                                <optgroup label="Boat Dives">
                                    <option <?php if ($service == '2 Tank Dive') echo "selected";?>>2 Tank Dive</option>
                                    <option <?php if ($service == 'Night Dive') echo "selected";?>>Night Dive</option>
                                    <option <?php if ($service == 'Twilight Dive') echo "selected";?>>Twilight Dive</option>
                                    <option <?php if ($service == 'Deep Dive') echo "selected";?>>Deep Dive</option>
                                    <option <?php if ($service == 'Shipwreck Dive') echo "selected";?>>Shipwreck Dive</option>
                                    <option <?php if ($service == 'Lionfish Safari') echo "selected";?>>Lionfish Safari</option>
                                    <option <?php if ($service == 'Deep Lionfish Safari') echo "selected";?>>Deep Lionfish Safari</option>
                                    <option <?php if ($service == 'Eagle Ray Dive') echo "selected";?>>Eagle Ray Dive</option>
                                    <option <?php if ($service == 'Bull Shark Dive') echo "selected";?>>Bull Shark Dive</option>
                                </optgroup>
                                <optgroup label="Parasailing or Snorkelling">
                                    <option <?php if ($service == 'Parasailing') echo "selected";?>>Parasailing</option>
                                    <option <?php if ($service == 'Snorkelling') echo "selected";?>>Snorkelling</option>
                                </optgroup>
                            </select>
                            <span class="error" style="color:red;"><?= $service_error ?></span>
                        </div>
                        <hr/>
                        <!--Booking Name-->
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="nameInput" name="name" value="<?= $name ?>"
                                placeholder="Booking Name">
                            <span class="error" style="color:red;"><?= $name_error ?></span>
                        </div>
                        <!--Email-->
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="emailInput" name="email" value="<?= $email ?>"
                                placeholder="Email">
                            <span class="error" style="color:red;"><?= $email_error ?></span>
                        </div>
                        <!--Phone-->
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="phoneInput" name="phone" value="<?= $phone ?>"
                                placeholder="Phone Number">
                            <span class="error" style="color:red;"><?= $phone_error ?></span>
                        </div>
                        <hr/>
                        <!--Group Size-->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Group
                                Size</label>
                            <select class="form-control"
                                id="exampleFormControlSelect1" name="numdivers" value="<?= $numdivers ?>">
                                <option <?php if ($numdivers == '1 Person') echo "selected";?>>1 Person</option>
                                <option <?php if ($numdivers == '2 People') echo "selected";?>>2 People</option>
                                <option <?php if ($numdivers == '3 People') echo "selected";?>>3 People</option>
                                <option <?php if ($numdivers == '4 People') echo "selected";?>>4 People</option>
                                <option <?php if ($numdivers == '5 People') echo "selected";?>>5 People</option>
                                <option <?php if ($numdivers == '6 People') echo "selected";?>>6 People</option>
                                <option <?php if ($numdivers == '7+ People (specify below)') echo "selected";?>>7+ People (specify below)</option>
                            </select>
                        </div>
                        <!--Message-->
                        <div class="form-group">
                            <textarea class="form-control" id="requestsInput" rows="3" name="message" placeholder="Any requests/queries/extras?"><?php if(isset($_POST['message'])) {echo htmlentities ($_POST['message']); }?></textarea>
                        </div>
                        <!--Submit-->
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn
                                btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </header>

        <!-- Signup-->
        <!--
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2
                            text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive
                            updates!</h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0
                                mr-sm-2
                                mb-3 mb-sm-0" id="inputEmail"
                                type="email"
                                placeholder="Enter email address..." />
                            <button class="btn btn-primary mx-auto"
                                type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt
                                    text-primary
                                    mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">
                                    Calle 3 Sur #388 Av 15-20. Cozumel, Mexico.<br>
                                    (Local #4 Opposite showers) Marina Fonatur, Carretera Costera Sur km 6, Q.R.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary
                                    mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a
                                        href="#!">diverjuancozumel@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary
                                    mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">(+52)
                                    987
                                    100
                                    5804</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Social Media-->
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.tripadvisor.com.au/Attraction_Review-g150809-d21352150-Reviews-ScubaJuan_Cozumel-Cozumel_Yucatan_Peninsula.html"><i class="fab fa-tripadvisor"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/scubajuancozumel"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/scubajuancozumel/?hl=en"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://wa.me/529871005804"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div
                class="container">Copyright © Scuba Juan Cozumel 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
