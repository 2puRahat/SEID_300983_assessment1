<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">Search Result</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($result['id'])) {?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>category</th>
                                    <th>brand</th>
                                    <th>price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['id'];?></td>
                                    <td><?php echo $result['title'];?></td>
                                    <td><?php echo $result['description'];?></td>
                                    <td><?php echo $result['category'];?></td>
                                    <td><?php echo $result['brand'];?></td>
                                    <td><?php echo $result['price'];?></td>
                                </tr>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <h1 class="text-danger text-center">Sorry No found</h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>


