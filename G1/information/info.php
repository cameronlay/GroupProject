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
   <link rel="icon" href="../images/titleimg2.ico"/>
   <style>
      
   </style>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../styles/base.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">   
   <script src="../styles/script.js"></script>
</head>

<body>
    <nav>
        <div id="navwrapper">
            
            <ul>
                <li>
		    <!-- Button is seperate from the div -->
                    <div class="dropdown"><a href="../products/mouse.php" class="dropdown">Mice</a>
                    <div class="dropdown_content">
                    <p><a href="../products/mouse.php#pricebracketlow">$</a></p>
                    <p><a href="../products/mouse.php#pricebracketmid">$$</a></p>
                    <p><a href="../products/mouse.php#pricebrackethigh">$$$</a></p>
        </div>
        </div>
             </li>
                    <li><div class="dropdown"><a href="../products/keyboard.php" class="dropdown">Keyboard</a>
                            <div class="dropdown_content">
                                <p><a href="../products/keyboard.php#pricebracketlow">$</a></p>
                                <p><a href="../products/keyboard.php#pricebracketmid">$$</a></p>
                                <p><a href="../products/keyboard.php#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="../products/monitor.php" class="dropdown">Monitor</a>
                            <div class="dropdown_content">
                                <p><a href="../products/monitor.php#pricebracketlow">$</a></p>
                                <p><a href="../products/monitor.php#pricebracketmid">$$</a></p>
                                <p><a href="../products/monitor.php#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="../index/index.php"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
                    </li>
                    <li><div class="dropdown"><a href="info.php" class="dropdown">About Us</a></div></li>
                    <li><div class="dropdown"><a href="info.php#contactheader" class="dropdown">Contact</a></div></li>
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
    
    <main id="infomain">
        <h1 class="infoheader">About Us</h1>
            <div id="topthree">
		<div id="cameroninfo">
			<p><a href="#"><img class="profilepic" src="../images/igloo.jpg" alt="Cartoon Eskimo"/></a></p>
			<p> Cameron</p>
			<p>Duis a leo ac ipsum tempor sollicitudin. Praesent risus purus, porta iaculis cursus et, vehicula imperdiet mauris. 
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel tincidunt magna. 
			Praesent ex dolor, elementum eu convallis vitae, rhoncus dictum metus.</p>
		</div>
		<div id="edmundinfo">
			<p><a href="#"><img class="profilepic" src="../images/SungukHam.JPG" alt="Edmund Ham"/></a></p>
			<p>Edmund</p>
			<p>Duis a leo ac ipsum tempor sollicitudin. Praesent risus purus, porta iaculis cursus et, vehicula imperdiet mauris. 
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel tincidunt magna. 
			Praesent ex dolor, elementum eu convallis vitae, rhoncus dictum metus.</p>
		</div>
		<div id="jasoninfo">
                        <p><a href="#"><img class="profilepic" src="../images/jason.jpg" alt="Jason Huang"/></a></p>		
                        <p>Jason</p>
                        <p>Duis a leo ac ipsum tempor sollicitudin. Praesent risus purus, porta iaculis cursus et, vehicula imperdiet mauris. 
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel tincidunt magna. 
                        Praesent ex dolor, elementum eu convallis vitae, rhoncus dictum metus.</p>
                </div>
            </div>
		<div id="bottomtwo">		
		<div id="danielinfo">
			<p><a href="#"><img class="profilepic" src="../images/daniel.jpg" alt="Daniel Zhang"/></a></p>
			<p>Daniel</p>
			<p>Duis a leo ac ipsum tempor sollicitudin. Praesent risus purus, porta iaculis cursus et, vehicula imperdiet mauris. 
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel tincidunt magna. 
			Praesent ex dolor, elementum eu convallis vitae, rhoncus dictum metus.</p>
		</div>
		<div id="josephinfo">
			<p><a href="#"><img class="profilepic" src="../images/joseph.png" alt="Joseph Yang"/></a></p>
			<p>Joseph</p>
			<p>Duis a leo ac ipsum tempor sollicitudin. Praesent risus purus, porta iaculis cursus et, vehicula imperdiet mauris. 
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel tincidunt magna. 
			Praesent ex dolor, elementum eu convallis vitae, rhoncus dictum metus.</p>
		</div>
		</div>
		<h1 class="infoheader" id="contactheader">Contact Us</h1>
		<div id="contactus">
			<p>If you have any questions or concerns about us or the site please feel free to contact us through the form below.</p>
		</div>
		<form id="emailForm" name="emailForm" method="post" 
                      onsubmit="return infoValidate()" action="php/formmail.php"><br/>
		<input type="hidden" name="recipients" value="mkbmreviews@gmail.com" />
		<input type="hidden" name="subject" value="Sample FormMail Testing" />
		<input type="hidden" name="good_url" value="thankyou.html" />
			<table id="emailtable">
				<tbody>
					<tr>
						<td><label for="mail">Email:</label></td>					
						<td><input type="text" id="mailUs" placeholder="abc@example.abc" name="email"
                                                           class="formfield"/></td>
					</tr>
                                        <tr>
						<td colspan="2" id="errEmailValid">Please enter a valid Email</td>
                                        </tr>
                                        <tr> 
						<td><label for="subject">Subject:</label></td> 	
						<td><input type="text" id="subject" name="subject" 
                                                           class="formfield"/></td>

					</tr>
                                        <tr>
						<td colspan="2" id="errEmptyField">Please complete all fields</td>
                                        </tr>
                                        <tr> 
						<td></td>
						<td><textarea rows="4" cols="50" id="emailReply"
                                                              placeholder="Thanks for sharing with us!"
                                                              name="comment" form="emailForm"></textarea></td>

					</tr>
					<tr id="sendbutton"> 
						<td></td>
						<td><input id="send" name="send" value="Send" 
                                                           type="submit"/></td>
					</tr>
				</tbody>
			</table>
		</form>
		
   </main>
   <footer>
		<div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="../index/index.php">Home</a></li>
                <li><a href="info.php#contactheader">Contact</a></li>
				<li><a href="info.php">About Us</a></li>
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

                <li><a href="php/forum.php">Forum</a></li>				
            </ul>
        </div>
        <div class="bottomrightcolumn">
            <ul>
				<li><a href="../index/register.php">Sign-Up</a></li>
                <li><a href="sitemap.php">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
   </footer>
</body>
</html>