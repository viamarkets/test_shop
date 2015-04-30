<?php
session_start();
$maindir=$_SESSION['maindir'];
include($maindir."modules/content_filter/filter-list.php");
