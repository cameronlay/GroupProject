<?php
	session_start();


  
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
   
   <style></style>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../styles/base.css" />
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
                <a href="./logout.php">Log Out</a>
                <a href="../forum/add_topic_form.php">New Forum</a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="./register_form.php">Sign Up</a>
                    <a href="./login_form.php">Log In</a>
                </div>';
        }
    ?>

	<!-- Main Page Content -->
	<main id="signupmain">
    <!-- center image is random placeholder -->
    <div id="centerlogo"> 
      <a href="#"><img id="largeLogo" src ="../images/logonew.PNG" alt="Logo"/></a>
    </div>




<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<p>&nbsp;</p>
<form id="loginForm" name="loginForm" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>





  </main>
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
				<li><a href="./register_form.php">Sign-Up</a></li>
                <li><a href="../information/sitemap.php">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
   </footer>
   
</body>
</html>


	