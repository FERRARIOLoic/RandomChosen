<main class='container-fluid'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite"><?= $pageTitle; ?></div>
    </div>

    <!------------- NEW BRAND --------->
    <div class="row justify-content-center mt-5">
        <div class="col-11 p-3 boxCategoryWhiteUp border-1 border-bottom titleBoxCategory">

            <form class="row" action="" method="post">
                <div class="col-12 col-md-6 align-self-center">
                    Nouvelle marque
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <input type="text" class="form-control" name="brands_name" placeholder="Nom de la marque">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                    <button type="submit" name='action_brand' value='new_brand' class='btn btn-success fs-4'>Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <!------------- UPDATE BRAND --------->
    <div class="row justify-content-center mt-5">
        <div class="col-11 p-3 boxCategoryWhiteUp border-1 border-bottom titleBoxCategory">

            <form class="row" action="" method="post">
                <div class="col-12 col-md-3 align-self-center">
                    Modification
                </div>
                <div class="col-12 col-md-3 align-self-center">
                    <select name='id_brand' class='form-select'>
                        <?php
                        foreach ($brands_list as $brand_info) : ?>
                        <option value='<?= $brand_info->id_brand; ?>'><?= $brand_info->brands_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <input type="text" class="form-control" name="brands_name" placeholder="Nom de la marque">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                    <button type="submit" name='action_brand' value='update_brand' class='btn btn-success fs-4'>Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

</main>