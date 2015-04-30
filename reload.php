<?php
session_start();
$maindir=$_SESSION['maindir'];
require($maindir.'libs/Smarty.class.php');
$smarty = new Smarty;
$smarty -> template_dir = $maindir."modules";
$smarty -> compile_dir = 'cache';
$what=$_GET[what];
if(!$what) $what="content/reload";
include($maindir."modules/".$what.".php");
mysql_close();