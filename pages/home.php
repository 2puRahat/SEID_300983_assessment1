<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['title'];?></h3>
                            <h6><?php echo $product['price']; ?></h6>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
