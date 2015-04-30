<?php
include("settings.php");
include($maindir."start_cache_pic.php");
session_start();
include($maindir."image.php");
include($maindir."end_cache.php");
mysql_close();