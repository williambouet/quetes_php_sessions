<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}
?>
<?php if (isset($_SESSION['add_to_cart'])) : ?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php $orders = array_count_values($_SESSION['add_to_cart']); ?>
            <?php foreach ($orders as $id => $quantity) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $catalog[$id]['name']; ?></h3>
                            <p><?= $catalog[$id]['description']; ?></p>
                            <p class="badge badge-primary">
                                Your order : <?= $quantity ?>
                            </p>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </section>
<?php else : ?>
    <h1>Your cart is empty</h1>
<?php endif ?>


</div>
</section>
<?php require 'inc/foot.php'; ?>