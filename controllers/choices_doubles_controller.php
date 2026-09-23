<?php
session_start();

$page_title = 'Choix double';

require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../helpers/regex.php';



$action_choices = trim((string) filter_input(INPUT_POST, 'action_choices', FILTER_SANITIZE_SPECIAL_CHARS));


if ($_SERVER['REQUEST_METHOD'] == 'POST' and ($action_choices == 'choices_validated' OR $action_choices == 'choices_modify')) {

    $data_1 = [];
    $data_2 = [];

    //?------------- CHOICES 1 ---------//

    // ------------- CHOICE 1 ---------//
    $choice_1_1 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_1', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_1)) {
        $isOk = filter_var($choice_1_1, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_1'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_1,
                "value" => 1,
                "question" => $choice_1_1
            ];
        }
    }

    // ------------- CHOICE 2 ---------//
    $choice_1_2 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_2', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_2)) {
        $isOk = filter_var($choice_1_2, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_2'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_2,
                "value" => 2,
                "question" => $choice_1_2
            ];
        }
    }

    // ------------- CHOICE 3 ---------//
    $choice_1_3 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_3', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_3)) {
        $isOk = filter_var($choice_1_3, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_3'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_3,
                "value" => 3,
                "question" => $choice_1_3
            ];
        }
    }

    // ------------- CHOICE 4 ---------//
    $choice_1_4 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_4', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_4)) {
        $isOk = filter_var($choice_1_4, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_4'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_4,
                "value" => 4,
                "question" => $choice_1_4
            ];
        }
    }

    // ------------- CHOICE 5 ---------//
    $choice_1_5 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_5', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_5)) {
        $isOk = filter_var($choice_1_5, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_5'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_5,
                "value" => 5,
                "question" => $choice_1_5
            ];
        }
    }

    // ------------- CHOICE 6 ---------//
    $choice_1_6 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_6', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_6)) {
        $isOk = filter_var($choice_1_6, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_6'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_6,
                "value" => 6,
                "question" => $choice_1_6
            ];
        }
    }

    // ------------- CHOICE 7 ---------//
    $choice_1_7 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_7', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_7)) {
        $isOk = filter_var($choice_1_7, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_7'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_7,
                "value" => 7,
                "question" => $choice_1_7
            ];
        }
    }

    // ------------- CHOICE 8 ---------//
    $choice_1_8 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1_8', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1_8)) {
        $isOk = filter_var($choice_1_8, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1_8'] = "Le nom n'est pas valide";
        } else {
            $data_1[] = [
                "label" => $choice_1_8,
                "value" => 8,
                "question" => $choice_1_8
            ];
        }
    }


    //?------------- CHOICES 2 ---------//
    
    // ------------- CHOICE 1 ---------//
    $choice_2_1 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_1', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_1)) {
        $isOk = filter_var($choice_2_1, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_1'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_1,
                "value" => 1,
                "question" => $choice_2_1
            ];
        }
    }

    // ------------- CHOICE 2 ---------//
    $choice_2_2 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_2', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_2)) {
        $isOk = filter_var($choice_2_2, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_2'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_2,
                "value" => 2,
                "question" => $choice_2_2
            ];
        }
    }

    // ------------- CHOICE 3 ---------//
    $choice_2_3 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_3', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_3)) {
        $isOk = filter_var($choice_2_3, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_3'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_3,
                "value" => 3,
                "question" => $choice_2_3
            ];
        }
    }

    // ------------- CHOICE 4 ---------//
    $choice_2_4 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_4', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_4)) {
        $isOk = filter_var($choice_2_4, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_4'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_4,
                "value" => 4,
                "question" => $choice_2_4
            ];
        }
    }

    // ------------- CHOICE 5 ---------//
    $choice_2_5 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_5', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_5)) {
        $isOk = filter_var($choice_2_5, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_5'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_5,
                "value" => 5,
                "question" => $choice_2_5
            ];
        }
    }

    // ------------- CHOICE 6 ---------//
    $choice_2_6 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_6', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_6)) {
        $isOk = filter_var($choice_2_6, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_6'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_6,
                "value" => 6,
                "question" => $choice_2_6
            ];
        }
    }

    // ------------- CHOICE 7 ---------//
    $choice_2_7 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_7', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_7)) {
        $isOk = filter_var($choice_2_7, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_7'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_7,
                "value" => 7,
                "question" => $choice_2_7
            ];
        }
    }

    // ------------- CHOICE 8 ---------//
    $choice_2_8 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2_8', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2_8)) {
        $isOk = filter_var($choice_2_8, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2_8'] = "Le nom n'est pas valide";
        } else {
            $data_2[] = [
                "label" => $choice_2_8,
                "value" => 8,
                "question" => $choice_2_8
            ];
        }
    }



}


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/choices_doubles.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
