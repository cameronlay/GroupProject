<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum</title>
        <link rel="icon" href="../../images/titleimg2.ico"/>

        <style></style>
        <meta charset="utf-8">
            <link rel="stylesheet" href="../../styles/base.css" />
            <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
        </head>

    <body>
        <nav>
            <div id="navwrapper">
                <div id="navleft">
                    <ul>
                        <li>
                            <!-- Button is seperate from the div -->
                            <div class="dropdown">
                                <a href="../../products/mouse.html" class="dropdown">Mice</a>
                                <div class="dropdown_content">
                                    <p>
                                        <a href="../../products/mouse.html#pricebracketlow">$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/mouse.html#pricebracketmid">$$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/mouse.html#pricebrackethigh">$$$</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="../../products/keyboard.html" class="dropdown">Keyboard</a>
                                <div class="dropdown_content">
                                    <p>
                                        <a href="../../products/keyboard.html#pricebracketlow">$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/keyboard.html#pricebracketmid">$$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/keyboard.html#pricebrackethigh">$$$</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="../../products/monitor.html" class="dropdown">Monitor</a>
                                <div class="dropdown_content">
                                    <p>
                                        <a href="../../products/monitor.html#pricebracketlow">$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/monitor.html#pricebracketmid">$$</a>
                                    </p>
                                    <p>
                                        <a href="../../products/monitor.html#pricebrackethigh">$$$</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="../../index/index.html">
                    <img id="imgid" src="../../images/logonew.PNG" alt="Logo">
                </a>
                <div id="navright">
                    <ul>
                        <li>
                            <div class="dropdown">
                                <a href="../info.html" class="dropdown">About Us</a>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="../info.html#contactheader" class="dropdown">Contact</a>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="forum.php" class="dropdown">Forum</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="indexSignUp_LogIn">
            <a href="../information/signup.html">Sign Up</a>
            <a href="../information/signup.html">Log In</a>
        </div>
        <!-- Main Page Content -->
        <section>
            <div id="pagecontent">
                <div id="forumcontainer">




<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];

	$sql="SELECT * FROM $tbl_name WHERE id='$id'";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>
<?php
$tbl_name2="response"; // Switch to table "response"

$sql2="SELECT * FROM $tbl_name2 WHERE topic_id='$id'";
$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

while($rows=mysqli_fetch_array($result2)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Response</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

<?php
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_response.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td valign="top"><strong>Response</strong></td>
<td valign="top">:</td>
<td><textarea name="response" cols="45" rows="3" id="answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>




</div>
</div>
</section>
<!-- Footer -->
<footer>
<div class="footerconstraint">
<div class="bottomleftcolumn">
<ul>
<li>
<a href="../../index/index.html">Home</a>
</li>
<li>
<a href="../info.html#contactheader">Contact</a>
</li>
<li>
<a href="../info.html">About Us</a>
</li>
</ul>
</div>
<div class="middleleftcolumn">
<ul>
<li>
<a href="../../products/mouse.html">Mice</a>
</li>
<li>
<a href="../../products/keyboard.html">Keyboard</a>
</li>
<li>
<a href="../../products/monitor.html">Monitor</a>
</li>
</ul>
</div>
<div class="middlerightcolumn">
<ul>

<li>
<a href="forum.php">Forum</a>
</li>
</ul>
</div>
<div class="bottomrightcolumn">
<ul>
<li>
<a href="../signup.html">Sign-Up</a>
</li>
<li>
<a href="../sitemap.html">Sitemap</a>
</li>
</ul>
</div>
<p>&copy; Copyright 2017 | lol </p>
</div>
</footer>

</body>
</html>