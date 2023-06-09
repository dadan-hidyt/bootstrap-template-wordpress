<?php load_partial('jumbotron') ?>

<?php $post = new Post(); ?>

<div class="container">
    <h3>POSTINGAN TERBARU</h3>

    <?php if ($posts = $post->getAll()) : ?>
        <div class="row g-3">
           <?php foreach($posts as $item): ?>

            <div class="col-12 col-md-4">
            <div class="p-2">
                <div class="card" style="width: 18rem;">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?= get_the_title($item) ?></h5>
                        <p class="card-text"><?= get_the_excerpt($item) ?></p>
                        <a href="<?= get_the_permalink($item) ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            </div>
            
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>