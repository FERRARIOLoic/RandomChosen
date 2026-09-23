<?php
// var_dump($_SESSION);die;
?>
<!------------- NAVBAR --------->
<header id="site-header">
    <nav id="navbar" class="fixed-top navbar navbar-expand-lg navbar-light shadow navbarImgBackground">
        <div class="container-fluid ">
            <div class="row navbar-collapse" id="navbarSupportedContent">
                <div class="col-2 d-lg-none text-start">
                    <img alt='Afficher le menu' src="../public/assets/img/icons/menu.png" class="menuImg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" />
                </div>
                <div class="col-8 col-lg-3 text-center text-lg-start">
                    <div class="row text-center">
                        <div class="col-2 align-self-center">
                            <a href="accueil.html">
                                <img class="img_medium" src="/public/assets/img/icons/selectio_logo.png" alt="Logo d'Activity, retourner à la page d'accueil">
                            </a>
                        </div>
                        <div class="col-10 text-start fw-bold fst-italic">
                            <a href="accueil.html">
                                <span class='text_green fs-3'>S</span><span class='text_blue fs-4'>electio</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-lg-1 order-lg-2">
                    <div class="row text-end">
                        <!-- <div class=" col-6 col-lg-6 order-lg-2 text-end align-self-center">
                            <img alt='Faire une recherche sur le site' id="btnModalSearch" type="button" class="profileImg" data-bs-toggle="modal" data-bs-target="#modalSearch" src="../public/assets/img/icons/search.png">
                        </div> -->
                        <div class=" col-6 col-lg-6 order-lg-2 text-end align-self-center">
                            <?php
                            if (isset($_SESSION['user'])) {
                                // var_dump($_SERVER['REQUEST_URI']); die;
                                if ($_SESSION['user']->is_admin == 1 and ($_SERVER['REQUEST_URI'] != "/profil.html" and $_SERVER['REQUEST_URI'] != "/administrateur.html")) { ?>
                                    <a href="administrateur.html"><img id="btnModalLogin" type="button" class="profileImg" src="../public/assets/img/icons/admin.png" alt="Menu administrateur" title="Menu administrateur"></a>
                                <?php } elseif ($_SESSION['admin'] != 1 and $_SERVER['REQUEST_URI'] != "/profil.html") { ?>
                                    <a href="profil.html"><img class="profileImg" src="../public/assets/img/icons/profile_user.png" alt="Accéder au profil" title="Accéder au profil"></a>
                                <?php } elseif ($_SESSION['admin'] != 1 and $_SERVER['REQUEST_URI'] = "/profil.html") { ?>
                                    <img id="btnModalLogin" type="button" class="profileImg" data-bs-toggle="modal" data-bs-target="#modalLogin" src="../public/assets/img/icons/logout.png" alt="Déconnexion" title="Déconnexion">
                                <?php } elseif ($_SESSION['user']->is_admin == 1 and ($_SERVER['REQUEST_URI'] == "/profil.html" or $_SERVER['REQUEST_URI'] == "/administrateur.html")) { ?>
                                    <img id="btnModalLogin" type="button" class="profileImg" data-bs-toggle="modal" data-bs-target="#modalLogin" src="../public/assets/img/icons/logout.png" alt="Déconnexion" title="Déconnexion">
                                <?php }
                            } else {
                                ?>
                                <a href="connexion.html"><img class="img_small" src="/public/assets/img/icons/login.png"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse col-6 col-lg-7 text-lg-center" id="navbarNavAltMarkup" id="fixBtn">
                    <div class="col-12 col-lg-2 py-2">
                        <a href="choix_simple.html">Choix simple</a>
                    </div>
                    <div class="col-12 col-lg-2 py-2">
                        <a href="choix_double.html">Choix double</a>
                    </div>
                    <!-- <div class="col-12 col-lg-2 py-2 nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Matériels
                        </a>
                        <ul id='dropdown_repair' class="dropdown-menu px-2" aria-labelledby="navbarDropdown">
                            <div class="col-12 py-2">
                                <a class="nav-link" href="materiel_nouveau.html">Nouveau matériel</a>
                            </div>
                            <div class="col-12 py-2">
                                <a class="nav-link" href="materiel_liste.html">Liste du matériel</a>
                            </div>
                        </ul>
                    </div> -->
                    <div class="col-12 col-lg-2 py-2 nav-item dropdown">
                        <?php if (($_SESSION['admin'] ?? '') == 1) { ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administrateur
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="col-12 ">
                                    <span class='nav-link boxSubCategoryWhite'><a href="profil.html">Mon profil</a></span>
                                </div>
                                <div class="col-12 ">
                                    <span class='nav-link boxSubCategoryWhite'>Commandes</span>
                                    <a href="administrateur_commandes_attente">Payées</a>
                                    <br><a href="administrateur_commandes_livraison">Attente de livraison</a>
                                </div>
                            </ul>
                        <?php } elseif (isset($_SESSION['user'])) { ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mes favoris
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($users_favorite_list as $user_favorite_info) : ?>
                                    <div class="col-12 ">
                                        <span class='nav-link boxSubCategoryWhite'><a href="profil.html">Mon profil</a></span>
                                    </div>
                                <?php endforeach ?>
                                <div class="col-12 ">
                                    <span class='nav-link boxSubCategoryWhite'><a href="profil.html">Mon profil</a></span>
                                </div>
                                <div class="offset-10 col-2 align-self-center pt-2">
                                    <img id="btnModalLogin" type="button" class="profileImg" data-bs-toggle="modal" data-bs-target="#modalLogin" src="../public/assets/img/icons/logout.png" alt="Déconnexion" title="Déconnexion">
                                </div>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>