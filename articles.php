<?php
require "template/header.php";

/* LIST ALL ARTICLES */

//fetch all articles
$query = "SELECT * FROM articles ORDER BY article_id DESC /*LIMIT 1*/";
$stmt = $pdo->query($query);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>All Articles</h1>

<div class="filter__container"></div>

<div class="hero__container">

    <?php foreach ($articles as $article) { ?>
        <div class="article__hero">
            <img src="https://placehold.co/600x400/orange/white" alt="hero thumbnail" class="article__thumbnail">
            <h2 class="hero__title"><?= $article['title'] ?></h2>
            <p class="hero__description"><?= $article['description'] ?></p>
            <a href="article.php?id=<?= $article['article_id'] ?>" class="hero__button">See More</a>
        </div>
    <?php } ?>

</div>

<?php
require "template/footer.php";
?>