<?php
session_start();

$page_title = 'Choix simple';

require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../helpers/regex.php';



$action_choices = trim((string) filter_input(INPUT_POST, 'action_choices', FILTER_SANITIZE_SPECIAL_CHARS));


if ($_SERVER['REQUEST_METHOD'] == 'POST' and ($action_choices == 'choices_validated' OR $action_choices == 'choices_modify')) {

    $data = [];

    // ------------- CHOICE 1 ---------//
    $choice_1 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_1', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_1)) {
        $isOk = filter_var($choice_1, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_1'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_1,
                "value" => 1,
                "question" => $choice_1
            ];
        }
    }

    // var_dump($errors);die;

    // ------------- CHOICE 2 ---------//
    $choice_2 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_2', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_2)) {
        $isOk = filter_var($choice_2, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_2'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_2,
                "value" => 2,
                "question" => $choice_2
            ];
        }
    }

    // ------------- CHOICE 3 ---------//
    $choice_3 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_3', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_3)) {
        $isOk = filter_var($choice_3, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_3'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_3,
                "value" => 3,
                "question" => $choice_3
            ];
        }
    }

    // ------------- CHOICE 4 ---------//
    $choice_4 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_4', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_4)) {
        $isOk = filter_var($choice_4, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_4'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_4,
                "value" => 4,
                "question" => $choice_4
            ];
        }
    }

    // ------------- CHOICE 5 ---------//
    $choice_5 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_5', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_5)) {
        $isOk = filter_var($choice_5, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_5'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_5,
                "value" => 5,
                "question" => $choice_5
            ];
        }
    }

    // ------------- CHOICE 6 ---------//
    $choice_6 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_6', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_6)) {
        $isOk = filter_var($choice_6, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_6'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_6,
                "value" => 6,
                "question" => $choice_6
            ];
        }
    }

    // ------------- CHOICE 7 ---------//
    $choice_7 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_7', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_7)) {
        $isOk = filter_var($choice_7, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_7'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_7,
                "value" => 7,
                "question" => $choice_7
            ];
        }
    }

    // ------------- CHOICE 8 ---------//
    $choice_8 = ucfirst(trim((string) filter_input(INPUT_POST, 'choice_8', FILTER_SANITIZE_SPECIAL_CHARS)));
    if (!empty($choice_8)) {
        $isOk = filter_var($choice_8, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => REGEX_NAME]]);
        if (!$isOk) {
            $errors['choice_8'] = "Le nom n'est pas valide";
        } else {
            $data[] = [
                "label" => $choice_8,
                "value" => 8,
                "question" => $choice_8
            ];
        }
    }

}


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/choices_simples.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
