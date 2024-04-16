<?php
require "lib/config.php";
require "lib/pdo.php";
session_start();
//echo "header.php loaded<br>";

$navbar = [
    ["title" => "Home", "href" => "index.php", "display" => true],
    ["title" => "Comments", "href" => "reviews.php", "display" => true],
    ["title" => "Articles", "href" => "articles.php", "display" => true],
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
        
        <a href="index.php"><img class="logo" src="./assets/logoipsum-317.svg" alt=""></a>

        <nav class="header__navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Comments</a></li>
                <li><a href="articles.php">Articles</a></li>   
            </ul>
        </nav>

        <div class="connection__container">
            <?php
                if(!isset($_SESSION['user_id'])){?>

                    <a href="login.php" class="connection__button">Log In</a>

                <?php }else{?>
                    <a href="logout.php" class="connection__button">Log Out</a>
                    <a href="dashboard.php" class="connection__button">Dashboard</a>
                <?php }?>

        </div>
    </header>
    <main>