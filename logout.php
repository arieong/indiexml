<?php session_start(); ?>
<?
include("db.php");
unset($_SESSION['username']);
echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
?>