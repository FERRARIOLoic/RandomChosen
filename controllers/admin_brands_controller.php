<?php
session_start();

$pageTitle = 'Administration des marques';

//------------- REQUIRED ---------//
require_once __DIR__ . '/../models/Brands.php';
require_once __DIR__ . '/../helpers/regex.php';



$brands_list = Brand::getAll();

$action_brand = trim((string) filter_input(INPUT_POST, 'action_brand', FILTER_SANITIZE_SPECIAL_CHARS));

if ($_SERVER['REQUEST_METHOD'] == 'POST' and $action_brand == 'new_brand') {

    // ------------- BRAND NAME ---------//
    $brands_name = trim((string) filter_input(INPUT_POST, 'brands_name', FILTER_SANITIZE_SPECIAL_CHARS));
    if (empty($brands_name)) {
        $errors['brands_name'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($brands_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_NAME)));
        if (!$isOk) {
            $errors['brands_name'] = "Le nom n'est pas valide";
        }
        if (Brand::isBrandExist($brands_name)) {
            $errors['brands_name'] = "Erreur, la marque éxiste déjà";
        }
    }
    
    $brand = new Brand();
    $brand->setBrand($brands_name);
    $isBrandRegistered = $brand->save();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' and $action_brand == 'update_brand') {

    // ------------- BRAND NAME ---------//
    $id_brand = trim((string) filter_input(INPUT_POST, 'id_brand', FILTER_SANITIZE_NUMBER_INT));
    if (empty($id_brand)) {
        $errors['id_brand'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($id_brand, FILTER_VALIDATE_INT);
        if (!$isOk) {
            $errors['id_brand'] = "Le nom n'est pas valide";
        }
    }
    // ------------- BRAND NAME ---------//
    $brands_name = trim((string) filter_input(INPUT_POST, 'brands_name', FILTER_SANITIZE_SPECIAL_CHARS));
    if (empty($brands_name)) {
        $errors['brands_name'] = 'Le champ est obligatoire';
    } else {
        $isOk = filter_var($brands_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_NAME)));
        if (!$isOk) {
            $errors['brands_name'] = "Le nom n'est pas valide";
        }
        if (Brand::isBrandExist($brands_name)) {
            $errors['brands_name'] = "Erreur, la marque existe déjà";
        }
    }
    
    $isBrandUpdated = Brand::update($id_brand,$brands_name);
}


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/admin/admin_brands.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
