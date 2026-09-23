<?php
session_start();

$pageTitle = 'Recherche';


if (isset($_POST['q'])) $q = $_POST['q'];
else      $q = "";
if (isset($_POST['recherche_demande'])) $recherche_demande = $_POST['recherche_demande'];
else      $recherche_demande = "";


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/search.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
