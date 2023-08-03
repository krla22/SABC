<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: index.php"); exit();
    }

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
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
    <link rel="stylesheet" href="stylesheets/footer.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    .container {
        background-color: rgba(117, 117, 117, 0.416);
        border-bottom: 5px white solid;
    }

    .heading {
        width: 100vw;
        height: 20vw;
        background: rgb(32, 32, 32);
        border-bottom: 5px white solid;
        color: white;
        line-height: 2.5rem;
        margin: 0 auto;
        /* padding: 20px; */
        display: flex;
        padding-bottom: 5vw;
    }

    .heading button {
        font-family: inherit;
        padding: 15px;
        border: 3px solid white;
        background: none;
        color: white;
        position: absolute;
        top: 350px;
        right: 20px;
        cursor: pointer;
    }

    .tabcontent button {
        font-family: inherit;
        padding: 15px;
        border: 3px solid white;
        background: none;
        color: white;
        cursor: pointer;
    }

    .tabcontent button:hover {
        background: white;
        color: rgb(32, 32, 32);
        transition: 0.5s;
    }

    .heading button:hover {
        background: white;
        color: rgb(32, 32, 32);
        transition: 0.5s;
    }

    .pfp_img {
        background: white;
        height: 12vw;
        width: 12vw;
        margin-top: 2.5vw;
        margin-left: 7.7vw;
        margin-bottom: 2.5vw;
        border-radius: 50%;
    }

    .pfp_txt {
        padding: 2vw;
        margin-top: 2.5rem;
        margin-bottom: 5.5vw;
        font-size: 1vw;
        padding-bottom: 1vw;
    }

    .pfp_txt button {
        padding: 5px;
        margin-bottom: 12.5vw;
        margin-left: 11vw;
        font-size: 1vw;
        position: static;
        width: 7vw;
    }

    .container {
    display: flex;
    flex-direction: row;
    }

    .left {
        height: 75vh;
        width: 30%;
    }

    .right {
        height: 115vh;
        width: 70%;
    }

    .tab {
        background-color: rgb(32, 32, 32);
        width: 80%;
        height: 60%;
        margin: 2rem auto;
        padding: 2rem;
        border: 5px white solid;
    }

    .contents {
        background-color: rgb(32, 32, 32);
        border: 5px white solid;
        width: 80%;
        height: 105vh;
        margin: 2rem auto;
        padding: 2rem;
        color: white;
        line-height: 2rem;
    }

    .tab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        font-family: 'Josefin Sans';
    }

    .tab button:hover {
        background-color: rgb(85, 85, 85);
    }

    #Profile {
        display: block;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        border-top: none;
    }

    .tab button.active {
        background-color: rgb(85, 85, 85);
    }

    input  {
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        margin-bottom: 15px;
        border: 2px solid white;
        background-color: #ffffff;
        cursor: text;
    }

    input:disabled  {
        border: 2px solid white;
        background: none;
        cursor: not-allowed;
        color: white;
    }

    textarea:disabled  {
        border: 2px solid white;
        background: none;
        cursor: not-allowed;
        color: white;
    }

    textarea {
        border: 2px solid white;
        background-color: #ffffff;
        padding: 1vw;
        max-width: 100%;
    }

    textarea:focus {
        outline: none;
        background-color: whitesmoke;
        transition: 0.5s;
    }

    input:focus {
        outline: none;
        background-color: whitesmoke;
        transition: 0.5s;
    }

    .pfp_txt a {
        cursor: pointer;
    }

    .pfp_txt a:hover {
        border-bottom: 3px solid white;
    }

</style>

