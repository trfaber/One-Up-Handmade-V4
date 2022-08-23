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

    <body class="menu">
        <!--php-->
        <!--Menu-->
            <nav class="menu">
                <a class="menu-icon" onclick="goBack()"> 
                    <i class="fa-solid fa-bars"></i>
                </a>
            <!--Shopping Cart-->
                <a href="cart.php" class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </nav>
        <!--Menu Search Bar-->
            <div class="menu-wrapper">
                <input class="search-menu" type="text" placeholder="Find Cool Stuff">
                <span class="search-menu-icon">
                    <!--<i class="fa-solid fa-x fa-fw fa-2xs"></i>-->
                    <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                </span>
            </div>
            <ul class="menu">
                <li class="menu"><a href="index.php">Home</a></li>
                <li class="menu"><a href="index.php#shop">Shop</a></li>
                <li class="menu"><a href="about.php">About</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>
            </ul>
        
        <script src="index.js"></script>
        <script src="https://kit.fontawesome.com/7449cde613.js" crossorigin="anonymous"></script>
    </body>

</html>