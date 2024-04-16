<?php
require "template/header.php";

/* SINGLE ARTICLE PAGE */

//fetch data
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $query = $pdo->prepare("SELECT * FROM articles WHERE article_id = :id");
    $query->bindParam(':id',$_GET["id"]);
    $query->execute();
    $article = $query->fetch();
}
?>

<h1><?= $article["title"]?></h1>
<h2><?=$article["description"]?></h2>
<p><?=$article["content"]?></p>

<?php
require "template/footer.php";
?>