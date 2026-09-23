<?php
session_start();

$page_title = "Profil";

if(!isset($_SESSION['user']))
{
header('location: /accueil.html');
exit;
}

//------------- REGEX ---------//
require_once(__DIR__ . '/../helpers/regex.php');

require_once(__DIR__ . '/../models/Users.php');

$pageTitle = 'Profil utilisateur';

// $error = intval(filter_input(INPUT_GET, 'error', FILTER_SANITIZE_NUMBER_INT));


$user_info = User::getAll($_SESSION['user']->user_id);

//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');
require_once(__DIR__ . '/../views/templates/navbar.php');

//------------- VIEWS ---------//
// if (isset($_SESSION['validated'])) {
include(__DIR__ . '/../views/profile.php');
// } else {

//     $errorText = ErrorText::getByID($error);
//     include(__DIR__ . '/../views/user_connexion.php');
// }

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
