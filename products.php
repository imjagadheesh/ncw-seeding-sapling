<?php
    require 'header.php';
    require 'check_if_added.php';
?>

<div class="shoping-page">
    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">Online purchase seedling and saplings to sow & grow</h2>
            <p class="text-center">Sell or Buy your plants</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/cannon_eos.jpg" alt="Cannon">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(1)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(2)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(3)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/olympus.jpg" alt="Olympus">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 80000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(4)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/titan301.jpg" alt="Titan 301">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(5)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/titan201.jpg" alt="Titan 201">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(6)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/hmt.JPG" alt="htm milan">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(7)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/favreleuba.jpg" alt="Favre Leuba">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Favre Leuba #111</h3>
                            <p>Price: Rs. 18000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(8)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/raymond.jpg" alt="Raymond shirt">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Raymond</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(9)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/charles.jpg" alt="Charles shirt">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Charles</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(10)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/HXR.jpg" alt="HXR">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>HXR</h3>
                            <p>Price: Rs. 900.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(11)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/pink.jpg" alt="PINK">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>PINK</h3>
                            <p>Price: Rs. 1200.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart(12)){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>