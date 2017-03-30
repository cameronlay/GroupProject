<?php

function isLoggedIn()
{
	//Check whether the session variable SESS_MEMBER_ID is present or not
	//Should call session_start(); before calling this function
	return (isset($_SESSION['SESS_MEMBER_ID']) &&
	       	(trim($_SESSION['SESS_MEMBER_ID']) != ''));
}

?>
