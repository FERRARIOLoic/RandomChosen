<main class='container-fluid mb-5'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite fw-bold"><?= $pageTitle; ?></div>
    </div>


    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-8 <?= (!empty($errors['global']) and $errors['global'] == 'error') ? 'bg_is_invalid text-danger' : ((!empty($errors['global']) and $errors['global'] != 'error') ? 'bg_mint ' : ' div_hidden'); ?> rounded text-center py-2 fw-bold fs-5">
            <?= $result_view ?? ''; ?>
        </div>
    </div>

    <section class="forms-section">
        <div class="forms">


            <!------------- SIGN IN --------->
            <div class="form-wrapper <?= (!empty($errors['global']) and $errors['global'] == 'no_account') ? '' : 'is-active'; ?>">
                <button type="button" class="switcher switcher-login">
                    Connexion
                </button>
                <form class="form form-login <?= (!empty($errors['global']) and ($errors['global'] == 'account_deactivated')) ? 'div_is_invalid' : 'bg-seecondary'; ?> shadow" action="connexion_utilisateur.html" method="post">
                    <fieldset>
                        <div class="row input-block">
                            <div class="col-12 ps-4">
                                Adresse email
                            </div>
                            <div class="col-12">
                                <input id="login-email" type="email" class="form-control" name="users_emails" value="<?= $users_emails ?? ''; ?>" required>
                            </div>
                        </div>
                        <div class="row input-block">
                            <div class="col-12 ps-4">
                                Mot de passe
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-10 col-lg-11">
                                        <input id="password_field_signin" type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="col-2 col-lg-1 align-self-center">
                                        <img id="password_view_signin" class="img_medium" src="/public/assets/img/icons/eye_closed_blue.png" alt="afficher le mot de passe" title="Afficher le mot de passe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="col-12">
                        <?php if (isset($errors) and $errors['global'] == 'account_deactivated') { ?>
                            <button type="submit" class="btn-login btn_valid btn" name="signin_action" value="profile_reactivate">Réactiver le compte</button>
                        <?php } elseif (isset($errors) and $errors['global'] == 'account_not_validated') { ?>
                            <button type="submit" class="btn-login btn_cancel btn" name="signin_action" value="profile_revalidate">Renvoyer le mail de confirmation</button>
                        <?php } else { ?>
                            <button type="submit" class="btn-login btn_valid btn" name="signin_action" value="profile_connect">Connexion</button>
                        <?php } ?>
                    </fieldset>
                    <fieldset class="col-12">
                        <a href="mot_de_passe_perdu.html" class="fs-8 fst-italic">Identifiant / Mot de passe perdu ?</a>
                    </fieldset>
                </form>

                <?php if (empty($errors['global'])) { ?>
                    <form class="form form-login <?= (!empty($errors['global']) and ($errors['global'] == 'account_deactivated')) ? 'div_is_invalid' : 'bg-light'; ?> shadow" action="connexion_utilisateur.html" method="post">
                        <fieldset class="text-center">
                            <div class="row">
                                <div class="col-12 pb-2 fw-bold  fst-italic">
                                    Envie de juste essayer ?
                                </div>
                                <div class="col-12">
                                    <button class="btn btn_valid w-100" name="signin_action" value="login_visitor">Tester en visiteur</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                <?php } ?>

            </div>



            <!------------- SIGN UP --------->
            <div class="form-wrapper <?= (!empty($errors['global']) and $errors['global'] == 'no_account') ? 'is-active' : ''; ?>">
                <button type="button" class="switcher switcher-signup">
                    Inscription
                </button>
                <form class="form form-signup bg_dark_blue shadow text-white" action="connexion_utilisateur.html" method="post">
                    <fieldset id="password_new_user_div">
                        <div class="row input-block">
                            <div class="col-12 ps-4 ">
                                Adresse email
                            </div>
                            <div class="col-12">
                                <input id="signup-email" type="email" class="form-control" name="email" value="<?= $email ?? ''; ?>" required>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center input-block">
                            <div class=" ps-4 ">
                                Mot de passe
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-11">
                                        <input id="password_new_user" type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="col-1 align-self-center">
                                        <img id="password_new_user_toggle" class="img_medium" src="/public/assets/img/icons/eye_closed_white.png" alt="afficher le mot de passe" title="Afficher le mot de passe">
                                    </div>
                                </div>
                            </div>
                            <div id="password_new_user_message" class="col-12 col-lg-8 text-center ">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center input-block">
                            <div class="col-12 ps-4 ">
                                Mot de passe <span class="fs-7 fst-italic">(confirmer)</span>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-11">
                                        <input id="password_new_user_verif" type="password" name="password_verif" class="form-control" required>
                                    </div>
                                    <div class="col-1 align-self-center">
                                        <img id="password_new_user_verif_toggle" class="img_medium" src="/public/assets/img/icons/eye_closed_white.png" alt="afficher le mot de passe" title="Afficher le mot de passe">
                                    </div>
                                </div>
                            </div>
                            <div id="password_new_user_verif_message" class="col-12 col-lg-8 text-center text-white">
                            </div>
                        </div>
                        <div id="password_security" class="row input-block bg_is_invalid rounded">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 py-2 text-center  border-bottom">Un mot de passe sécurisé doit contenir</div>
                                </div>
                                <div class="row py-2 fs-7 rounded">
                                    <div class="col-12 col-md-6 col-lg-4 py-1">
                                        <div class="row">
                                            <div id="password_length" class="col-11 text-center rounded px-3 bg-danger">
                                                12 caractères
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 py-1">
                                        <div class="row">
                                            <div id="password_upper_case" class="col-11 text-center rounded px-3 bg-danger">
                                                2 majuscules
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 py-1">
                                        <div class="row">
                                            <div id="password_lower_case" class="col-11 text-center rounded px-3 bg-danger">
                                                3 minuscules
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 py-1">
                                        <div class="row">
                                            <div id="password_numeral" class="col-11 text-center rounded px-3 bg-danger">
                                                2 chiffres
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 py-1">
                                        <div class="row">
                                            <div id="password_special_char" class="col-11 text-center rounded px-3 bg-danger">
                                                Un caractère spécial
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <fieldset id="new_user_register" class="text-center">


                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    </div>
</main>