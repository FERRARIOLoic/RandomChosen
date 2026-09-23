<main class="container-fluid">
    <div class="row titlePage">
        <div class="col-12 pb-3 text-center align-self-center">
            <h1>Ma page profil</h1>
            <?php
            if ($_SESSION['user']->is_admin == 1 and $_SERVER['REQUEST_URI'] = "/profil.html") { ?>
                <a href="administrateur.html" alt='Afficher la vue administrateur' title='Afficher la vue administrateur' class='text-white'>Aller à la vue administrateur</a>
            <?php } ?>
        </div>

        <?php
        if (empty($user_info->users_lastnames)) { ?>
    </div>
    <div class="row descriptionPage">
        <div class="col-12 text-center align-self-center fs-4 pb-5">
            Merci de compléter votre profil
        </div>
    </div>
<?php } ?>

<div class="row mt-5">
    <!------------- BOX PROFILE INFO --------->
    <div class="col-12 col-lg-6">
        <div class="row p-2 px-lg-5">
            <div class="col-12">
                <form action='' method='post' class='row'>
                    <div class="col-12 py-3 boxSubCategoryWhite text-center border-bottom border-1">
                        <h4>Mes informations de profil</h4>
                    </div>
                    <div class="col-12 boxProfileOrderPending">
                        <div class="row">
                            <!------------- LASTNAME --------->
                            <div class="col-12 col-md-6 pt-3">
                                <div class="row py-2">
                                    <div class="col-12 align-self-center">
                                        <strong><label for="lastname">Nom</label></strong>
                                    </div>
                                    <div class="col-12 text-start align-self-center">
                                        <input class="form-control <?= empty($user_info->users_lastnames) ? 'is-invalid' : ''; ?>" id="lastname" type="text" name="lastname" value="<?= ($user_info->users_lastnames) ?? ''; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!------------- FIRSTNAME --------->
                            <div class="col-12 col-md-6 pt-3">
                                <div class="row py-2">
                                    <div class="col-12 align-self-center">
                                        <strong><label for="firstname">Prénom</label></strong>
                                    </div>
                                    <div class="col-12 align-self-center">
                                        <input class="form-control <?= empty($user_info->users_firstnames) ? 'is-invalid' : ''; ?>" id="firstname" type="text" name="firstname" value="<?= ($user_info->users_firstnames) ?? ''; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!------------- EMAIL --------->
                            <div class="col-12 col-md-4 pt-3">
                                <div class="row py-2">
                                    <div class="col-12 align-self-center">
                                        <strong><label for="users_registrations_numbers">Matricule</label></strong>
                                    </div>
                                    <div class="col-12 align-self-center">
                                        <input class="form-control <?= empty($user_info->users_registrations_numbers) ? 'is-invalid' : ''; ?>" id="users_registrations_numbers" type="text" name="users_registrations_numbers" value="<?= ($user_info->users_registrations_numbers) ?? ''; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!------------- EMAIL --------->
                            <div class="col-12 col-md-8 pt-3">
                                <div class="row py-2">
                                    <div class="col-12 align-self-center">
                                        <strong><label for="email">Adresse Email</label></strong>
                                    </div>
                                    <div class="col-12 align-self-center">
                                        <input class="form-control <?= empty($user_info->users_emails) ? 'is-invalid' : ''; ?>" id="email" type="text" name="email" value="<?= ($user_info->users_emails) ?? ''; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!------------- BUTTON VALID --------->
                            <div class="col-12">
                                <div class="row py-4">
                                    <div class="col-12 boxBtn text-center">
                                        <button type="submit" class="btn btnValid" name='action_profile' value='profile_info'><strong>Enregistrer les modifications</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>