<?php
session_start();
$maindir=$_SESSION['maindir'];
require_once($maindir."modules/registration/city.php");
mysql_close();