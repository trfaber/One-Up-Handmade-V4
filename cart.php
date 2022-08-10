<!DOCTYPE html>

<html>

    <head>
        <!--Google font and font awesome set-up-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Roboto:wght@300&display=swap" rel="stylesheet">
            
        <!--Title of Website-->
            <title>One Up Handmade Shop</title>
    
        <!--Styles-->        
            <link href="./resources/css/index.css" type="text/css" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    </head>

    <body>
        <!--php-->
            <?php
                        
            ?>
                    
    
        <!-- Shop Header -->
            <header>
                <img class="logo" src="./resources/images/logo.jpg" alt="One Up Handmade Logo">
                <nav class="top-nav">
                    <a href="menu.php" class="menu-icon"> 
                        <i class="fa-solid fa-bars"></i>
                    </a>    
                <!--Nav Links-->
                    <ul class="top-nav">
                        <li class="top-nav"><a href="index.php">Home</a></li>
                        <li class="top-nav"><a href="index.php#shop">Shop</a></li>
                        <li class="top-nav"><a href="about.php">About</a></li>
                        <li class="top-nav"><a href="contact.php">Contact</a></li>
                    </ul>
                    <!--Search bar-->
                    <div class="wrapper">
                        <input class="search" type="text" placeholder="Find Cool Stuff">
                        <span class="search-icon">
                            <!--<i class="fa-solid fa-x fa-fw fa-2xs"></i>-->
                            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        </span>
                        <!--Shopping Cart-->
                        <a href="cart.php" class="cart">
                            <i class="fa-solid fa-cart-shopping fa-1x"></i>
                        </a>
                    </div>
                </nav>
            </header>
            <br>

        <!--cart possible pop up instead-->
            <div>
                <!--cart stuff here soon-->
            </div>    
    
        <!--Bottom Nav-->
            <footer class="bottom-nav">
                <ul class="bottom-nav">
                        <li class="bottom-nav"><a href="index.php">Home</a></li>
                        <li class="bottom-nav"><a href="index.php#shop">Shop</a></li>
                        <li class="bottom-nav"><a href="about.php">About</a></li>
                        <li class="bottom-nav"><a href="contact.php">Contact</a></li>
                </ul>
                <span>Follow us on social media!
                        <div class="social">
                        <!-- Social Icons -->
                            <a href="https://www.facebook.com/oneuphandmade" target="_blank">
                                <i class="fa-brands fa-facebook fa-fw"></i>
                            </a>
                            <a href="https://www.instagram.com/oneuphandmade" target="_blank">
                                <i class="fa-brands fa-instagram fa-fw"></i>
                            </a>
                            <a href="https://www.tiktok.com/@oneuphandmade" target="_blank">
                                <i class="fa-brands fa-tiktok fa-fw"></i>
                            </a>
                        </div>
                    </span>
            </footer>
            <!-- Copyright section at bottom right of page -->
                <p class="copyright">
                    <small>Webpage Designed by Taylor Faber</small>
                </p>
        <script src="https://kit.fontawesome.com/7449cde613.js" crossorigin="anonymous"></script>
    </body>

</html>