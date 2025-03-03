<?php global $comments ?>

<section>
    <?php if (count($comments) > 0) : ?>
        <ul>
            <?php foreach ($comments as $comment): ?>
                <li>
                    <p class="mb-0">Commentaire de : <?= $comment['author'] ?></p>
                    <p class="mb-0"><?= $comment['message'] ?></p>
                    <time class="text-muted">posté le <?= $comment['created_at'] ?></time>
                </li>
            <?php endforeach ?>
        </ul>
    <?php else: ?>
        <p>Aucun commentaire pour cet article</p>
    <?php endif ?>
</section>
