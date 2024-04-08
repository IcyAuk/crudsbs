<?php
require "lib/config.php";
require "lib/pdo.php";
echo "header.php loaded<br>";

$navbar = [
    ["title" => "Home", "href" => "test.php"],
    ["title" => "Comments", "href" => "test.php"],
    ["title" => "Articles", "href" => "test.php"],
    ["title" => "Log in", "href" => "test.php"],
    ["title" => "Log out", "href" => "test.php"],
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
    <header class="header">
        <nav class="navbar">
            <div>
                <ul>
                    <?php foreach($navbar as $li){?>
                        <li><?= $li["title"] ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div>
            
            </div>
        </nav>
    </header>
    <main>