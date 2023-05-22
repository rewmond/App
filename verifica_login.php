<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: ./View/index.php');
	exit();
}