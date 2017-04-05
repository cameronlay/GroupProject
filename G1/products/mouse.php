<?php
    // require_once('../php/auth.php');

    include '../php/functions.php';
    require_once('../php/config.php');
    session_start();

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    $tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>MKM Reviews</title>
   <style>
      
   </style>
   <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="icon" href="../images/titleimg2.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
    <!-- nav bar -->
    <nav>
        <div id="navwrapper">
            
                <ul>
                    <li>
                        <!-- Button is seperate from the div -->
                        <div class="dropdown"><a href="./mouse.php" class="dropdown">Mice</a>
                            <div class="dropdown_content">
                            <p><a href="mouse.php#pricebracketlow">$</a></p>
                            <p><a href="mouse.php#pricebracketmid">$$</a></p>
                            <p><a href="mouse.php#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="./keyboard.php" class="dropdown">Keyboard</a>
                            <div class="dropdown_content">
                            <p><a href="keyboard.php#pricebracketlow">$</a></p>
                            <p><a href="keyboard.php#pricebracketmid">$$</a></p>
                            <p><a href="keyboard.php#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="./monitor.php" class="dropdown">Monitor</a>
                            <div class="dropdown_content">
                            <p><a href="monitor.php#pricebracketlow">$</a></p>
                            <p><a href="monitor.php#pricebracketmid">$$</a></p>
                            <p><a href="monitor.php#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                
            <li>
                <a href="../index/index.php"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
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
                <a href="../index/logout.php">Log Out</a>
                <a href="../forum/add_topic_form.php">New Forum</a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="../index/register_form.php">Sign Up</a>
                    <a href="../index/login_form.php">Log In</a>
                </div>';
        }
    ?>

