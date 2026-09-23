<?php
session_start();

$page_title = 'Connexion';

require_once __DIR__ . '/../utils/connect.php';
require_once __DIR__ . '/../models/Users.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $registration_number = trim(filter_input(INPUT_POST, 'registration_number', FILTER_SANITIZE_SPECIAL_CHARS));
    $password = $_POST['password'];

    // Récupération de toutes les infos du user en fonction de son registration_number.
    $user = User::getByRegistrationNumber($registration_number);
    $password_hash = $user->users_passwords;
    // Cette fonction native renvoie un bool si le password en clair est reconnu dans le password_hash
    $isUserVerified = password_verify($password, $password_hash);
    
    if(!$isUserVerified){
        $errors['global'] = 'Problème de login';
    } else {
        // Si la colonne validate_at est à NULL c'est que l'utilisateur n'a pas encore validé son compte
        if(is_null($user->users_validated_at)){
            $errors['global'] = 'Votre compte n\'est pas encore validé';
        } else {
            $_SESSION['user'] = $user;
            $_SESSION['admin'] = $user->is_admin;
            header('location: /');
            exit;
        }

    }
}


// include(__DIR__ . '/Header.php');
require_once __DIR__ . '/../helpers/modals.php';

include __DIR__.'/../views/templates/header.php';
include(__DIR__ . '/../views/templates/navbar.php');
include __DIR__.'/../views/signin.php';
include __DIR__.'/../views/templates/footer.php';
