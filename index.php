<?php require("register_class.php") ?>

<?php
    if(isset($_POST['submit'])) {
        $user = new RegisterUser($_POST['email'], $_POST['password'], $_POST['fname'], $_POST['lname'],);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinABCs: Skin Care At Its Simplest</title>
    <link rel="stylesheet" href="stylesheets/navbar.css">
    <link rel="stylesheet" href="stylesheets/footer.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

        <div class="modal" id="id02">
            <div class="modal-register">
                <span class="close-button" onclick="document.getElementById('id02').style.display='none'" title="Close"> &times; </span>
                <h1> Create an account </h1>
                <p class="error" style="color: red;"> <?php echo @$user->error ?> </p>
                <p class="success" style="color: green;"> <?php echo @$user->success ?> </p>
                <br>
                <form action="" method="post">
                    <label for="fname"> First Name: </label>
                    <input type="text" name="fname" placeholder="Enter your First Name."  required>

                    <br>

                    <label for="lname"> Last Name: </label>
                    <input type="text" name="lname" placeholder="Enter your Last Name."  required>

                    <br>

                    <label for="email"> Email: </label>
                    <input type="email" name="email" placeholder="Enter your email." id="email" required>

                    <br>

                    <label for="password"> Password: </label>
                    <input name="password" type="password" placeholder="Enter your password." id="password" required>

                    <button class="modal-button" name="submit" type="submit"> Register </button>

                </form>
            </div>

            <div class="register-text">
                <p> Already have a account? &nbsp; <a onclick="location.href = 'login.php';"> <strong> Log In! </strong> </a> </p>
            </div>
        </div>

        <header>
            <nav>
                <div class="logo">
                    <a href="index.php"> <img src="images/logo.png" alt="SkinABCs"> </a>
                </div>
                <ul>
                    <li> <i class="fa-solid fa-splotch"> </i> &nbsp; <a href="out_products.php">Products</a></li>
                    <li> <i class="bi bi-basket3-fill"></i> &nbsp; <a href="out_checkout.php">Checkout</a></li>
                    <li onclick="document.getElementById('id02').style.display='block'"> <i class="bi bi-person-square"></i> &nbsp; <a href="#"> Sign Up </a> </li> 
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

        <div class="main-div">
            <img class="main-img" src="images/main-img.jpg">
        </div>

        <div class="about-div">
            <p class="about-wrapper"><img class="about-img" src="images/about.jpg"></p>
            <p class="about-text">
                Quality has always meant expensive in the skin care industry. <br><br><br>
                Customers buy products over ignorance-driven deceptive marketing strategies rather than having an informed decision. <br><br><br>
                The traditional skin care business has grown into a wide scam many have found themselves spending more money on than they should. <br><br><br>
                <a class="statement">WE HATE THAT. So our revolution sparked.</a>
            </p>
        </div>

        <div class="product-showcase">
            <div class="product-transition">
                <button class="prdct-btn" onclick="window.location.href = 'out_products.php#sensnia-loc';"><img class="product-1" src="images/niasensitive_update.jpg"></button>
            </div>
            <div class="product-transition"> 
                <button class="prdct-btn" onclick="window.location.href = 'out_products.php#ub-loc';"><img class="product-2" src="images/ubserum.png"></button>
            </div>
            <div class="product-transition">
                <button class="prdct-btn" onclick="window.location.href = 'out_products.php#oa-loc';"><img class="product-3" src="images/oilyacneprone.jpg"></button>
            </div>
        </div>

        <div class="reviews-div">
            <div class="mySlides fade">
                <span class="review"><img class="review-1" src="images/review1.png"></span>
            </div>
            <div class="mySlides fade">
                <span class="review"><img class="review-1" src="images/review2.png"></span>
            </div>
            <div class="mySlides fade">
                <span class="review"><img class="review-1" src="images/review3.png"></span>
            </div>
            
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <div>
            <img class="banner3" src="images/banner3.png">
        </div>

        <div class="filipino-div">
            <p class="filipino-text">
                As a Filipino brand, our history is deeply rooted in revolution—in wanting to change things for the better, in wanting to bring only the best to the masses, and in wanting to truly serve the people. <br><br><br>
                From this, our dream to formulate world-class and highly-effective products at a very low price was forged into existence. <br><br><br>
                We present a product lineup that values customer loyalty, serves purpose to the community, and environment friendly <br><br><br>
                <a class="statement"> A product made by Filipinos, for the Filipinos.</a>
            </p>
            <p class="filipino-wrapper"><img class="filipino-img" src="images/filipino.jpg"></p>
        </div>
        
        <div>
            <img class="banner1" src="images/banner1.png">
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

    <script src="scripts/menu.js"></script>
    <script src="scripts/modal.js"></script>
    <script src="scripts/slideshow.js"></script>
</body>

</html>