<?php
session_start();

$pageTitle = 'Administration des catégories';

//------------- REQUIRED ---------//
require_once __DIR__ . '/../models/Categories.php';
require_once __DIR__ . '/../helpers/regex.php';



$categories_list = Category::getAll();

$action_category = trim((string) filter_input(INPUT_POST, 'action_category', FILTER_SANITIZE_SPECIAL_CHARS));

if ($_SERVER['REQUEST_METHOD'] == 'POST' and $action_category == 'new_category') {

    // ------------- CATEGORY NAME ---------//
    $categories_name = trim((string) filter_input(INPUT_POST, 'categories_name', FILTER_SANITIZE_SPECIAL_CHARS));
    if (empty($categories_name)) {
        $errors['categories_name'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($categories_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_NAME)));
        if (!$isOk) {
            $errors['categories_name'] = "Le nom n'est pas valide";
        }
        if (Category::isCategoryExist($categories_name)) {
            $errors['categories_name'] = "Erreur, la marque éxiste déjà";
        }
    }
    
    $category = new Category();
    $category->setCategory($categories_name);
    $iscategorieRegistered = $category->save();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' and $action_category == 'update_category') {

    // ------------- CATEGORY NAME ---------//
    $id_categorie = trim((string) filter_input(INPUT_POST, 'id_categorie', FILTER_SANITIZE_NUMBER_INT));
    if (empty($id_categorie)) {
        $errors['id_categorie'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($id_categorie, FILTER_VALIDATE_INT);
        if (!$isOk) {
            $errors['id_categorie'] = "Le nom n'est pas valide";
        }
    }
    // ------------- CATEGORY NAME ---------//
    $categories_name = trim((string) filter_input(INPUT_POST, 'categories_name', FILTER_SANITIZE_SPECIAL_CHARS));
    if (empty($categories_name)) {
        $errors['categories_name'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($categories_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_NAME)));
        if (!$isOk) {
            $errors['categories_name'] = "Le nom n'est pas valide";
        }
        if (Category::isCategoryExist($categories_name)) {
            $errors['categories_name'] = "Erreur, la marque existe déjà";
        }
    }
    
    $iscategorieUpdated = Category::update($id_category,$categories_name);
}


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/admin/admin_categories.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
