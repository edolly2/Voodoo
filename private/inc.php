<?php
//FILESYSTEM PATH TRAVERSE
define("PRIVATE_PATH", dirname(__FILE__));
define("ROOT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", ROOT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// URL PATH TRAVERSE
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

// FUNCTIONS
require_once 'functions.php';

// PAGE SNIPPETS/MODULES
require_once SHARED_PATH . '/Header.php';
require_once SHARED_PATH . '/HomeMain.php';
require_once SHARED_PATH . '/Footer.php';
require_once SHARED_PATH . '/SignupForm.php';

?>