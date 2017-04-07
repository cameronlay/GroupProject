<?php
    include '../php/functions.php';
    require_once('../php/config.php');
    session_start();

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    $tbl_name="topic"; // Table name
?>

    
<!-- ========================================================== -->
<!--    Created by Devit Schizoper                              -->
<!--    Created HomePages http://LoadFoo.starzonewebhost.com    -->
<!--    Created Day 01.12.2006                                  -->
<!-- ========================================================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>MKM Reviews</title>
    <link rel="icon" href="../images/titleimg2.ico"/>
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link rel="stylesheet" href="../styles/base.css" />
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../styles/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
</head>

<body>
   <nav>
        <div id="navwrapper">
            <ul>
                <li>
                    <!-- Button is seperate from the div -->
                    <div class="dropdown"><a href="../products/mouse.php" class="dropdown">Mouse</a>
                        <div class="dropdown_content">
                            <p><a href="../products/mouse.php#pricebracketlow">$</a></p>
                            <p><a href="../products/mouse.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/mouse.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/keyboard.php" class="dropdown">Keyboard</a>
                        <div class="dropdown_content">
                            <p><a href="../products/keyboard.php#pricebracketlow">$</a></p>
                            <p><a href="../products/keyboard.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/keyboard.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/monitor.php" class="dropdown">Monitor</a>
                        <div class="dropdown_content">
                            <p><a href="../products/monitor.php#pricebracketlow">$</a></p>
                            <p><a href="../products/monitor.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/monitor.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="./index.php"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
                </li>
                <li><div class="dropdown"><a href="../information/info.php" class="dropdown">About Us</a></div></li>
                <li><div class="dropdown"><a href="../information/info.php#contactheader" class="dropdown">Contact</a></div></li>
                <li><div class="dropdown"><a href="../forum/forum.php" class="dropdown">Forum</a></div></li>
            </ul>
        </div>
    </nav>

    <?php
        
        if (isLoggedIn()) {
            echo '
            <div class="indexSignUp_LogIn">
                <span>Hi '.$_SESSION['SESS_FIRST_NAME'].
                '</span>
                <a href="./logout.php"><span>Log Out</span></a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="./register_form.php"><span>Sign Up</span></a>
                    <a href="./login_form.php"><span>Log In</span></a>
                </div>';
        }
    ?>
    
<!--SLIDE SHOW IMAGES-->
    <main id="indexMainWrapper">
        <div class="siteInfoIndex">
            MOUSE<br>KEYBOARD<br>MONITOR<br>GAMING PERIPHERAL REVIEWS
        </div>
        <div class="indexPictures">
            <!-- <p class="indexPicturesText">MKM<br>REVIEWS</p> -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="../images/monitorslide.jpg" alt="Main Pictures">
                </div>
                <div class="mySlides fade">
                    <img src="../images/keyboardslide.jpg" alt="Main Pictures">
                </div>
                <div class="mySlides fade">
                    <img src="../images/mouseslide.jpg" alt="Main Pictures">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
            </div>
            <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div><!-- 
            <img src="../images/monitortransparent_mini.jpg" alt="Main Pictures">

            <img src="../images/keyboardtransparent_mini.jpg" alt="Main Pictures">

            <img src="../images/micetransparent_mini.jpg" alt="Main Pictures"> -->
        </div>
    </main>


    <!--SLIDE SHOW SCRIPT-->
    <script>
//   $(function(){
//     $('.indexPictures img:gt(0)').hide(); 
//     setInterval(function(){
//     $('.indexPictures :first-child').fadeOut(1000)
//     .next('img').fadeIn(1000)
//     .end().appendTo('.indexPictures');}, 
//       4700);
// });

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

var slideshowIndex = 0;
showSlides1();

function showSlides1() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideshowIndex++;
    if (slideshowIndex> slides.length) {slideshowIndex = 1} 
    slides[slideshowIndex-1].style.display = "block"; 
    setTimeout(showSlides1, 4500); // Change image every 2 seconds
}

    </script>



<!-- Footer -->
   <footer>
        <div class="footerconstraint">
            <div class="bottomleftcolumn">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="../information/info.php#contactheader">Contact</a></li>
                    <li><a href="../information/info.php">About Us</a></li>
                </ul>
            </div>
            <div class="middleleftcolumn">
                <ul>
                    <li><a href="../products/mouse.php">Mice</a></li>
                    <li><a href="../products/keyboard.php">Keyboard</a></li>
                    <li><a href="../products/monitor.php">Monitor</a></li>
                </ul>
            </div>
            <div class="middlerightcolumn">
                <ul>
                    <li><a href="../forum/forum.php">Forum</a></li>
                </ul>
            </div>
            <div class="bottomrightcolumn">
                <ul>
                    <li>
                        <?php
                            if (!isLoggedIn()) {
                                echo '<a href="./register_form.php">Sign-Up</a>';
                            } else {
                                echo '<a href="./logout.php">Log-Out</a>';
                            }
                        ?>
                    </li>
                    <li><a href="../information/sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <p>&copy; Copyright 2017 | MKM Reviews, All Rights Reserved </p>
        </div>
    </footer>
</body>
</html>