<?php
session_start();
$maindir=$_SESSION['maindir'];
require($maindir.'libs/Smarty.class.php');
$smarty = new Smarty;
$smarty -> template_dir = $maindir."modules";
$smarty -> compile_dir = 'cache';
include($maindir."content.php");
mysql_close();