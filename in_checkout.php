<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php"); exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinABCs: Skin Care At Its Simplest</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/navbar.css">
    <link rel="stylesheet" href="stylesheets/checkout.css">
    <link rel="stylesheet" href="stylesheets/footer.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="in_checkout_class.php" method="post">
        <header>
            <nav>
                <div class="logo">
                    <a href="in_index.php"> <img src="images/logo.png" alt="SkinABCs"> </a>
                </div>
                <ul>
                    <li> <i class="fa-solid fa-splotch"> </i> &nbsp; <a href="in_products.php">Products</a></li>
                    <li> <i class="bi bi-basket3-fill"></i> &nbsp; <a href="#">Checkout</a></li>
                    <li onclick="document.getElementById('id01').style.display='block'"> <i class="bi bi-person-square"></i> &nbsp; <a href="in_profile.php"> Profile </a> </li> 
                </ul>

                <div class="mobile-menu-icon">
                    <div class="hamburger-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="left">
                <div class="left-container">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/sensnia-serum-1.jpg" alt="">
                        </div>
                        <div class="product-contents">
                            <h1> SkinABCs Niacinamide for Sensitive Skin </h1>
                            <p> ₱255 </p>
                            <div class="number-input">
                                <button type="button" onclick="sensniaMinus();"> - </button>
                                <input class="quantity" id="sensniaQuantity" min="0" name="sensniaQuantity" value="0" type="number">
                                <button type="button" onclick="sensniaPlus();"> + </button>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="images/ub-serum-1.jpg" alt="">
                        </div>
                        <div class="product-contents">
                            <h1> SkinABCs Ultimate Brightening Serum </h1>
                            <p> ₱480 </p>
                            <div class="number-input">
                                <button type="button" onclick="ubMinus()"> - </button>
                                <input class="quantity" id="ubQuantity" min="0" name="ubQuantity" value="0" type="number">
                                <button type="button" onclick="ubPlus()" class="plus"> + </button>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="images/oaprone-serum-1.jpg" alt="">
                        </div>
                        <div class="product-contents">
                            <h1> SkinABCs Niacinamide for Oily-Acne Skin </h1>
                            <p> ₱290 </p>
                            <div class="number-input">
                                <button type="button" onclick="oaproneMinus()"> - </button>
                                <input class="quantity" id="oaproneQuantity" min="0" name="oaproneQuantity" value="0" type="number">
                                <button type="button" onclick="oapronePlus()" class="plus"> + </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="total">
                    <h2> Number of Items: <p style="float: right; width: 100px;" id="items"></p></h2>
                    <h2> Total Price:  <p style="float: right; width: 100px;" id="total"></p> </h2>
                    <hr>
                    <p class="cod"> Only available for cash on delivery! <p>
                    <hr>
                    <button name="submit" type="submit"> Proceed to Checkout </button>
                    <p class="success" style="color: green;"> <?php echo @$user->success ?> </p>
                </div>
            </div>
        </div>

        <footer>    
            <div class="footer-message">
                <h3>SkinABCs</h3>
                <p>The NIACINAMIDE Authority of the Philippines</p>
                <a href="https://www.facebook.com/SkinABCsOfficial/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/skinabcsph/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://shopee.ph/skinabcs" target="_blank"><i class="bi bi-bag-fill"></i></a>
            </div>

            <div class="whitespace-footer">
                <p>Footer Space</p>
            </div>
        </footer>
    </form>
    <script src="scripts/checkout.js"></script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/modal.js"></script>
    <script src="scripts/slideshow.js"></script>
</body>
    
    </html>