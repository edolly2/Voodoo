<?php
require_once './inc.php';
$gfname = '';
$glname = '';
$pfname = '';
$plname = '';
$email = '';
$number = '';
$bday = '';
$throws = '';
$bats = '';

if (request_is_post()) {

    // HANDLE FORM VALUES
    $gfname = $_POST['gfname'] ?? '';
    $glname = $_POST['glname'] ?? '';
    $pfname = $_POST['pfname'] ?? '';
    $plname = $_POST['plname'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
    $bday = $_POST['bday'] ?? '';
    $throws = $_POST['throws'] ?? '';
    $bats = $_POST['bats'] ?? '';

    echo "Form parameters<br />";
    echo "Parent First Name: " . $gfname . "<br />";
    echo "Parent Last Name: " . $glname . "<br />";
    echo "Player First Name: " . $pfname . "<br />";
    echo "Player Last Name: " . $plname . "<br />";
    echo "Parent Email: " . $email . "<br />";
    echo "Parent Phone Number: " . $number . "<br />";
    echo "Player Bday: " . $bday . "<br />";
    echo "Player Bats: " . $bats . "<br />";
    echo "Player Throws: " . $throws . "<br />";


} 