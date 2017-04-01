<?php
    require_once('../php/auth.php');

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
   <title>
      Keyboard
   </title>
   <style>
      
   </style>
   <meta charset="utf-8">
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
				Keyboard
				</h1>
			</div>
	
		
        <h2 id="pricebracketlow">$50-$80</h2>
            
			<div class="contentbox"> 
				
				<img src="../images/keyboardprod1.png" alt="Corsair K55 RGB keyboard">

			    <div class="textbox">
                
                    <h3 class="productName"> Corsair K55 Keyboard</h3> 
				
                    <h4 class="proTitle">Pro's</h4>
				
                    <ul class="proList">
                        <li>10+ RGB modes</li>
                        <li>$70.00 RGB keyboard when most are priced at $130+</li>
                    </ul>	
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Membrane keyboard instead of mechanical</li>
                         <li>No per-key RGB lighting</li>			
                    </ul>
				
                </div>
				
				<button class="readMore" type="button" onclick="expandContent(0)">Read More</button>
				
				<div class="extraText">
				
				<p>The Corsair K55 RGB gaming keyboard is a cheap and effective gaming keyboard. 
				It has a membrane keyboard instead of mechanical one but it still performs well 
				and is satisfying to use. It has three-zone RGB backlighting system. It has 6 programmable 
				macro keys on the side in which you can assign single keystrokes or multi-key combos. 
				It has multimedia controls on the top to adjust volume without directly accessing the media playback system. 
				It comes with a soft detachable rubber wrist rest. It’s priced at $70 when most RGB keyboards are $130 or more. 
				It doesn’t have a mechanical keyboard which may affect some users due to the tactile feedback mechanical keyboards give. 
				It doesn’t have per-key RGB lighting. Overall the Corsair K55 RGB keyboard is a very good keyboard for its price range.</p>
				
                <button type="button" onclick="showLess(0)">Show Less</button>
				
                </div>
                
                
				
			</div>
			
			<h2 id="pricebracketmid">$80-$150</h2>
			
			<div class="contentbox"> 
				
				<img src="../images/keyboardprod2.png" alt="razer blackwidow ultimate x keyboard">

			    <div class="textbox">
                
                    <h3 class="productName">Razer Black Widow X Ultimate</h3> 
				
                    <h4 class="proTitle">Pro's</h4>
				
                    <ul class="proList">
                        <li>Razer Green Switch keys / Cherry MX Blue keys offer high keystroke lifespan</li>
                        <li>Easy to remove and clean</li>
                    </ul>	
				
                    <h4 class="conTitle">Con's</h4>
				
                    <ul class="conList">
						<li>Razer Synapse required</li>
						<li>Razer green switches are custom made and replacements are difficult to find</li>			
                    </ul>
                
                
                </div>
				
				<button class="readMore" type="button" onclick="expandContent(1)">Read More</button>
				
				<div class="extraText">
				
                <p>Razer Black widow is a very nice keyboard with many options of Switch keys.  For $120.00, You can have the option 
                between Razer Green Switch keys or the Standard Cherry MX Blue keys, with some green keyboard illumination. The Razer Switch 
                green keys is a modified and optimized version of the standard green switch keys, but with longer lasting life span. 
                The regular green switch keys have an average lifespan of 50 million key presses, while the Razer green switch keys have an 
                average lifespan of 80 million presses. It offers a gaming mode which prevents you from accidently pressing alt F4 or anything 
                options that would force quit you out of the game. It has a programmable macro keys, and are also switchable through profiles on 
                the fly. Like all razer products, the Black Widow also has a braided fiber cable to prevent too much bending and damages to the cable. 
                The down side is that to use the Macro option, you need to install Razer Synapses. The Pulsing effect of the Illumination on the 
                keyboard also requires Razer Synapses. Because of Razer’s special unique design of the keys and the green switches, if 
                the keyboard ever breaks down, it is often hard to find replacements.
                </p>
                
                
                <button type="button" onclick="showLess(1)">Show Less</button>
                
                </div>
				
			
			</div>
		
		
			<div class="contentbox"> 
				
				<img src="../images/keyboardprod3.png" alt="K70 rapidfire rgb keyboard">

			    <div class="textbox">
                
                <h3 class="productName">Corsair K70 Rapidfire Keyboard</h3> 
				
                    <h4 class="proTitle">Pro's</h4>
				
                    <ul class="proList">
                        <li>Cherry MX Speed switches release quicker</li>
                        <li>Aluminum frame</li>
                    </ul>	
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>Membrane keyboard instead of mechanical</li>
                         <li>No per-key RGB lighting</li>			
                    </ul>
                </div>
				
				<button class="readMore" type="button" onclick="expandContent(2)">Read More</button>
				
				<div class="extraText">
                
                <p>The Corsair K70 RapidFire is around $150 and it’s one of Corsair’s newest products that utilizes 
                the Cherry MX Speed switches. These switches are similar to the Cherry MX Reds, but with a 1.2mm 
                actuation point compared 2.0mm meaning the switch will release quicker after being pressed. The 
                keyboard also has anti-ghosting and full key rollover to track every single key that was pressed 
                regardless of how many and how fast the person presses on the keys. It’s design is regarded as one 
                of the best because of the key separation and single aluminum frame. It also comes with a red backlight, 
                detachable wrist rest, textured keycaps, multimedia controls, and software for macro customization. 
                Overall the keyboard is great for its price and perfect for gamers and everyday users who want a comfortable 
                and responsive mechanical keyboard.</p>
                
                <button type="button" onclick="showLess(2)">Show Less</button>
				
				</div>
				
			</div>
			
            <h2 id="pricebrackethigh"> $150+ </h2>
			
			<div class="contentbox"> 
				
				<img src="../images/keyboardprod4.png" alt="topre real force">

			    <div class="textbox">
                
                <h3 class="productName">Topre REAL FORCE RGB Keyboard</h3> 
				
                    <h4 class="proTitle">Pro's</h4>
				
                    <ul class="proList">
                        <li>Electrostatic capacitive switches able to detect very little
                        pressure difference</li>
                        <li>25% Faster than mechanical keyboards</li>
                    </ul>	
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>$250 price point</li>
                         <li>Can't test or try the keyboard before purchasing</li>			
                    </ul>
                
                </div>
				
				<button class="readMore" type="button" onclick="expandContent(3)">Read More</button>
				
				<div class="extraText">
				
				<p>The Topre REALFORCE RGB keyboard is one of the most expensive keyboards around, except customizing keyboards. 
                Also, it has a limited quantity, so no one can try before buying it in the store. However, it is using new technology 
                which is called electrostatic capacitive switches. It is more sensitive than mechanical keyboards, which in turn results 
                in fast responsiveness for gaming or other stuff. Additionally, users can customize RGB colors per key using software, which 
                can be applied to tons of graphic design that users want. Because of the new technology called electrostatic capacitive switches, 
                users also can customize their keyboards pressure which means some keys can be touched at 1.5mm or some keys can be touched at 2.2mm 
                or even 3.0mm. Each key reacts very sensitively, giving users great feeling by touching keys minimum 45g pressure. To sum up, 
                it is one of the most expensive keyboards in the world, but its functions make the products worth buying it.
                 </p>
                
                <button type="button" onclick="showLess(3)">Show Less</button>
                
                </div>
				
			</div>
        
		<div class="contentbox"> 
				
				<img src="../images/keyboardprod5.png" alt="das pro 4">

			    <div class="textbox">
                
                <h3 class="productName">Das Professional 4 Keyboard</h3> 
				
                    <h4 class="proTitle">Pro's</h4>
				
                    <ul class="proList">
                        <li>Cherry MX Brown - tactile feedback switches</li>
                        <li>N-Key rollover USB feature</li>
                    </ul>	
                    
                    <h4 class="conTitle">Con's</h4>
                    
                    <ul class="conList">
                         <li>No backlight for keys</li>
                         <li>No macro keys</li>			
                    </ul>
                
                
                </div>
				
				<button class="readMore" type="button" onclick="expandContent(4)">Read More</button>
				
				<div class="extraText">
                
                <p> 
                 The Das Keyboard 4 Professional doesn’t look like a typical “gamer” keyboard. It doesn’t have any 
                 backlighting and comes in a plain matte black finish which leads it to having more of a “professional” 
                 look as the name of it suggests. Some extra features that it does include consist of; N-key rollover through USB, 
                 this means that each key is scanned independently which allows many keys to be correctly detected regardless of how 
                 many keys are pressed at once, a full set of media control buttons that allow you to pause/play and skip forward and 
                 backwards as well as an oversized volume knob, also the rubber raiser on the bottom used to give it a more ergonomic tilt 
                 doubles as a detachable full size ruler which may or may not come in handy. It also features 2 USB 3.0 ports which can prove
                 to be very useful. The faceplate is anodized aluminium which gives the keyboard a very sturdy feel. The keys all feature laser 
                 etched characters so there is no need to worry about fading letters. The cord only features a single USB type-A connector which 
                 leads to less clutter when it is plugged in but on the downside that it is not braided but simply plastic. Overall the
                 Das Keyboard 4 Professional is a very good keyboard for someone looking for a solid keyboard without the “gaming” appearance.
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
				<li><a href="../index/register_form.php">Sign-Up</a></li>
                <li><a href="../information/sitemap.php">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
    </footer>
	
<script src="../styles/script.js"></script>	
	
</body>
</html>