<body onload="onLoad();">
    <header>
        <nav>
            <div class="logo">
                <a href="in_index.php"> <img src="images/logo.png" alt="SkinABCs"> </a>
            </div>
            <ul>
                <li> <i class="fa-solid fa-splotch"> </i> &nbsp; <a href="in_products.php">Products</a></li>
                <li> <i class="bi bi-basket3-fill"></i> &nbsp; <a href="in_checkout.php">Checkout</a></li>
                <li onclick="document.getElementById('id01').style.display='block'"> <i class="bi bi-person-square"></i> &nbsp; <a href="#"> Profile </a> </li> 
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

    <div class="heading">
        <div class="pfp_img">

        </div>
        <div class="pfp_txt">
            <h1> Welcome, <?php echo $_SESSION['user']; ?> </h1>
            <i class="bi bi-pencil-square"></i> <a onclick="editProfile()"> Edit Profile </a>
            <button onclick="location.href='?logout'" name="logout"> Sign Out </button>
        </div>
    </div>

    <div class="container">
        <div class="left">
            <div class="tab">
                <button class="tablinks" onclick="openPanel(event, 'Profile')"> Profile </button>
                <button class="tablinks" onclick="openPanel(event, 'Orders')"> Orders </button>
                <button class="tablinks" onclick="openPanel(event, 'Addresses')"> Addresses </button>
                <button class="tablinks" onclick="openPanel(event, 'ChangePassword')"> Change Password </button>
            </div>
        </div>
        <div class="right">
            <div class="contents">
                <div id="Profile" class="tabcontent"> 
                    <h1> Profile </h1>
                    <p> Manage and protect and account </p> <br>
                    <label for="username"> Username: </label> <input type="text" id="username" name="username" placeholder="Enter your username." disabled> <br>
                    <label for="email"> Email: </label> <input type="email" id="email" name="email" placeholder="Enter your email." disabled> <br>
                    <label for="phone"> Phone: </label> <input type="text" id="phone" name="phone" placeholder="Enter your phone." disabled> <br>
                    <label for="firstname"> First Name: </label> <input type="text" id="firstname" name="firstname" placeholder="Enter your First Name." disabled> <br>
                    <label for="lastname"> Last Name: </label> <input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name:." disabled> <br>
                    <button style="margin-top: 10px; float:right;" onclick="saveProfile()"> Save </button>
                </div>
                <div id="Orders" class="tabcontent"> 
                    <h1> Orders </h1>
                    <p> 4 items </p>

                    <?php 
                        $file = 'orders.json'; 
                        $data = file_get_contents($file);
                        $orders = json_decode($data);
                    ?>

                    <table>
                        <tr>
                            <th>Niacinamide For Sensitive Skin</th>
                            <th>Niacinamide For Acne-Oily Skin</th>
                            <th>Ultimate Brightening Serum</th>
                            <th>Total Price</th>
                        </tr>
                        <?php 
                            foreach($orders as $order) 
                            { ?>
                            <td><?=$order->sensniaQuantity; ?> PCS </td>
                            <td><?=$order->oaproneQuantity; ?> PCS </td>
                            <td><?=$order->ubQuantity; ?> PCS </td>
                            <td><?=$order->total_price; ?> </td>
                             <?php }
                        ?>
                    </table>
                    <div> </div>
                </div>
                <div id="Addresses" class="tabcontent"> 
                    <h1> Addresses </h1> <br>
                    <button onclick="document.getElementById('address').disabled = false;"> Edit </button>
                    <br>
                    <br>
                    <textarea id="address" name="address" id="" cols="105" rows="25" disabled></textarea> <br>
                    <br>
                    <button onclick="document.getElementById('address').disabled = true;" style="float: right;"> Save </button>
                </div>
                <div id="ChangePassword" class="tabcontent"> 
                    <button style="margin-top: 10px; float:right;" onclick="document.getElementById('cpassword').disabled = false; document.getElementById('npassword').disabled = false;"> Edit </button>
                    <h1> Change Password </h1>
                    <p> For your account's security, do not share your password with anyone else </p>
                    <br>
                    <label for="cpassword"> Current Password: </label> 
                    <input type="password" id="cpassword" name="cpassword" placeholder="Enter your Current Password." disabled> <br>
                    <label for="npassword"> New Password: </label> 
                    <input type="password" id="npassword" name="npassword" placeholder="Enter your New Password." disabled> <br>
                    <button style="margin-top: 10px; float:right;" onclick="document.getElementById('cpassword').disabled = true; document.getElementById('npassword').disabled = true;"> Confirm </button>
                </div>
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

    <script>
        function openPanel(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    
    document.getElementById("defaultOpen").click();
    </script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/modal.js"></script>
    <script src="scripts/slideshow.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
<script>

function editProfile() {
    document.getElementById('username').disabled = false;
    document.getElementById('email').disabled = false;
    document.getElementById('phone').disabled = false;
    document.getElementById('firstname').disabled = false;
    document.getElementById('lastname').disabled = false;
}

function saveProfile() {
    document.getElementById('username').disabled = true;
    document.getElementById('email').disabled = true;
    document.getElementById('phone').disabled = true;
    document.getElementById('firstname').disabled = true;
    document.getElementById('lastname').disabled = true;
}

// function onLoad() {
//             var url = 'orders.json';
//             $.getJSON(url, function (json) {
//                 var table = $('<table>');
//                 table.attr('border', '1');
//                 var tr = $('<tr>');
//                 var td = $('<td>');
//                 td.html("SkinABCs Niacinamide for Sensitive Skin");
//                 tr.append(td);
//                 td = $('<td>');
//                 td.html('SkinABCs Ultimate Brightening Serum');
//                 tr.append(td);
//                 td = $('<td>');
//                 td.html('SkinABCs Niacinamide for Oily-Acne Skin');
//                 tr.append(td);
//                 td = $('<td>');
//                 td.html('Number of Items');
//                 tr.append(td);
//                 td = $('<td>');
//                 td.html('Total Price');
//                 tr.append(td);
//                 td = $('<td>');
//                 table.append(tr);
//                 for (var i = 0; i < json.length; i++) {
//                     var tr = $('<tr>');
//                     var td = $('<td>');
//                     td.html(json[i].sensniaQuantity);
//                     tr.append(td);
//                     td = $('<td>');
//                     td.html(json[i].ubQuantity);
//                     tr.append(td);
//                     td = $('<td>');
//                     td.html(json[i].oaproneQuantity);
//                     tr.append(td);
//                     table.append(tr);
//                     td = $('<td>');
//                     td.html(json[i].total_items);
//                     tr.append(td);
//                     td = $('<td>');
//                     td = $('<td>');
//                     td.html(json[i].total_price);
//                     tr.append(td);
//                     td = $('<td>');
//                 }
//                 $('body').append(table);
//             });
//         }
</script>
</html>