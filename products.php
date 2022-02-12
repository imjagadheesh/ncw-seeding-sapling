<?php
    require 'header.php';
    require 'connection.php';

    $user_id = $_SESSION['id'];
    $user_items_query = "select item_id from users_items where user_id = $user_id AND status = 1";
    $user_item_result = mysqli_query($con, $user_items_query) or die(mysqli_error($con));
    $user_item_result = mysqli_fetch_all($user_item_result, MYSQLI_ASSOC);
    $user_added_cart = [];
    foreach ($user_item_result as $item) {
        $user_added_cart[] = $item['item_id'];
    }

    $produts_query = "select * from items";
    $produts_prepare = mysqli_query($con, $produts_query) or die(mysqli_error($con));
    $produts = mysqli_fetch_all($produts_prepare, MYSQLI_ASSOC);
    $product_cal = ceil(count($produts)/4);
?>

<div class="shoping-page">
    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">Online purchase seedling and saplings to sow & grow</h2>
            <p class="text-center">Sell or Buy your plants</p>
        </div>
    </div>
    <div class="container shop-sec">
        <?php if (empty($produts)) { ?>
            <div class="alert alert-info text-center mt-3">
                <strong>Info!</strong> No products! <br>   
                <a href="products.php"><span class="fa fa-shopping-bag"></span> Shop now</a>
            </div>
        <?php } else { ?>

        <?php for ($i=1; $i < $product_cal; $i++) { $list = $i * 4;?>

        <div class="row py-3">
            <?php if (isset($produts[$list-4])) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/cannon_eos.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3 class="capitalize"><?=$produts[$list-4]['name'];?></h3>
                            <p>Price: Rs. <?=$produts[$list-4]['price'];?></p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else { ?>
                                <?php if(in_array($produts[$list-4]['id'], $user_added_cart)){ ?>
                                    <a href="#" class="btn btn-block btn-primary disabled">In cart</a>
                                <?php } else { ?>
                                    <a href="cart_add.php?id=<?=$produts[$list-4]['id']?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </center>
                </div>
            </div>
            <?php } if (isset($produts[$list-3])) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                    </a>
                    <center>
                        <div class="caption">
                            <h3 class="capitalize"><?=$produts[$list-3]['name'];?></h3>
                            <p>Price: Rs. <?=$produts[$list-3]['price'];?></p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else { ?>
                                <?php if(in_array($produts[$list-3]['id'], $user_added_cart)){ ?>
                                    <a href="#" class="btn btn-block btn-primary disabled">In cart</a>
                                <?php } else { ?>
                                    <a href="cart_add.php?id=<?=$produts[$list-3]['id']?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </center>
                </div>
            </div>
            <?php } if (isset($produts[$list-2])) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                    </a>
                    <center>
                        <div class="caption">
                            <h3 class="capitalize"><?=$produts[$list-2]['name'];?></h3>
                            <p>Price: Rs. <?=$produts[$list-2]['price'];?></p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else { ?>
                                <?php if(in_array($produts[$list-2]['id'], $user_added_cart)){ ?>
                                    <a href="#" class="btn btn-block btn-primary disabled">In cart</a>
                                <?php } else { ?>
                                    <a href="cart_add.php?id=<?=$produts[$list-2]['id']?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </center>
                </div>
            </div>
            <?php } if (isset($produts[$list-1])) { ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/olympus.jpg" alt="Olympus">
                    </a>
                    <center>
                        <div class="caption">
                            <h3 class="capitalize"><?=$produts[$list-1]['name'];?></h3>
                            <p>Price: Rs. <?=$produts[$list-1]['price'];?></p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else { ?>
                                <?php if(in_array($produts[$list-1]['id'], $user_added_cart)){ ?>
                                    <a href="#" class="btn btn-block btn-primary disabled">In cart</a>
                                <?php } else { ?>
                                    <a href="cart_add.php?id=<?=$produts[$list-1]['id'];?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </center>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<div class="content-gap"></div>
<?php require 'footer.php'; ?>