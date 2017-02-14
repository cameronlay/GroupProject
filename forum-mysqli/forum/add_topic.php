<?php
	require_once('auth.php');
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get data that sent from form
	$topic=$_POST['topic'];
	$detail=$_POST['detail'];
	$member_id=$_SESSION['SESS_MEMBER_ID'];
	$datetime=date("d/m/y h:i:s"); //create date time

	$sql="INSERT INTO $tbl_name(topic, detail, member_id, datetime) VALUES ('$topic', '$detail', '$member_id', '$datetime')";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	if($result)
		header("location: forum.php");
	else {
		echo "ERROR";
	}
	((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
