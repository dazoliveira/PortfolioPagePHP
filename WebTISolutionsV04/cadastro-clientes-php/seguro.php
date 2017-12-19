<?php
session_start();

if (!$_SESSION['autenticado']) {
	header('Location: login.php');
	die(0);
}else
	header('Location: index.php');
?>