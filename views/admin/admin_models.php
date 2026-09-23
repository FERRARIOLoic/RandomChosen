<main class='container-fluid'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite"><?= $pageTitle; ?></div>
    </div>

    <!------------- NEW MODEL --------->
    <div class="row justify-content-center mt-5">
        <div class="col-11 p-3 titleBoxCategory">

            <div class="row">
                <div class="col-12 align-self-center border-bottom border-2 boxCategoryWhiteUp">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <?= isset($id_model) ? '' : 'Nouveau Modèle'; ?>
                        </div>
                        <form class="col-12 col-lg-7 fs-6 align-self-center" action='' method='post'>
                            <div class="row ">
                                <div class="col-3 align-self-center">
                                    Modèle à modifier :
                                </div>
                                <div class="col-3 align-self-center">
                                    <select name='id_brand' class='form-select'>

                                    </select>
                                </div>
                                <div class="col-4 align-self-center">
                                    <select name='id_model' class='form-select'>
                                        
                                    </select>
                                </div>
                                <div class="col-2 align-self-center">
                                    <button class='btn btn-success'>Modifier</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <form class="col-12 boxCategoryWhiteDown" action="" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='brand' class='fs-6'>Marque</label>
                            <select id='brand' name='id_brand' class='form-select'>
                                <?php
                                foreach ($brands_list as $brand_info) : ?>
                                    <option value='<?= $brand_info->id_brand; ?>'><?= $brand_info->brands_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-4 align-self-center py-2">
                            <label for='models_commercial' class='fs-6'>Nom commercial</label>
                            <input id='models_commercial' type="text" class="form-control" name="models_commercial" placeholder="Nom commercial">
                        </div>
                        <div class="col-12 col-lg-3 align-self-center py-2">
                            <label for='models_technical' class='fs-6'>Nom technique</label>
                            <input id='models_technical' type="text" class="form-control" name="models_technical" placeholder="Nom technique">
                        </div>
                        <div class="col-12 col-lg-3 align-self-center py-2">
                            <label for='models_tutorial' class='fs-6'>Nom tutoriel</label>
                            <input id='models_tutorial' type="text" class="form-control" name="models_tutorial" placeholder="Nom tutoriel">
                        </div>
                        <div class="col-12 col-lg-1 align-self-center py-2">
                            <label for='id_network' class='fs-6'>Réseau</label>
                            <select id='id_network' name='id_network' class='form-select'>
                                <?php foreach ($networks_list as $network_info) : ?>
                                    <option value='<?= $network_info->id_network; ?>'><?= $network_info->networks_name; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='models_launch_year' class='fs-6'>Année de sortie</label>
                            <input id='models_launch_year' type="text" class="form-control" name="models_launch_year" placeholder="2022...">
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='id_category' class='fs-6'>Catégorie</label>
                            <select id='id_category' name='id_category' class='form-select'>
                                <?php foreach ($categories_list as $category_info) : ?>
                                    <option value='<?= $category_info->id_category; ?>'><?= $category_info->categories_name; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='id_fingerprint' class='fs-6'>Lecteur d'empreinte</label>
                            <select id='id_fingerprint' name='id_fingerprint' class='form-select'>
                                <?php foreach ($fingerprints_list as $fingerprint_info) : ?>
                                    <option value='<?= $fingerprint_info->id_fingerprint; ?>'><?= $fingerprint_info->fingerprints_name; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='models_front_camera' class='fs-6'>Caméra frontale</label>
                            <input id='models_front_camera' type='text' name='models_front_camera' class='form-control'>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <label for='models_rear_camera' class='fs-6'>Caméra arrière</label>
                            <input id='models_rear_camera' type='text' name='models_rear_camera' class='form-control'>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_foldable' type='checkbox' name='models_foldable' class=''>
                            <label for='models_foldable' class='fs-6'>Pliable</label>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_curved' type='checkbox' name='models_curved' class=''>
                            <label for='models_curved' class='fs-6'>Ecran incurvé</label>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_removable_battery' type='checkbox' name='models_removable_battery' class=''>
                            <label for='models_removable_battery' class='fs-6'>Batterie amovible</label>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_audio_jack' type='checkbox' name='models_audio_jack' class=''>
                            <label for='models_audio_jack' class='fs-6'>Prise jack</label>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_dual_sim' type='checkbox' name='models_dual_sim' class=''>
                            <label for='models_dual_sim' class='fs-6'>Dual Sim</label>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center py-2">
                            <input id='models_sdcard' type='checkbox' name='models_sdcard' class=''>
                            <label for='models_sdcard' class='fs-6'>Carte MicroSD</label>
                        </div>
                        <div class="col-12 py-3 align-self-center text-center">
                            <button type="submit" name='action_brand' value='update_brand' class='btn btn-success fs-4'>Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!------------- UPDATE MODEL --------->
        <div class="row justify-content-center mt-5">
            <div class="col-11 p-3 titleBoxCategory">

                <form class="row" action="" method="post">
                    <div class="col-12 align-self-center border-bottom border-2 boxCategoryWhiteUp">
                        Nouveau modèle
                    </div>
                </form>
            </div>
        </div>

</main>