<!-- product content -->   
<main>
    <div id="contentwrapper">
        
        <div id="pagename">
                <h1 id="ptitle">
                Mice
                </h1>
            </div>
    
        
        <h2 id="pricebracketlow">$20-$50</h2>
            
            <div class="contentbox"> 
                
                <img src="../images/mouseprod1.jpg" alt="mouse1">

                <div class="textbox">
                
                 <h3 class="productName">Logitech G203</h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>6 programmable buttons</li>
                        <li>16.8M programmable RGB colors</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>No left-handed version</li>
                         <li>Not much different from previous Logitech mice</li>            
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(0)">Read More</button>
                
                <div class="extraText">
                
                <p>
                Logitech G203 mouse has a reasonable price with reasonable quality. Although it does not have a lot of extra 
                functions for gamers, it is cheap compared to other gaming mice while having other minor functions that make 
                users convenient. It allows up to 6000 DPI from 200 DPI which are programmable through its software. Also, it 
                has RGB colors for Logitech logo on the top of the mouse which is programmable through its software as well, 
                but users can do much more things with this software. Users can set each color on each gaming actions using 
                the software. One of the criteria that people are focusing on is durability. It lasts up to 10M clicks, 
                according to the Logitech sites. However, even though Logitech G203 is relatively new products, lots of gamers 
                say there isn’t much development compared to previous Logitech mice. Moreover, its two buttons are located on 
                the left-hand side of the mouse, meaning a left-handed person might get some difficulties using it. To sum up, 
                this mouse has acceptable quality with a quite good price, so it is worth to buying it if you want to get the 
                best mouse under CAD $50.
                </p>
                
                <button type="button" onclick="showLess(0)">Show Less</button>
                </div>
                
            </div>
            
            
            
            <div class="contentbox"> 
                
                <img src="../images/mouseprod2.jpg" alt="mouse1">

                <div class="textbox">
                
                 <h3 class="productName"> Asus ROG Sica </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>5000 DPI</li>
                        <li>Ambidextrous design</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>3 buttons and no thumb button</li>
                         <li>Unable to switch DPI on the fly</li>           
                    </ul>
                
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(1)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The Asus ROG Sica is a simple mouse with a sleek look designed for MOBA users. It is 
                a 5000 DPI ambidextrous mouse. It has left and right buttons that are separated from 
                the body and a clickable scroll wheel. You can swap out the switches on the mouse with 
                ease for more customization. It comes with an application (ROG Armory) to allow tweaking 
                of DPI from 50-5000 in increments of 50. It has a built in flash memory to save your 
                favorite profiles. It has only 3 buttons which may not be enough in terms of macro 
                customization. There isn’t a option to switch DPI on the fly. Overall the Asus ROG Sica 
                is a excellent, precise point and clicking mouse.
                
                </p>
                
                <button type="button" onclick="showLess(1)">Show Less</button>
                </div>
                
            
            </div>
            
        
        <h2 id="pricebracketmid"> $50-$80 </h2>
        
            <div class="contentbox"> 
                
                <img src="../images/mouseprod3.jpg" alt="mouse1">

                <div class="textbox">
                
                <h3 class="productName">Razer DeathAdder Chroma </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>RGB</li>
                        <li>Good price for decent DPI</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Non-adjustable DPI</li>
                         <li>Right-handed only</li>         
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(2)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The Razer DeathAdder Chroma is a popular series made by Razer. With a long time of 
                DeathAdder Series, this is one of the affordable gaming mouse that offers RGB color lighting. 
                For a Mice of its price it offers a decent DPI of 6400, leveled right between too fast or too slow. 
                It gives off a simple, smooth, and clean feel to it, and is easy to clean. To prevent damages to one 
                of the weak spots of electronics all razer products have all the cables fiber braided. As most modern 
                mouse is designed, the DeathAdder was made with the minds of a Right-handed user, it is not interchangeable. 
                The DPI is fixed at 6400, so you are unable to alter the DPI, but you can still set the sensitivity. 
                For more Advance functionality, you are required to install Razer Synapse on to your hard drive, and 
                require to run it for the full effect of the mouse.
                </p>
                
                <button type="button" onclick="showLess(2)">Show Less</button>
                </div>
                
            </div>
            
            
            <div class="contentbox"> 
                
                <img src="../images/mouseprod4.jpg" alt="mouse1">

                <div class="textbox">
                
                <h3 class="productName">Razer Mamba </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>16,000 DPI 5G laser sensor</li>
                        <li>Adjustable Click Force Technology</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Low charge speed</li>
                         <li>$220 price point</li>          
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(3)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The Razer Mamba while very expensive comes with a multitude of features. One of the 
                most notable is its Adjustable Click Force Technology, this allows the user to set the
                click strength to offer more or less resistance. Its laser sensor is capable of going 
                up to 16,000 DPI and tracking 210 inches per second. It also has the capability of both 
                wired and wireless modes, with the wireless lasting up to 20 hours of gaming on one charge. 
                The mouse also has 9 programmable buttons if you include the tiltable scroll wheel and fully 
                customizable RGB lighting, all this is done through Razer’s proprietary software Synapse 
                which is capable of saving different user profiles for when you are away from your computer. 
                It also comes with a braided cord for extra durability. This mouse is very comfortable for all 
                different types of grips such as palm, finger or claw due to how far back you are able to activate 
                the buttons especially in combination with the customizable click force. All in all if the 
                rather large price tag of $220 is in your budget it is definitely worth considering the Razer Mamba.

                </p>
                
                <button type="button" onclick="showLess(3)">Show Less</button>
                </div>
                
            </div>
            
        
        <h2 id="pricebrackethigh"> $80+ </h2>
        
        <div class="contentbox"> 
                
                <img src="../images/mouseprod5.jpg" alt="mouse1">

                <div class="textbox">
                
                <h3 class="productName"> Logitech G900 </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>Ambidextrous design</li>
                        <li>Very good sensor</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>No charging dock</li>
                         <li>Expensive</li>         
                    </ul>
                
                </div>
                
                <button class="readMore type="button" onclick="expandContent(4)">Read More</button>
                
                <div class="extraText">
                
                <p>
                At roughly $160, the G900 is Logitech’s most expensive mouse they have released. The G900 is 
                a brand new ambidextrous design that is not based on any of Logitech’s previous models and it 
                boasts many new and improved specifications. The device comes with a 6 foot braided cord that 
                can give the user the option of using the mouse wired or wireless. There are multiple programmable 
                buttons on the mouse that you can even remove as well as a scroll resistance control button, on-the-fly 
                DPI buttons, and a button to change between saved profiles or settings of the user. It’s sensor, the 
                PMW3366 is widely considered the best and most accurate sensor for any gaming mouse and doesn’t hinder 
                the battery life even when it’s used wirelessly. The mouse also utilizes Logitech’s bug free gaming software 
                that allows users to fine-tune multiple settings such as button configuration, pointer settings, lighting, and 
                macros on an easy to use interface. Overall the G900 is a highly customizable , accurate mouse with a light and 
                sleek design that fits both right handed and left handed users. It is fairly expensive, but you are paying for 
                arguably one of the best gaming mouses on the market.
                </p>
                
                <button type="button" onclick="showLess(4)">Show Less</button>
                </div>
                
        </div>
            
    </div>
            
        
    </main>
    <!-- footer -->
    <footer>
        <div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="../index/index.php">Home</a></li>
                <li><a href="../information/info.php#contactheader">Contact</a></li>
                <li><a href="../information/info.php">About Us</a></li>
            </ul>
        </div>
        <div class="middleleftcolumn">
            <ul>
                <li><a href="mouse.php">Mice</a></li>
                <li><a href="keyboard.php">Keyboard</a></li>
                <li><a href="monitor.php">Monitor</a></li>
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
                                echo '<a href="../index/register_form.php">Sign-Up</a>';
                            } else {
                                echo '<a href="../index/logout.php">Log-Out</a>';
                            }
                        ?>
                </li>
                <li><a href="../information/sitemap.php">Sitemap</a></li>
            </ul>
        </div>
        <p>&copy; Copyright 2017 | lol </p>
        </div>
    </footer>
    
    <script src="../styles/script.js"></script> 
</body>
</html>