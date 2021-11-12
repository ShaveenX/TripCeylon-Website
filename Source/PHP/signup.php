<?php
include ('config.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>

            Home
        </title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/ppagestyles.css">

        <script type="text/javascript" src="../js/lightbox-plus-jquery.min.js"></script>
        


        <!--icons from font awesome.com-->
        <script src="https://kit.fontawesome.com/f658ac2203.js" crossorigin="anonymous"></script>
        <!--fonts from google fonts-->

        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Piazzolla&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">

    </head>
    <body>

        <!--header-->
        <header>
            <div>
                <img src="../img/Logo-white.png" class="logo">
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="../html/Home.html">Home</a></li>
                <li><a href="../html/Hotel.html">Hotels</a></li>
                <li><a href="../html/Article.html">Articles</Article></a></li>
                <li><a href="Signup.html">Sign Up</a></li>
                <li><a href="Login.html">Login</a></li>
                <li><a href="#">
                    <i class="fa fa-user"></i>  &nbsp;  
                    Maneeshi Weemansa
                </a>
                <ul>
                    <li><a href="My Profile.html">My profile</a></li>
                    <li><a href="Login.html">Logout</a></li>
                </ul>
                </li>
            </ul>        
            </header>
        <!--/header-->    



        <div class="container" style="height: 100%;">
   
            <form class="form" action = "signup connect.php" method="POST" enctype="multipart/form-data" style="height: 80%;">
                <div class="contain">
                    <hr class="hr">
                    
                    <label><b>Full Name<b></label>
                    <input type="text" placeholder="Enter your name" name="name" required>
                    
                    <label><b>Email<b></label>
                    <input type="text" placeholder="Enter a valid email address" name="email" required>
                
                    <label><b>Password<b></label>
                    <input type="password" placeholder="Enter a password" name="pwd" required>
                
                    <label><b>Repeat password<b></label>
                    <input type="password" placeholder="Renter the password" name="repwd" required>
                
                    <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin:10px">Remember me</label>
                
                    <p>By creating this account you agree to our<a href="privacypolicy.html">Terms & Privacy</a></p>
                
                    <div class="clearfix">
                      <button type="button" class="cancel">Cancel</button>
                      <button type="submit" name="signup" class="signup">Sign Up</button>
                    </div>
                    </div>
                
                </div>
                </form>
    

            
            
        </div>





        <!--footer-->
        <div class="footer">
            <div class="footer-up">
                <div class="footer-section about">
                    <img src="../img/Logo-coloured.png" class="logo">
                    
                    
                    <p class="aboutp">
                        tripceylon.com built-up in 2020 by Team-Pentagon to fulfil a major shortcome of SriLankan tourism system. 
                        tripceylon.com is a user-friendly and simple platform which tourists can reserve hotels.
                    </p>
                    <div class="contact">
                        <i class="fas fa-phone"></i> &nbsp;  +9478829607 / +9420629233
                        <br>
                        <i class="fas fa-envelope"></i> &nbsp;  info@pentagon.com
                    </div>
                    <br><br>
                    <div class="social">
                        <a href="https://web.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    </div>
                    
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    
                    <ul class="qlinks">
                        <a href="Gallery.html">
                            <li>Gallery</li>
                        </a>

                        <a href="About Us.html">
                            <li>About Us</li>
                        </a>

                        <a href="Contact Us.html">
                            <li>Contact Us</li>
                        </a>

                        <a href="privacypolicy.html">
                            <li>Policy</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h2>Contact us</h2>
                    <form action="index-html" method="post">
                    <input type="email" name="email" class="contact-input" placeholder="Your email address...">
                    <br><br>
                    <textarea name="message" class="text-input" placeholder="Your message..."></textarea>
                    <br><br><br>
                    <button type="Submit" class="btn">
                        <i class="fas fa-paper-plane"></i>
                        send
                    </button>
                </form>
                
                </div>
            </div>
            <div class="footer-bottom">
                Copyright &copy 2020 by Team Pentagon
            </div>
        </div>
        <!--/footer-->   
        
        
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
    

    <!--Slick slider-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom script-->
    <script src="../js/scripts.js"></script>
    </body>
</html>