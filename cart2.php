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
                    <li><a href="CharmingDelights.php">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a  href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a class="active" href="cart2.php"><i class="fa-solid fa-basket-shopping"></i></a></li>
                    <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>                   

                </ul>
            </div>
        </section>
        <section id="page-header">
            
            <h2>#Fresh flowers</h2>
            
            <p>Save more with coupons upto 70% off!</p>
            
        </section>
       <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></td>
                    <td><img src="p1.png" alt="" ></td>
                    <td>Red Roses</td>
                    <td>₹250</td>
                    
                    <td><input type="number" value="1"></td>
                    <td>₹250</td>
                </tr>
            </tbody>
        </table>
       </section>
       <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter your coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>250</strong></td>
                    </tr>
                </table>
            </div>
       </section>
        
       <footer class="section-p1">
        <div class="col">
            <img class="logo" src="mylogo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 5, Mount Road Chennai-115</p>
            <p><strong>Phone: </strong> 9878998790</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Accout</h4>
            <a href="#">About</a>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From app store or Google play</p>
            <div class="row">
                <img src="gplay.png" alt="" width="50" height="50">
            </div>
            <p>Secured Payments</p>
            <img src="paygateways.png" alt="" width="250" height="150">

        </div>
        
       </footer>
        <script src="script.js"></script>
        
        
    </body>
</html>