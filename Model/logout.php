<?php
session_start();
session_destroy();
header('Location: ../View/logar.php');

exit();