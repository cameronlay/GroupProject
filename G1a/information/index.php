<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="LoadFoO" />
	<meta name="description" content="Site description" />
	<meta name="keywords" content="key, words" />
	<title>LoadFoO [V2]</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="js/textsizer.js"></script>
	<script type="text/javascript" src="js/rel.js"></script>
</head>

<body>
<div id="wrap">
<div id="top">
<h2><a href="#" title="Back to main page">LoadFoO [V2]</a></h2>
<div id="menu">
<ul>
<li><a href="#" class="current">home</a></li>
<li><a href="#">about</a></li>
<li><a href="#">portofolio</a></li>
<li><a href="#">contact</a></li>
</ul>
</div>
</div>
<div id="content">
<div style="float: right;"><a href="javascript:ts('body',1)">[+]</a> | <a
href="javascript:ts('body',-1)">[-]</a></div>
<div id="left">
<h2>Welcome to LoadFoO [V1]</h2>
<p>Text Content Text <a href="#">Content Text</a> Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content.</p>
 <ul>
 <li>ul-li test.</li>
 <li>ul-li test.</li>
 <li>ul-li test.</li>
 <li>ul-li test.</li>
 <li>ul-li test.</li>
 </ul>
 <h2>Functionality or performance</h2>
 <p>Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content Text Content.
 </p>
</div>
<div id="right">
	<div class="box">
		<h2 style="margin-top:17px">Recent Entries</h2>
		<ul>
		<?php
			$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
			$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
			$count = min(5, mysqli_num_rows($result));
			if($count==0)
				echo "<li>No topics</li>";
			else
				for($i=0; $i < $count; $i++){
					$row=mysqli_fetch_array($result);
					echo '<li><a href="view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
				}
		?>
		</ul>
		<?php
			if (isLoggedIn()){
				echo '<a href="logout.php">Logout</a><br/>';
				echo '<a href="forum.php">Go to forum</a><br/>';
				echo '>><a href="add_topic_form.php">Create new topic</a>';
			} else {
				echo '<a href="login_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
		?>
	</div>
<ul id="nav">
	<li><a href="#Home">Home</a></li>
	<li><a href="#Archive">Archive</a></li>
	<li><a href="#Link">Links</a></li>
	<li><a href="#download">Download</a></li>
	<li><a href="#support">Support</a></li>
	<li><a href="#contact">Contact</a></li>
</ul>
</div>
<div id="clear"></div></div>
<div id="footer">
<p>Copyright 2006 LoadFoO [V1]. Designed by <a href="http://loadfoo.org/" rel="external">LoadFoO</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="external">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer" rel="external">XHTML</a></p>
</div>
</div>

</body>
</html>
