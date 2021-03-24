<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<body>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SimplyHome<?php echo " - " . $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="assets/images/pa-picto-01.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/style.min.css">

    </head>

    <header class="container-fluid p-0 <?php echo $current == "home" ? "bgImgOn" : "" ?>">

        <div class="infos row p-2 justify-content-end d-none <?php echo $current == "home" ? "d-md-flex" : "" ?>">

            <div class="divider px-2">|</div>

            <ul class="m-0 d-flex list-unstyled">
                <li class="px-2"><a href="#" class="decoNone text-dark"><i class="fab fa-facebook-f"></i></a></li>
                <li class="px-2"><a href="#" class="decoNone text-dark"><i class="fab fa-twitter"></i></a></li>
                <li class="px-2"><a href="#" class="decoNone text-dark"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="px-2"><a href="#" class="decoNone text-dark"><i class="fab fa-instagram"></i></a></li>
            </ul>

            <div class="divider px-2">|</div>

            <div class="d-flex align-items-center">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:02-57-87-71-85" class="px-2 decoNone text-dark">02 57 87 71 85</a>
            </div>

            <div class="divider px-2">|</div>

            <div class="d-flex align-items-center">
                <i class="fas fa-tasks"></i>
                <button class="btn decoNone p-0 px-2 m-0" data-toggle="modal" data-target="#project">
                    Suivre mon projet
                </button>
            </div>

            <div class="divider px-2">|</div>

        </div>

        <div class="backgroundImg d-none d-sm-block <?php echo $current == "home" ? "d-none" : "" ?>">
            <img src="assets/images/choisir-constructeur.jpg" alt="Image header">
        </div>

        <div class="blackFilter"></div>

    </header>

    <div class="modal fade" id="project" tabindex="-1" role="dialog" aria-labelledby="modalProject" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Suivre mon projet - Connexion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="container-fluid" action="project.php" method="POST">

                        <div class="row">
                            <div class="col-12 text-center mb-4">
                                <div class="row"></div>
                                <label for="name"></label>
                                <input type="text" id="name" name="name" placeholder="Nom">
                            </div>

                            <div class="col-12 text-center">
                                <label for="email"></label>
                                <input type="email" id="email" name="email" placeholder="Email">
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Se connecter</button>
                    <button type="button" class="btn btn-secondary">Mot de passe oublié</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid headerNav <?php echo $current == "home" ? "home" : "stickyNav" ?>">

        <div class="row justify-content-between">

            <a href="home" class="col-10 col-sm-6 d-flex align-items-center decoNone">
                <figure class="d-flex m-0 p-2 text-white">
                    <img class="img-fluid" src="assets/images/simply-home-logo.png" alt="">
                    <figcaption class="p-2">
                        <strong>Simply Home</strong>
                        <br>Constructeur de vie
                    </figcaption>
                </figure>
            </a>

            <!-- Burger menu -->
            <nav class="col-2 burger pr-4 d-flex justify-content-end align-items-center d-md-none" ?>

                <div class="burgerButton" type="button">
                    <i class="fas fa-bars"></i>
                </div>

                <div class="burgerMenu">

                    <ul class="p-0 m-0 text-center">
                        <li class="<?php echo $current == "home" ? "active" : "" ?>">
                            <a href="home" class="decoNone h-100 w-100 d-block text-center">Accueil</a>
                        </li>
                        <li class="<?php echo $current == "about" ? "active" : "" ?>">
                            <a href="about" class="decoNone h-100 w-100 d-block  ">A propos</a>
                        </li>
                        <li class="<?php echo $current == "houses" ? "active" : "" ?>">
                            <a href="houses" class="decoNone h-100 w-100 d-block text-center">Nos Maisons</a>
                        </li>
                        <li class="<?php echo $current == "contact" ? "active" : "" ?>">
                            <a href="contact" class="decoNone h-100 w-100 d-block text-center">Contact</a>
                        </li>
                    </ul>

                </div>

            </nav>

            <!-- Normal menu -->
            <nav class="col-6 p-0 d-none d-md-block">

                <ul class="h-100 d-flex justify-content-end p-0 m-0">
                    <li class="h-100 <?php echo $current == "home" ? "active" : "" ?>">
                        <a href="home"
                            class="decoNone h-100 w-100 px-2 d-flex align-items-center text-white">Accueil</a>
                    </li>
                    <li class="h-100 <?php echo $current == "about" ? "active" : "" ?>">
                        <a href="about" class="decoNone h-100 w-100 px-2 d-flex align-items-center text-white">A
                            propos</a>
                    </li>
                    <li class="h-100 <?php echo $current == "houses" ? "active" : "" ?>">
                        <a href="houses" class="decoNone h-100 w-100 px-2 d-flex align-items-center text-white">Nos
                            Maisons</a>
                    </li>
                    <li class="h-100 <?php echo $current == "contact" ? "active" : "" ?>">
                        <a href="contact"
                            class="decoNone h-100 w-100 px-2 d-flex align-items-center text-white">Contact</a>
                    </li>
                </ul>

            </nav>

        </div>

    </div>

    <div class="contactBoxes phone d-flex align-items-center">
        <i class="fas fa-phone-alt p-2 border border-dark"></i>
        <a class="phoneTxt px-2 decoNone" href="tel:02-57-87-71-85">02 57 87 71 85</a>
    </div>
    <div class="contactBoxes mail d-flex align-items-center">
        <i class="fas fa-envelope p-2 border border-dark"></i>
        <button class="mailTxt px-2 decoNone" data-toggle="modal" data-target="#mailtosh">Nous contacter</button>
    </div>

    <div class="modal fade" id="mailtosh" tabindex="-1" role="dialog" aria-labelledby="modalMail" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nous contacter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="container-fluid" action="mailto.php" method="POST">

                        <div class="row">
                            <div class="col-12 text-center mb-4">
                                <div class="row"></div>
                                <label for="name"></label>
                                <input type="text" id="name" name="name" placeholder="Nom">
                            </div>

                            <div class="col-12 text-center mb-4">
                                <label for="email"></label>
                                <input type="email" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="col-12">
                                <label for="message">Message :</label><br>
                                <textarea name="message" id="message" placeholder=" Votre message"
                                    class="w-100" rows="6"></textarea>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Enovyer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <main class="container content_<?php echo $current ?>">

        <?php echo $content_for_layout ?>

    </main>

    <footer class="container-fluid p-0 bg-secondary">

        <img class="img-fluid" src="assets/images/img-bg-footer.jpg" alt="">

        <div class="insideWrapper d-flex flex-column justify-content-around">

            <div class="row bg-light m-auto justify-content-between">

                <div class="col-6 col-md-3 p-2 d-flex flex-column justify-content-between text-center">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <p class="m-0">
                        Simply Home<br>
                        26 rue des Oliviers<br>
                        16100 ANGOULEME
                    </p>
                    <a href="tel:02-57-87-71-85" class="m-0 d-block decoNone border border-dark btnCustom">
                        02 57 87 71 85
                    </a>
                </div>

                <div class="col-4 blackBox bg-dark d-none d-md-flex flex-column justify-content-center align-self-end">
                    <a href="home" class="m-0 decoNone text-white d-flex justify-content-center">
                        <figure class="m-0 d-flex align-items-center">
                            <img class="img-fluid" src="assets/images/simply-home-logo.png" alt="">
                        </figure>

                        <p class="p-2 m-0">
                            <strong>Simply Home</strong>
                            <br>Constructeur de vie
                        </p>
                    </a>
                </div>

                <div class="col-6 col-md-3 p-2 d-flex flex-column justify-content-between text-center">
                    <div>
                        <i class="far fa-paper-plane"></i>
                    </div>
                    <p class="m-0">
                        Inscription<br>
                        à la Newsletter
                    </p>
                    <div>
                        <a href="#" class="m-0 d-block decoNone border border-dark btnCustom">
                            Je m'inscris
                        </a>
                    </div>
                </div>

                <div class="col-12 py-2">
                    <div class="d-flex">
                        <div class="d-flex m-auto">
                            <div class="col-3"><a class="decoNone" href="#"><i
                                        class="fab fa-facebook-f text-dark"></a></i>
                            </div>
                            <div class="col-3"><a class="decoNone" href="#"><i class="fab fa-twitter text-dark"></i></a>
                            </div>
                            <div class="col-3"><a class="decoNone" href="#"><i
                                        class="fab fa-linkedin-in text-dark"></i></a>
                            </div>
                            <div class="col-3"><a class="decoNone" href="#"><i
                                        class="fab fa-instagram text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <p class="footerCR m-0 py-2 text-center">
            <sm>&copy;</sm> Copyright CDA 2021 | Mentions Légales
        </p>

    </footer>


    <script type="text/javascript" src="assets/js/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.js"></script>
    <script type="text/javascript" src="assets/js/js.min.js"></script>

</body>

</html>