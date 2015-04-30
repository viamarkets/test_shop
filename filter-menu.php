<?php
session_start();
include("settings.php"); 
//echo "GT=$_GET[type] -";
if($_GET[type]) $_SESSION[type2]=$_SESSION[type]=$_GET[type];
//include($maindir."start_cache_menu.php");
require($maindir.'libs/Smarty.class.php');
$smarty = new Smarty;
$smarty -> template_dir = $maindir."modules";
$smarty -> compile_dir = 'cache';
include($maindir."modules/content_filter/filter-menu-new.php");
//include($maindir."end_cache.php");

