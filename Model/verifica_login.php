<?php
session_start();
if(!$_SESSION['nome']) {
<<<<<<< HEAD
	header('Location: ../View/logar.php');
=======
	header('Location: /logar');
>>>>>>> 813433392e054f8fb110df5d97eab84ce3daf1ad
	exit();
}