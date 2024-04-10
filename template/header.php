<?php
require "lib/config.php";
require "lib/pdo.php";
//echo "header.php loaded<br>";

$navbar = [
    ["title" => "Home", "href" => "test.php"],
    ["title" => "Comments", "href" => "test.php"],
    ["title" => "Articles", "href" => "test.php"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Step by Step</title>
    <link rel="stylesheet" href="/css/blank.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="header__container">

        <div class="header__logo">
            <img src="/assets/logoipsum-317.svg" alt="Logo placeholder">
        </div>

        <nav class="header__navbar">

            <div class="nav__wrapper">
                <ul class="nav__list">
                    <?php foreach($navbar as $li){?>
                        <li class="header__button"><a href="<?=$li["href"]?>"><?= $li["title"] ?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="nav__connection">
                <div class="header__button"><a href="#">Log in</a></div>
                <div class="header__button"><a href="#">Log out</a></div>
            </div>
        </nav>
    </header>
    <main>