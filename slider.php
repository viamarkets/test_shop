<?php
session_start();
include("settings.php");
require($maindir.'libs/Smarty.class.php');
$smarty = new Smarty;
$smarty -> template_dir = $maindir."modules";
$smarty -> compile_dir = 'cache';
include($maindir."modules/slaider/aviaslider.php");
