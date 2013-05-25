<?php 
	session_start();
	if(empty($_SESSION['id']) || empty($_SESSION['auth'])){
		header('Location: ./clearsession.php');
	}

	require_once('./pages/top.html');
?>