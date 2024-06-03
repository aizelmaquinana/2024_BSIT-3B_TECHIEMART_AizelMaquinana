<?php 
@include 'config.php';

?>
<html> 
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <section class="header">
        <div class="container-shop">
            <div class="navbar-shop">
                <img src="img/logo.png" class="logo">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="orders.php">ORDERS</a></li>
                    <li class="tooltip-container"><a href="login.php"><i class="fa-solid fa-user"></i><span class="tooltip">Sign In</span></a></li>
                </ul>
            </div>
        </div>
    </section>
    


    <!-- Footer section -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="footer-content">
                    <h3>Contact Us</h3>
                    <p>Email: techiemart@gmail.com</p>
                    <p>Phone: +0912-345-6789</p>
                    <p>Website: techiemart.com</p>
                </div>
                <div class="footer-content">
                    <h3>Quick Links</h3>
                    <ul class="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about-section" class="scroll-to">About</a></li>
                        <li><a href="shop.php">Products</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h3>Follow Us</h3>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-bar">
                <p>&copy; 2024 TECHIEMART. All rights reserved</p>
            </div>
        </section>
    </footer>
</body>
</html>
