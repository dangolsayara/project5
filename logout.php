<?php

	include 'session/Session.php';

	session_start();

	$session=new session();
	$session->sessiondestroy();

?>
