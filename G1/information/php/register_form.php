<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Forum</title>
   <link rel="icon" href="../../images/titleimg2.ico"/>
   
   <style></style>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../../styles/base.css" />
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
   <nav>
        <div id="navwrapper">
            
                <ul>
                    <li>
						<!-- Button is seperate from the div -->
						<div class="dropdown"><a href="../../products/mouse.html" class="dropdown">Mice</a>
							<div class="dropdown_content">
							<p><a href="../../products/mouse.html#pricebracketlow">$</a></p>
							<p><a href="../../products/mouse.html#pricebracketmid">$$</a></p>
							<p><a href="../../products/mouse.html#pricebrackethigh">$$$</a></p>
							</div>
						</div>
					</li>
                    <li><div class="dropdown"><a href="../../products/keyboard.html" class="dropdown">Keyboard</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/keyboard.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/keyboard.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/keyboard.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="../../products/monitor.html" class="dropdown">Monitor</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/monitor.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/monitor.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/monitor.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                
            <li>
                <a href="../../index/index.html"><img id="imgid" src="../../images/logonew.PNG" alt="Logo"></a>
            </li>

                    <li><div class="dropdown"><a href="../info.html" class="dropdown">About Us</a></div></li>
                    <li><div class="dropdown"><a href="../info.html#contactheader" class="dropdown">Contact</a></div></li>
                    <li><div class="dropdown"><a href="forum.php" class="dropdown">Forum</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="indexSignUp_LogIn">
        <a href="register_form.php">Sign Up</a>
        <a href="login_form.php">Log In</a>
    </div>   
    <!-- Main Page Content -->
	<main id="signupmain">
    <!-- center image is random placeholder -->
    <div id="centerlogo"> 
      <a href="#"><img id="largeLogo" src ="../../images/logonew.PNG" alt="Logo"/></a>
    </div>
  
<div id="signupform">



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

<form id="registerForm" name="registerForm" method="post" action="register.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name </th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
    <tr>
      <th width="124">Login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>





</div>
</main>
	<!-- Footer -->
   <footer>
		<div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="../../index/index.html">Home</a></li>
                <li><a href="../info.html#contactheader">Contact</a></li>
				<li><a href="../info.html">About Us</a></li>
			</ul>
		</div>
		<div class="middleleftcolumn">
			<ul>
                <li><a href="../../products/mouse.html">Mice</a></li>
                <li><a href="../../products/keyboard.html">Keyboard</a></li>
                <li><a href="../../products/monitor.html">Monitor</a></li>
			</ul>
		</div>
		<div class="middlerightcolumn">
			<ul>

                <li><a href="forum.php">Forum</a></li>				
            </ul>
        </div>
        <div class="bottomrightcolumn">
            <ul>
				<li><a href="../signup.html">Sign-Up</a></li>
                <li><a href="../sitemap.html">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
   </footer>
   
</body>
</html>