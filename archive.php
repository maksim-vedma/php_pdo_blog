<?php
require_once 'db/article.php';

if (isset($_GET['category'])) {
    $categoryId = htmlspecialchars(trim($_GET['category']));
    $articles = getArticlesByCategory($categoryId);
} else {
    $articles = getArticles();
}

?>
<?php include 'components/header.php'; ?>

<main style="flex:1">

    <div class="container">

        <h1>Tous les articles</h1>

        <?php if (count($articles) > 0) : ?>
            <div class="row">
                <?php foreach ($articles as $article): ?>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <?php include 'components/card-article.php' ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Aucun article</p>
        <?php endif ?>
    </div>
</main>

<?php include 'components/footer.php'; ?>

