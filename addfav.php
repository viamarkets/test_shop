<?php
session_start();
$maindir=$_SESSION['maindir'];
require_once($maindir."modules/buyer_favorites/add.php");
mysql_close();