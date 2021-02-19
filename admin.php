<?php
session_start();

if (!empty($_SESSION["role"])) {

    if ($_SESSION["role"] == 2) {

        require_once("php/config.php");
?>
        <!DOCTYPE html>
        <html lang="en">
        <!-- Basic -->

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Site Metas -->
            <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Site Icons -->
            <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
            <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- Site CSS -->
            <link rel="stylesheet" href="css/style.css">
            <!-- Responsive CSS -->
            <link rel="stylesheet" href="css/responsive.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" href="css/custom.css">

            <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        </head>

        <body>


            <!-- Start Main Top -->
            <header class="main-header">
                <!-- Start Navigation -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="my-account.php">My Account</a></li>
                                <li class="nav-item"><a class="nav-link" href="all.php">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                                <?php
                                if (!empty($_SESSION["email"])) {
                                    echo "<li class='nav-item'><a class='nav-link' href='php/logout.php'>Déconnexion</a></li>";
                                }

                                if (!empty($_SESSION["role"])) {
                                    if ($_SESSION["role"] == 2) {

                                        echo "<li class='nav-item active'><a class='nav-link' href='admin.php'>Admin</a></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->

                        <?php
                        if (!empty($_SESSION["email"])) {
                        ?>
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                                    <li class="side-menu">
                                        <a href="cart.php">
                                            <i class="fa fa-shopping-bag"></i>
                                            <p>My Cart</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- End Atribute Navigation -->
                    </div>
                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                        <li class="cart-box">
                            <ul class="cart-list">
                                <li>
                                    <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Delica omtantur </a></h6>
                                    <p>1x - <span class="price">$80.00</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Omnes ocurreret</a></h6>
                                    <p>1x - <span class="price">$60.00</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Agam facilisis</a></h6>
                                    <p>1x - <span class="price">$40.00</span></p>
                                </li>
                                <li class="total">
                                    <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                    <span class="float-right"><strong>Total</strong>: $180.00</span>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <!-- End Side Menu -->
                </nav>
                <!-- End Navigation -->
            </header>
            <!-- End Main Top -->

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <!-- Start All Title Box -->
            <div class="all-title-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Panel Admin</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Panel Admin </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End All Title Box -->

            <div class="container">

                <!-- Fiche Categories -->
                <h1 class="text-center mt-5"> Catégorie </h1>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <table class="mb-5 col-sm-2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query1 = $db->prepare("SELECT * FROM `Categorie`");
                            $query1->execute();
                            $data1 = $query1->fetchAll();

                            for ($i = 0; $i < count($data1); $i++) {

                                $categorieId = $data1[$i]["categorie_id"];
                                $categorieName = $data1[$i]["categorie_nom"];;

                                echo "
                        <tr>
                            <td>$categorieId</td>
                            <td>$categorieName</td>
                        </tr>
                        ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="col-sm-5"></div>
                </div>

                <!-- Fiche Articles -->
                <h1 class="text-center"> Article </h1>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <table class="mb-5 col-sm-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Prix Soldé</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = $db->prepare("SELECT * FROM `Article`");
                            $query->execute();
                            $data = $query->fetchAll();

                            for ($o = 0; $o < count($data); $o++) {

                                $articleId = $data[$o]["article_id"];
                                $articleName = $data[$o]["article_nom"];
                                $articlePrix = $data[$o]["article_prix"];
                                $articlePrixSolde = $data[$o]["article_prixSolde"];
                                $articleImg = $data[$o]["article_img"];
                                $articleDescription = $data[$o]["article_description"];
                                $articleStock = $data[$o]["article_stock"];
                                echo "
                        <tr>
                            <td>$articleId</td>
                            <td>$articleName</td>
                            <td>$articlePrix</td>
                            <td>$articlePrixSolde</td>
                            <td><img class='img_taille' src='$articleImg'></img></td>
                            <td>$articleDescription</td>
                            <td>$articleStock</td>
                        </tr>
                        ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="col-sm-4"></div>
                </div>

                <!-- Fiche Users -->
                <h1 class="text-center"> Utilisateurs </h1>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <table class="mb-5 col-sm-8">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Numéro de Voie</th>
                                <th>Rue</th>
                                <th>Informations Complémentaires</th>
                                <th>Ville</th>
                                <th>Code Postal</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query2 = $db->prepare("SELECT U.users_id, U.users_nom, U.users_prenom, U.users_email, U.users_numVoie, U.users_rue, U.users_infoComp, U.users_ville, U.users_codePostal, R.role_nom FROM Users as U, Role as R WHERE U.role_id = R.role_id");
                            $query2->execute();
                            $data2 = $query2->fetchAll();

                            for ($p = 0; $p < count($data2); $p++) {

                                $usersId = $data2[$p]["users_id"];
                                $usersName = $data2[$p]["users_nom"];
                                $usersPrenom = $data2[$p]["users_prenom"];
                                $usersEmail = $data2[$p]["users_email"];
                                $usersNumVoie = $data2[$p]["users_numVoie"];
                                $usersRue = $data2[$p]["users_rue"];
                                $usersInfoComp = $data2[$p]["users_infoComp"];
                                $usersVille = $data2[$p]["users_ville"];
                                $usersCodePostal = $data2[$p]["users_codePostal"];
                                $role = $data2[$p]["role_nom"];

                                echo "
                        <tr>
                            <td>$usersId</td>
                            <td>$usersName</td>
                            <td>$usersPrenom</td>
                            <td>$usersEmail</td>
                            <td>$usersNumVoie</td>
                            <td>$usersRue</td>
                            <td>$usersInfoComp</td>
                            <td>$usersVille</td>
                            <td>$usersCodePostal</td>
                            <td>$role</td>
                        </tr>
                        ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="col-sm-2"></div>
                </div>
                
            </div>

            <!-- Start Instagram Feed  -->
            <div class="instagram-box">
                <div class="main-instagram owl-carousel owl-theme">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-01.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-02.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-03.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-04.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-05.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-06.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-07.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-08.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-09.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/instagram-img-05.jpg" alt="" />
                            <div class="hov-in">
                                <a href="https://www.instagram.com/freshshop755/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instagram Feed  -->


            <!-- Start Footer  -->
            <footer>
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-top-box">
                                    <h3>Business Time</h3>
                                    <ul class="list-time">
                                        <li>Monday - Friday: 08.00am to 05.00pm</li>
                                        <li>Saturday: 10.00am to 08.00pm</li>
                                        <li>Sunday: <span>Closed</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-top-box">
                                    <h3>Newsletter</h3>
                                    <form class="newsletter-box">
                                        <div class="form-group">
                                            <input class="" type="email" name="Email" placeholder="Email Address*" />
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <button class="btn hvr-hover" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-top-box">
                                    <h3>Social Media</h3>
                                    <p>Vous pouvez nous suivre sur tous les réseaux pour être a l'affut des bonnes affaires</p>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-widget">
                                    <h4>About Freshshop</h4>
                                    <p>FreshShop est une équipe qu'adore les fruits et légumes. Leurs goûts, leurs odeurs, leurs formes. Vendeur de fruits et légumes mais avant tout de bonheur. </p>
                                    <p>Des produits de qualités salué par les plus grand chef tel que Philippe Etchebest ou Pascal Le Grand Frère.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-link">
                                    <h4>Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Our Sitemap</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-link-contact">
                                    <h4>Contact Us</h4>
                                    <ul>
                                        <li>
                                            <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer  -->

            <!-- Start copyright  -->
            <div class="footer-copyright">
                <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
                    <a href="https://html.design/">html design</a></p>
            </div>
            <!-- End copyright  -->

            <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

            <!-- ALL JS FILES -->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- ALL PLUGINS -->
            <script src="js/jquery.superslides.min.js"></script>
            <script src="js/bootstrap-select.js"></script>
            <script src="js/inewsticker.js"></script>
            <script src="js/bootsnav.js."></script>
            <script src="js/images-loded.min.js"></script>
            <script src="js/isotope.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/baguetteBox.min.js"></script>
            <script src="js/form-validator.min.js"></script>
            <script src="js/contact-form-script.js"></script>
            <script src="js/custom.js"></script>
        </body>

        </html>

<?php

    } else {
        echo "
        <script>
            document.location.href = 'index.php';
        </script>
        ";
    }
}
