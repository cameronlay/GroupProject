<?php
require_once('auth.php');
require_once('config.php');

// Connect to server and select database.
($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
$tbl_name="response"; // Table name

// Get value of id that sent from hidden field
$id=$_POST['id'];

// get values that sent from form
$response=$_POST['response'];
$member_id=$_SESSION['SESS_MEMBER_ID'];

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer
$sql2="INSERT INTO $tbl_name(topic_id, member_id, response, datetime)VALUES('$id', '$member_id','$response', '$datetime')";
$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

if($result2)
	header('Location: view_topic.php?id='.$id);
else {
	echo "ERROR".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
}

((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>

