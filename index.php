<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
require_once ("core/Database.php");
$connection = new Database();

// load controller
include_once ("controller/PhoneBook.php");
$phoneBook = new PhoneBook();

echo ($phoneBook->display());


