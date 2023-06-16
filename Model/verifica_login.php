<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: ../View/logar.php');
	exit();
}