<?php
session_start();

$page_title = 'Erreur 404';

require_once __DIR__ . '/../models/Brands.php';


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/error.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
