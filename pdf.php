<?php session_start();
$maindir=$_SESSION['maindir'];
require_once("settings.php");
require_once($maindir."pdf.php");
mysql_close();