<?php
session_start();
session_destroy();
unset($_SESSION['error']);
header("Location: front.php");
?>
