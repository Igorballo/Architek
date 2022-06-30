<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="{{ route('accueil') }}">
                                    <h1> Architek </h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Heure d'ouverture</h3>
                                            <p>Lun - Ven, 8:00 - 9:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Contactez-nous</h3>
                                            <p> {{ $oldcontact->phone_number}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email </h3>
                                            <p>{{ $oldcontact->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href=" {{ route('accueil') }} " class="nav-item nav-link {{Route::is('accueil') ? 'active' : ''}}" >Accueil</a>
                                <a href=" {{ route('about') }} " class="nav-item nav-link {{Route::is('about') ? 'active' : ''}} ">A propos</a>
                                <a href=" {{ route('service') }} " class="nav-item nav-link {{Route::is('service') ? 'active' : ''}}">Services</a>
                                <a href=" {{ route('team') }} " class="nav-item nav-link {{Route::is('team') ? 'active' : ''}}">Equipe</a>
                                <a href=" {{ route('portfolio') }} " class="nav-item nav-link {{Route::is('portfolio') ? 'active' : ''}}">Projets</a>
                                <div class="nav-item dropdown">
                                          <a href="" class="nav-link dropdown-toggle {{Route::is('blog') ? 'active' : ''}} {{Route::is('single') ? 'active' : ''}}" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href=" {{ route('blog') }} " class="dropdown-item ">Blog Page</a>
                                        <a href=" {{ route('single') }} " class="dropdown-item ">Single Page</a>
                                    </div>
                                </div>
                                <a href=" {{ route('contact') }} " class="nav-item nav-link {{Route::is('contact') ? 'active' : ''}}">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{ route('contact') }}">Choisissez-nous</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->


                @yield('content')



            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>{{ $oldcontact->siege }}</p>
                                <p><i class="fa fa-phone-alt"></i>{{ $oldcontact->phone_number}}</p>
                                <p><i class="fa fa-envelope"></i>{{ $oldcontact->email}}</p>
                                <div class="footer-social">
                                    <!-- <a href=""><i class="fab fa-twitter"></i></a> -->
                                    <a href="https://{{ $oldcontact->lien_facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://{{ $oldcontact->lien_youtube}}" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <!-- <a href=""><i class="fab fa-instagram"></i></a> -->
                                    <!-- <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Nos Services</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Pages Utiles</h2>
                                <a href="">A Propos</a>
                                <a href="">Contactez-nous</a>
                                <a href="">Notre Equipe</a>
                                <a href="">Nos Projets</a>
                                <a href="">Les Témoignages</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Journal</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Votre email">
                                    <button class="btn">Soumettre</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Conditions d'utilisation</a>
                        <a href="">Politique de confidentialité</a>
                        <a href="">Cookies</a>
                        <a href="">Aides</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#"> Architek </a>, Tous Droits Reservé.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
