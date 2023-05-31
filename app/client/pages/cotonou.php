<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Spect+</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= MYPROJECT ?>public/images/logo2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= MYPROJECT ?>public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= MYPROJECT ?>public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= MYPROJECT ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= MYPROJECT ?>public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Spect+</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="accueil" class="nav-item nav-link">Accueil</a>
                <a href="actualites" class="nav-item nav-link active">Actualites</a>
                <a href="a-propos" class="nav-item nav-link">A propos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos salles</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="Cotonou" class="dropdown-item">Cotonou</a>
                        <a href="Grand-Popo" class="dropdown-item">Grand Popo</a>
                        <a href="Parakou" class="dropdown-item">Parakou</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="Espace_pro" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Espace pro<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Cotonou</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Programme</h6>
                <h1 class="mb-5">A venir pour cette semaine</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/legend of seeker.jpg" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">2000F</h3>
                           
                            <h5 class="mb-4">Legend of Seeker</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3.445 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>cotonou</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/sans titre.jpg" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">1500F</h3>
                           
                            <h5 class="mb-4">Chainsaw Man</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>8.30 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Cotonou</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/murder.jpg" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">3000F </h3>
                            
                            <h5 class="mb-4">Murder</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Analis</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2.30 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->



      <!-- Courses Start -->
      <div class="container-xxl py-5">
        <div class="container">
           
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/legacie.jpg" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">3000F</h3>
                           
                            
                            <h5 class="mb-4">Legacies</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>KLAUS</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>5.20 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Cotonou</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/sleepy hollow.jpg" alt="">
                           
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">2000F</h3>
                          
                            <h5 class="mb-4">Sleepy hollow </h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Cavalier sans tête</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.45 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Parakou</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?= MYPROJECT ?>public/images/ciné.jpg" alt="">
                            
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">2000F</h3>
                          
                            <h5 class="mb-4">Ciné</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>grand-popo</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Avis divers</h6>
                <h1 class="mb-5">Nos clients disent!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= MYPROJECT ?>public/images/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Carla</h5>
                    <p>Manequin</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">juste top</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= MYPROJECT ?>public/images/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Clément</h5>
                    <p>Proffesseur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Trop bien</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= MYPROJECT ?>public/images/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Claver</h5>
                    <p>Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">magnifique</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="<?= MYPROJECT ?>public/images/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Marlène</h5>
                    <p>Journaliste</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">facile à utiliser</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Accès rapide</h4>
                    <a class="btn btn-link" href="../pages/accueil">Accueil</a>
                    <a class="btn btn-link" href="../pages/actualites">actualites</a>
                    <a class="btn btn-link" href="../pages/a-propos">A propos</a>
                    <a class="btn btn-link" href="../inscription/index">S'inscrire</a>
                    <a class="btn btn-link" href="../connexion/index">Se connecter</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ctonou/Benin BP:32 </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+229 99 33 73 63</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>madisonjdoss954@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/Dosseh911455876"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                       
                        
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>laissez-nous un message !</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Souscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     

                     
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= MYPROJECT ?>public/lib/wow/wow.min.js"></script>
    <script src="<?= MYPROJECT ?>public/lib/easing/easing.min.js"></script>
    <script src="<?= MYPROJECT ?>public/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= MYPROJECT ?>public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= MYPROJECT ?>public/js/main.js"></script>
</body>

</html>