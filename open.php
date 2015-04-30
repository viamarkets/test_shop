<?php
session_start();
if(!$_GET[what]) die("fack!");
$maindir=$_SESSION['maindir'];
$what=$_GET[what];
include($maindir."modules/".$what.".php");
