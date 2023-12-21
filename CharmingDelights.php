<?php
    session_start();
    $database_name = "productdetails";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Charming Delights Florists</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/e87872cc68.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <section id="header">
            <a href="#"><img src="mylogo.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="CharmingDelights.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart2.php"><i class="fa-solid fa-basket-shopping"></i></a></li>
                    <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>                   

                </ul>
            </div>
        </section>
        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons upto 70% off!</p>
            <button>Buy Now</button>
        </section>
        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="shipping.png" alt="" width="150" height="150">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="online.png" alt="" width="150" height="150">
                <h6>Online booking</h6>
            </div>
            <div class="fe-box">
                <img src="f7.png" alt="" width="150" height="150">
                <h6>Fresh flowers</h6>
            </div>
            <div class="fe-box">
                <img src="sameday.png" alt="" width="150" height="150">
                <h6>Same day delivery</h6>
            </div>
            <div class="fe-box">
                <img src="support.png" alt="" width="150" height="150">
                <h6>F24/7 support</h6>
            </div>
            <div class="fe-box">
                <img src="variety.png" alt="" width="150" height="150">
                <h6>Variety</h6>
            </div>
        </section>
        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Spring collection</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="p1.png" alt="">
                    <div class="des">
                        <span>Roses</span>
                        <h5>Red roses for decoration</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹250</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="chrysanthemum.png" alt="">
                    <div class="des">
                        <span>Chrysanthemum plant</span>
                        <h5>purple chrysanthemum</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="hybridrose.png" alt="">
                    <div class="des">
                        <span>Roses</span>
                        <h5>hybrid rose</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹350</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="buttercups.png" alt="">
                    <div class="des">
                        <span>Buttercups</span>
                        <h5>Buttercup plant</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹250</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="december.png" alt="">
                    <div class="des">
                        <span>December</span>
                        <h5>december flower</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹100</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="lotus.png" alt="">
                    <div class="des">
                        <span>lotus</span>
                        <h5>Lotus flowers</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹50</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="dahlia.png" alt="">
                    <div class="des">
                        <span>Dahlia</span>
                        <h5>Dahlia flowers</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="marigold.png" alt="">
                    <div class="des">
                        <span>Marigold</span>
                        <h5>Marigold flowers</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
            </div>
        </section>
        <section id="banner" class="section-m1">
            <h4>Repair services</h4>
            <h2>Up to <span>60% off</span> - All flowers & plants</h2>
            <button class="normal">Explore More</button>
        </section>
        <section id="product1" class="section-p1">
            <h2>New Arrivals</h2>
            <p>Spring collection</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="julietrose.png" alt="">
                    <div class="des">
                        <span>Roses</span>
                        <h5>Rare Juliet Rose</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹25000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="jasmine.png" alt="">
                    <div class="des">
                        <span>jasmine</span>
                        <h5>white jasmine</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="sunflower.png" alt="">
                    <div class="des">
                        <span>Sunflower</span>
                        <h5>Sunflower plant</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹350</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="lily.png" alt="">
                    <div class="des">
                        <span>Lilies</span>
                        <h5>water lilies</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹250</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="lavendar.png" alt="">
                    <div class="des">
                        <span>Lavendar</span>
                        <h5>Lavendar flower</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹100</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="bluerose.png" alt="">
                    <div class="des">
                        <span>Rose</span>
                        <h5>Blue rose</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="orchid.png" alt="">
                    <div class="des">
                        <span>Orchids</span>
                        <h5>Orchids</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
                <div class="pro">
                    <img src="daisy.png" alt="">
                    <div class="des">
                        <span>Daisy</span>
                        <h5>Daisy plant</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹150</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>
            </div>
        </section>
        <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>
    
    </body>
</html>