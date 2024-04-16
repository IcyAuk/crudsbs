<?php
require "template/header.php";
?>

<h1>Dashboard</h1>
<?php if (isset($_SESSION['user_id'])) { ?>
    <p>Welcome back, <?= $_SESSION['username'] ?></p>
<?php } ?>

<div class="container">

    <aside class="admin__dashboard">
        <a href="create_article.php" class="dashboard__button">View articles</a>
        <a href="create_article.php" class="dashboard__button">Create article</a>
        <a href="create_article.php" class="dashboard__button">Create user</a>
        <a href="create_article.php" class="dashboard__button">View comments</a>
    </aside>

    <div class="altmain">
        
    </div>
    
</div>

<?php
require "template/footer.php";
?>