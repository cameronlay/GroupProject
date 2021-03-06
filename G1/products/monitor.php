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
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <!-- <link rel="stylesheet" href="NAME.css"> -->
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
                    <div class="dropdown"><a href="./mouse.php" class="dropdown">Mouse</a>
                        <div class="dropdown_content">
                            <p><a href="mouse.php#pricebracketlow">$</a></p>
                            <p><a href="mouse.php#pricebracketmid">$$</a></p>
                            <p><a href="mouse.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="./keyboard.php" class="dropdown">Keyboard</a>
                        <div class="dropdown_content">
                            <p><a href="keyboard.php#pricebracketlow">$</a></p>
                            <p><a href="keyboard.php#pricebracketmid">$$</a></p>
                            <p><a href="keyboard.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="./monitor.php" class="dropdown">Monitor</a>
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
                <li><div class="dropdown"><a href="../information/info.php#contactheader" class="dropdown">Contact Us</a></div></li>
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
                <a href="../index/logout.php"><span>Log Out</span></a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="../index/register_form.php"><span>Sign Up</span></a>
                    <a href="../index/login_form.php"><span>Log In</span></a>
                </div>';
        }
    ?>

<!-- product content -->   
<main>

		<div id="leftNav">
		<h3 id="filter"> Filter by Price </h3>
		<form>
        
			<span>$100 - $200</span><br>
            <label class="switch" for="cheap"><input id="cheap" type="checkbox" name="price" value="cheap" onclick="filtering('cheap', 'cheapContent')" checked><div class="slider"></div></label><br>
			<span>$200 - $400</span><br>
            <label class="switch" for="modest"><input id="modest" type="checkbox" name="price" value="modest" onclick="filtering('modest', 'modestContent')" checked><div class="slider"></div></label><br>
			<span>$400+</span><br>
            <label class="switch" for="expensive"><input id="expensive" type="checkbox" name="price" value="expensive" onclick="filtering('expensive', 'expensiveContent')" checked><div class="slider"></div></label>
		
		</form>
		</div>
		
    <div id="contentwrapper">
        
        <div id="pagename">
                <h1 id="ptitle">
                Monitor
                </h1>
            </div>
    
        <div id="cheapContent">
        <h2 id="pricebracketlow">$100-$200</h2>
            
            <div class="contentbox"> 
                
                <img src="../images/monitorprod1.jpg" alt="monitor">

                <div class="textbox">
                
                <h3 class="productName"> Asus VX238H </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>Asus features such as Eye Care Technology</li>
                        <li>1ms response time</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>No VESA mount</li>
                         <li>No height adjustment</li>          
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(0)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The Asus VX238H monitor has an extremely fast response time and a crisp 1920x1080 resolution for 
                its $180 price range. It’s perfectly suitable for gaming as well as everyday use. The 1ms response time
                offers a flawless, fluid gaming experience. It has many features such as  ASUS’s Smart Contrast Ratio 
                (ASCR) adjusts the luminance in too dark and too bright areas for a optimal movie watching and gaming 
                experience. The monitor is not VESA compatible so you would need to purchase a separate fitting to mount 
                it into the wall. The monitor can tilt up to 25 degrees, but lacks other ergonomic functions such as height 
                adjustment. The quality of speakers are mediocre, but they are more of a secondary accessory. Overall the 
                ASUS VX238H is an excellent monitor for anybody on a tight budget epsecially with the features that Asus offers
				for this monitor.
                </p>
                <a class="forumAddTopic" href="../forum/add_topic_form.php">Add Topic</a>
                
                <button type="button" onclick="showLess(0)">Show Less</button>
                </div>
                
            </div>
        </div>
		<div id="modestContent">
        <h2 id="pricebracketmid"> $200-$400 </h2>   
            
            <div class="contentbox"> 
                
                <img src="../images/monitorprod2.jpg" alt="monitor">

                <div class="textbox">
                
                <h3 class="productName"> Benq XL2411z </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>Highly customizable settings and utilizes saved profiles</li>
                        <li>Blur reduction feature</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Lacking color</li>
                         <li>No DisplayPort</li>            
                    </ul>
                
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(1)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The BenQ XL2411z offers a crisp and clear display at 1920 x 1080 resolution that compares to the colour 
                and image quality of high end televisions. It has a $300 CDN price point. This monitor sits at 24 inches and 
				it’s a suitable for any particular desk space whether it’s for work, leisure, or gaming use. For gamers, 
				it’s ideal for monitors to have a low response time, and high refresh rate for optimal gaming experience. 
				The monitor settings are highly customizable and utilizes saved profiles to quickly switch between optimal 
				movie viewing settings,picture viewing, gaming, etc. One of the major functionalities the monitor includes is
				the ability to change blur reduction and black equalizer to provide the most preferred settings for every user. 
				The monitor itself is physically very ergonomic and can be oriented many different ways to fit positioning needs. 
				Having high a quality monitor along with optimal refresh rate is essential for all gamers to take their experience 
				to the next level. The BenQ XL2411z one of the most affordable monitors that meets all the needs of even professional 
                gamers. Overall, the quality and customer support of this company is highly regarded as one of the best and it 
                shows with its affiliation in multiple large gaming companies across the world.
                </p>
                <a class="forumAddTopic" href="../forum/add_topic_form.php">Add Topic</a>
                
                <button type="button" onclick="showLess(1)">Show Less</button>
                </div>
                
            
            </div>
        
            <div class="contentbox"> 
                
                <img src="../images/monitorprod3.jpg" alt="monitor">

                <div class="textbox">
                
                <h3 class="productName"> ASUS VS247H-P </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>Different display and lighting options</li>
                        <li>Affordable </li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Not optimized for intense gaming</li>
                         <li>Max refresh rate is 70hz</li>          
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(2)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The ASUS VS247 is a moderately priced monitor at $200 CDN for its type. It is a optimal monitor if you are tight 
                in space. It offers a HDMI and VGA input for old graphics cards or new cards. It also has some small 
                in-built speakers if you decide to plug a console in it. It is light weight and it offers decent refresh 
                rate with a HD 1920x1080 Monitor size. Like most modern monitors, it has many monitor lighting options 
                and all are adjustable to fit what makes your eyes comfortable. With Asus as the Manufacturer, their services, 
                resources and customer aid are also helpful in case if you need help. Although it is a decent multi use monitor, 
                it is not optimized fully for gaming. It does not offer G-Sync or support NVidia 3D Vision.

                </p>
                <a class="forumAddTopic" href="../forum/add_topic_form.php">Add Topic</a>
                
                <button type="button" onclick="showLess(2)">Show Less</button>
                </div>
                
            </div>
        </div>
		<div id="expensiveContent">
        <h2 id="pricebrackethigh"> $400+ </h2>
            
            <div class="contentbox"> 
                
                <img src="../images/monitorprod4.jpg" alt="monitor">

                <div class="textbox">
                
                <h3 class="productName"> LG 34UC88-B </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>3440 x 1440 resolution</li>
                        <li>Many features</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>No G-Sync support</li>
                         <li>Limited to 75hz refresh rate</li>          
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(3)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The LG monitor 34UC88-B is one of the most expensive monitors you can see in the market. Its $1000 CDN price is almost 
                equivalent with standard TV . It has a 3440x1440 resolution, 21:9, which is nowadays supported by most games, 
                with UltraWide QHD which is 1.8 times larger pixel area than UltraWide Full HD. It can display more than 1 billion 
                colors which cover 99% of sRGB spectrum. It also supports USB 3.0 quick charging which is 4 times faster than normal 
                USB 3.0 at the backside of the monitor, so that users can enjoy quick charging while playing a game or working. Moreover, 
                users are able to control volume, brightness, picture mode presets, screen split, etc. without using software and physical button, 
                but using a few clicks of a mouse. Because it is quite bigger than normal monitor, users can split the display balanced, 
                with 2, 3, and 4 screens. If users add options that have Thunderbolt, they can use Apple products which are perfectly compatible 
                with the monitor. In addition, it supports many functions for gamers, which are called FreeSync and Game Mode. 
                Those two functions make the screen clearer by eliminating tearing and stuttering. Overall, It is a bit expensive 
                regarding computer monitor, but it perfectly fits for people who want the big screen that they can do everything, 
                it is the best monitor concerning expensive monitors.
                </p>
                <a class="forumAddTopic" href="../forum/add_topic_form.php">Add Topic</a>
                
                <button type="button" onclick="showLess(3)">Show Less</button>
                </div>
                
            </div>
			
        
        <div class="contentbox"> 
                
                <img src="../images/monitorprod5.jpg" alt="monitor">

                <div class="textbox">
                
                <h3 class="productName"> Dell S2716DG </h3> 
                
                    <h4 class="proTitle">Pro's</h4>
                
                    <ul class="proList">
                        <li>144hz refresh rate</li>
                        <li>Supports G-Sync</li>
                    </ul>   
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>G-sync doesn't support AMD graphics cards</li>
                         <li>TN panel less precise colors than IPS</li>         
                    </ul>
                
                </div>
                
                <button class="readMore" type="button" onclick="expandContent(4)">Read More</button>
                
                <div class="extraText">
                
                <p>
                The Dell S2716DG while on the more expensive side at ~$700 than many monitors with similar specs does 
                come with many benefits. One of them being the excellent customer service and quality control that has 
                come to be expected from brands such as Dell. As for size it sits in the sweet spot for 1440p screens at 
                27 inches which gives it approximately the same pixel density as a 1080p screen at 23 inches, this will 
                make the transition from cheaper monitors as things such as text and icons will stay about the same size. 
                While the TN panel that it uses may not have as precise or vibrant color representation of IPS panels it 
                allows it to boast a 1 ms GTG  response time (the time it takes a pixel to go from grey to grey), this is 
                good for more competitive games such as League of Legends or Counter-Strike where even the smallest amount 
                of input lag can make the difference. Two other features it offers that benefit gaming are the 144 hz 
                refresh rate and the nVidia G-Sync technology. A 144 hz refresh rate is over double that of a standard
                monitor which gives a much smoother user experience in everything from web browsing to gaming. G-Sync 
                guarantees that no frame tearing and a smooth experience is had for anyone with a nVidia GPU.
                </p>
                <a class="forumAddTopic" href="../forum/add_topic_form.php">Add Topic</a>
                
                <button type="button" onclick="showLess(4)">Show Less</button>
                </div>
                
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