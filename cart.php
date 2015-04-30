<?php
session_start();
$maindir=$_SESSION['maindir'];
include($maindir."modules/cart/cart.php");
