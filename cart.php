<?php 

session_start();

require 'inc/data/products.php';
require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
            foreach ($_SESSION as $nameCookie => $numberCookies) :
                foreach ($catalog as $id => $cookie) :
                    if ($cookie['name'] === $nameCookie) :
        ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"><?=$numberCookies?></span>
                    </figcaption>
                </figure>
            </div>
        <?php
                    endif;
                endforeach;
            endforeach;
        ?>
    </div>
</section>
<?php require 'inc/foot.php';
session_destroy();
session_unset();
 ?>
