<?php

function Header() {
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/assets/typography/voodoo/stylesheet.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <script src="js/jquery.js" defer></script>
    <script src="js/app.js" defer></script>
</head>

<body>

    <div id="page">
        <header>
            <div class="title-cont">
                <h1>Voodoo Baseball</h1>
            </div>
            <div class="nav-cont">
                <nav>
                    <ul class="nav-list">
                        <li class="list-items">Home</li>
                        <li class="list-items">About</li>
                        <li class="list-items">Contact</li>
                        <li class="list-items">Sign-Up</li>
                    </ul>
                </nav>
            </div>
        </header>
    '
};

?>