<?php global $slides; ?>

<?php if (count($slides) > 0) : ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <?php foreach ($slides as $i => $slide): ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>"
                        class="<?= $i === 0 ? 'active' : '' ?>"
                        aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i ?>"></button>
            <?php endforeach ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($slides as $i => $slide): ?>
                <div class="carousel-item <?= $i === 0 ? "active" : "" ?>">
                    <img src="<?= $slide['image'] ?>" class="object-fit-cover d-block w-100" style="height: 20rem;"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $slide['title'] ?></h5>
                        <a href="/article.php?id=<?= $slide['id'] ?>">Lire la suite !</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<?php endif ?>
