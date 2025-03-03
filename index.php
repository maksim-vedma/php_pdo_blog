<?php
require_once 'db/article.php';

$slides = getArticles();
?>
<?php include 'components/header.php'; ?>

<main class="flex-grow-1">

    <div class="container">

        <h1>Home</h1>

        <?php include 'components/carousel.php' ?>
    </div>
</main>

<?php include 'components/footer.php'; ?>

