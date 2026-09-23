<?php
session_start();

$page_title = 'Accueil';

require_once __DIR__ . '/../models/Users.php';


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/home.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
