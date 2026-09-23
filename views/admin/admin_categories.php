<main class='container-fluid'>
    <div class="row titlePage">
        <div class="col-12 text-center fs-1 titleSite"><?= $pageTitle; ?></div>
    </div>

    <!------------- NEW CATEGORY --------->
    <div class="row justify-content-center mt-5">
        <div class="col-11 p-3 boxCategoryWhiteUp border-1 border-bottom titleBoxCategory">

            <form class="row" action="" method="post">
                <div class="col-12 col-md-6 align-self-center">
                    Nouvelle catégorie
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <input type="text" class="form-control" name="categories_name" placeholder="Nom de la catégorie">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                    <button type="submit" name='action_category' value='new_category' class='btn btn-success fs-4'>Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <!------------- UPDATE CATEGORY --------->
    <div class="row justify-content-center mt-5">
        <div class="col-11 p-3 boxCategoryWhiteUp border-1 border-bottom titleBoxCategory">

            <form class="row" action="" method="post">
                <div class="col-12 col-md-3 align-self-center">
                    Modification
                </div>
                <div class="col-12 col-md-3 align-self-center">
                    <select name='id_category' class='form-select'>
                        <?php
                        foreach ($categories_list as $category_info) : ?>
                        <option value='<?= $category_info->id_category; ?>'><?= $category_info->categories_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-12 col-md-4 align-self-center">
                    <input type="text" class="form-control" name="categories_name" placeholder="Nom de la catégorie">
                </div>
                <div class="col-12 col-md-2 align-self-center">
                    <button type="submit" name='action_category' value='update_category' class='btn btn-success fs-4'>Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

</main>