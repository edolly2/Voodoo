<?php
ob_start(); //OUTPUT BUFFERING ON

//FILESYSTEM PATH TRAVERSE
define("PRIVATE_PATH", dirname(__FILE__));
define("ROOT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", ROOT_PATH . "/public");
define("SHARED_PATH", PRIVATE_PATH . "/shared");

// URL PATH TRAVERSE
$public_end = strpos($_SERVER["SCRIPT_NAME"], "/public") + 7;
$doc_root = substr($_SERVER["SCRIPT_NAME"], 0, $public_end);
define("WWW_ROOT", $doc_root);

// FUNCTIONS
require_once "functions.php";
// DATABASE
require_once "database.php";
// VALIDATION
require_once "validation_functions.php";

// CONNECT TO DB AUTOMATICALLY AND CLOSE DB
$db = db_connect();

?>