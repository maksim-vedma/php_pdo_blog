<form action="" method="post">
    <div class="mb-3">
        <label for="author" class="form-label">Votre nom</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Votre message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>

    <input type="hidden" class="form-control" name="articleId" value="<?= $article['id'] ?>">

    <button type="submit" class="btn btn-primary">Envoyer le commentaire</button>
</form>
