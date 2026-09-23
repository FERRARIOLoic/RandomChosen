<?php
session_start();

$pageTitle = 'Administration';

require_once __DIR__ . '/../models/Brands.php';
$brands_list = Brand::getAll();


//------------- LINKS ---------//
require_once(__DIR__ . '/Header.php');

//------------- VIEWS ---------//
include(__DIR__ . '/../views/admin/admin_home.php');

//------------- LINKS ---------//
require_once(__DIR__ . '/Footer.php');
