<!------------- MODAL SEARCH --------->
<div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Recherche</h5>
            </div>
            <div class="col-12 text-center align-self-center py-2 boxContact">
                <h4>Type de recherche ?</h4>
            </div>
            <div class="col-12 text-center px-3">
                <div class="row">
                    <div id='searchModel' class="col-4 py-2 align-self-center bigifyTextSelected boxSubCategoryWhite">
                        Modèle
                    </div>
                    <div id='searchPart' class="col-4 py-2 align-self-center">
                        Pièce détachée
                    </div>
                    <div id='searchRepair' class="col-4 py-2 align-self-center">
                        Réparation
                    </div>
                </div>
            </div>
            <div id='searchView' class='border-top border-1'>
                <form class='row p-2' action="recherche.html" method="post">
                    <div class='col-12 col-lg-8 align-self-center py-2'>
                        <input type="search" class='form-control formSearch' name="q" placeholder="Rechercher un modèle..." />
                    </div>
                    <div class='col-12 col-lg-4 align-self-center text-center py-2'>
                        <button type="submit" class='btn btn-primary btnSearch align-self-center text-center' name='searchType' value='model'>Lancer la recherche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!------------- MODAL LOGIN --------->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content navbarImgBackground">
            <div id="cartVueModal">
                <div class="row mt-2 pt-5 px-md-5">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <div class="col-12 text-center align-self-center py-5 boxContact">
                            <h4>Vous nous quittez ?</h4>
                        </div>
                        <div class="col-12 text-center align-self-center py-5">
                            <a href="deconnexion.html" class="stretched-link">
                                <button class="btn btnValid">
                                    <h4>Se déconnecter</h4>
                                </button>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-12 pb-4 border-bottom border-1">
                            <div class="row text-center d-flex justify-content-center">

                                <div id="btnInscriptionModal" class="col-5 text-center align-self-center p-3 fadeInTop boxContact">
                                    Inscription
                                </div>
                                <div class="col-1"></div>
                                <div id="btnConnexionModal" class="col-5 text-center align-self-center p-3 fadeInTop boxContact bigifyTextSelected boxSubCategoryWhite">
                                    Connexion
                                </div>
                            </div>
                        </div>
                        <div class="offset-1 col-10 py-3 pb-4">
                            <div id="connectVueModal">
                                <form class="mb-5 fadeInTop" method="POST" action="connexion.html">

                                    <div class="error"><?= $errors['global'] ?? '' ?></div>

                                    <div class="form-floating">
                                        <input type="email" autocomplete="email" class="form-control <?= isset($errors['global']) ? 'is-invalid' : '' ?>" id="email" name="email" required placeholder="email" />
                                        <label for="email" class="form-label px-4 boxContactTitle">Adresse mail*</label>
                                    </div>

                                    <div class="form-floating mb-5">
                                        <input type="password" value="" class="form-control <?= isset($errors['global']) ? 'is-invalid' : '' ?>" id="password" required name="password" placeholder="password" />
                                        <label for="password" class="form-label px-4 boxContactTitle">Mot de passe*</label>
                                    </div>
                                    <div class="col-12 text-center mb-5">
                                        <button class="btn btnValid" type="submit"><strong>Connexion</strong></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>