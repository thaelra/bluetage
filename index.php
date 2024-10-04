<?php
include "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluetage</title>
    <script src="https://kit.fontawesome.com/c2208beb71.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- starts navbar -->
            <header>
                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>
                <a href="#" class="logo">Bluetage</a>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="#about">About</a>
                    <a href="#product">Products</a>
                    <a href="#contact">Contact Us</a>
                </div>
                <div class="icons">
                    <a href="home.php" class="fas fa-user"></a>
                </div>
            </header>
        <!-- ends navbar -->
        <div id="home">
        <br><br><br><br><br>
        <!-- starts tampilan home -->
        <div class="banner">
        <div class="content">
            <h6>Welcome</h6> 
            <p>Need a hype style? </p>
            <a href="home.php" class="btn">Get Started</a>
        </div>

        <div class="image">
            <img src="image/newarrival.png" width="1000">
        </div>
    </div>
        <br><br><br><br><br><br><br>
        </div>
        <!-- ends tampilan home -->
        <!-- starts About -->
        <section class="about" id="about">
        <h1 class="heading">About Us!</h1>

        <div class="cbout">
            <div class="iabout">
             <img src="image/blue.png">
            </div>
             <div class="bout">
                <p>Welcome to our world of denim fashion, where freedom, courage, and style converge.</p> 
                <p>Our collection blends classic denim with modern flairmedia, offering comfortable and sustainable pieces for every occasion.</p>
                <p>Join us in making a bold statement with every step in the timeless realm of denim fashion.</p>
          </div>
        </div>
        </section>
<!--icons section starts-->
<section class="icons-container" id="benefit">
    <div class="icons">
        <i class="fa-solid fa-truck"></i>
        <div class="info">
            <h3>Free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <i class="fa-solid fa-arrow-rotate-left"></i>
        <div class="info">
            <h3>10 Days Returns</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <i class="fa-solid fa-percent"></i>
        <div class="info">
            <h3>Offer & Gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <i class="fa-solid fa-money-bill"></i>
        <div class="info">
            <h3>Secure Payments</h3>
            <span>protected by us</span>
        </div>
    </div>
</section>

<!--icons section ends-->
<!-- ends about -->
        
<!-- starts product -->
<section class="product" id="product">
    <h1 class="heading">Best Seller</h1>
<div class="box-container-index">

    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-pants-1.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Hearted Pocket Jeans</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 299.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>

    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-skirts-1.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Flower Skirts Belt</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 299.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>


    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-tops-1.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Modern Denim Tops</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 299.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>

    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-pants-2.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Teddy Bear Jeans</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 290.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>

    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-jackets-1.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Short Denim Jacket</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 299.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>

    <div class="user-box-index">
        <div class="imageb">
            <center><img src="image/img-shorts-1.png" width="200"></center>
        </div>
    <div class="pcontent">
        <h5>Happy Face Shorts</h5>
            <div class="star">
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
               <i class="fa-solid fa-star" style="color: #ffc800;"></i>
            </div>
        <span class="price">Rp 299.999</span>
        <div class="p-buy-now">
          <a href="./home.php">BUY NOW!</a>
        </div>
    </div>
    </div>

    

</div>

</section>
        <!-- ends product -->

        <!-- start contact -->
       
        <section class="contact-form" id="contact">
            <h1 class="heading">Contact Us!</h1>
            <div class="contactForm">
                <form class="cform">
                 <h1 class="sub-heading-more">More Information</h1>
                 <label>Nama Lengkap</label><br>
                 <input type="text" class="input" placeholder="Masukkan nama lengkap"><br>
                 <label>Alamat</label><br>
                 <input type="text" class="input" placeholder="Masukkan alamat"><br>
                 <label>No. telp</label><br>
                 <input type="text" class="input" placeholder="Masukkan no. telp">
                 <label>Komentar/Pertanyaan</label>
                 <textarea class="input" placeholder="Your message..."></textarea>
                 <input type="submit" class="input csubmit" value="Send Message">
                </form>
                <div class="map-container">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.56131154394!2d106.82337537440952!3d-6.189409060639595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f425b1901f1b%3A0x388a40e23a697d41!2sSMK%20Katolik%20Santa%20Theresia%20Jakarta!5e0!3m2!1sid!2sid!4v1714577815444!5m2!1sid!2sid" width="550" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        
                    </div>
                </div>
            </div>
            <div class="contactMethod">
                <div class="method">
                    <i class="fa-solid fa-location-dot contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading">Location</h1>
                        <p class="para">Jl. Gereja Theresia No.04, RT.8/RW.4, <br> Gondangdia, Kec. Menteng, Kota Jakarta Pusat, <br> Daerah Khusus Ibukota Jakarta 10350</p>
                    </article>
                </div>
        
                <div class="method">
                    <i class="fa-solid fa-envelope contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading">Email</h1>
                        <p class="para">Email: bluetage@gmail.com</p>
                    </article>
                </div>
        
                <div class="method">
                    <i class="fa-solid fa-phone contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading">Phone</h1>
                        <p class="para">+62 851-2406-1509</p>
                    </article>
                </div>
            </div>
           </section>
      
        <!-- ends contact -->
        <!-- starts footer -->
        <footer>
            <div class="footerContainer">
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-google-plus"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footerNav">
                    <ul><li><a href="index.html">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#product">Product</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
        
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2024; Designed by <span class="designer">BLUETAGE</span></p>
            </div>
        </footer>
        <!-- ends footer -->
</body>
</html>