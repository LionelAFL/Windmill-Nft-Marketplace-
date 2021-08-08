<?php
session_start();
include('function.inc.php');
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
redirect('index');
?>
