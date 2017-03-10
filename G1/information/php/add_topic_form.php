<?php
	require_once('auth.php');
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
    </nav>
    <div class="indexSignUp_LogIn">
        <a href="register_form.php">Sign Up</a>
        <a href="login_form.php">Log In</a>
    </div>   
    <!-- Main Page Content -->
	<main id="signupmain">




            <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <form id="form1" name="form1" method="post" action="add_topic.php">
                        <td>
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                <tr>
                                    <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
                                </tr>
                                <tr>
                                    <td width="14%"><strong>Topic</strong></td>
                                    <td width="2%">:</td>
                                    <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>Detail</strong></td>
                                    <td valign="top">:</td>
                                    <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
                                </tr>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>




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