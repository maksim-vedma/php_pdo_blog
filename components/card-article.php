<?php
require_once 'functions/excerpt.php';
global $article;
?>
<article class="card h-100">
    <img src="<?=$article['image']?>" class="card-img-top"
         style="height: 20rem"
    >
    <div class="card-body">
        <h5 class="card-title"><?=$article['title']?></h5>

        <span class="badge bg-<?=$article['category_color']?>">
            <?=$article['category_label']?>
        </span>

        <p class="card-text"><?=excerpt($article['content'])?></p>

        <a href="/article.php?id=<?=$article['id']?>"
           class="btn btn-primary">
            Voir plus
        </a>
    </div>
</article>

