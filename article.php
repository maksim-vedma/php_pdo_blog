<?php
include 'db/article.php';
include 'db/comments.php';
$id = intval($_GET['id']);

// SI le formulaire a été soumis, alors je génère un nouveau commentaire
if (isset($_POST['author'])) {
    // On récolte les données du formulaire
    $author = $_POST['author'];
    $message = $_POST['message'];
    $articleId = $_POST['articleId'];

    // Puis on s'en sert pour générer un nouveau commentaire en Base de données
    $isSuccess = createComment($author, $message, $articleId);
}

$article = getArticle($id);
$comments = getCommentsByArticle($article['id']);

// Sinon, je continue


// VIEW
include 'components/header.php';
?>

<main class="container flex-grow-1 mt-3">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <img src="<?= $article['image'] ?>" class="card-img-top object-fit-cover"
                     style="height: 20rem"
                >
                <h1><?= $article['title'] ?></h1>
                <a href="/archive.php?category=<?= $article['category_id'] ?>"
                   class="btn badge bg-<?= $article['category_color'] ?>">
                    <?= $article['category_label'] ?>
                </a>
                <div>
                    <?= $article['content'] ?>
                </div>
            </article>
        </div>
        <div class="col-lg-4">
            <?php include 'components/form-comment.php'; ?>
            <hr>
            <?php include 'components/comments.php'; ?>
        </div>
    </div>

</main>

<?php include 'components/footer.php'; ?>

