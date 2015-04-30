<?php

$mas = array("."); // start folder
while (count($mas))
    {
    $dir = $mas[0]; //carent dir
    unset($mas[0]); //delete dir from the massive
    sort($mas); //resort the massive
    if ($dir)
        {
        ///check for existing index file and write
        if (!file_exists($dir . "/index.html") && !file_exists($dir . "/index.php"))
            {
            $fp = fopen($dir . "/index.html", "w");
            fclose($fp);
            }
        if (file_exists($dir . "/openid.php"))
            {
            unlink($dir.'/openid.php');
            }
		if(substr_count($dir, "Apple")) echo "<BR>APPLE - ".$dir;
        $d1 = scandir($dir);
        foreach ($d1 as $val)
            {
            if (is_dir($dir . "/" . $val) && $val != "." && $val != "..")
                array_push($mas, $dir . "/" . $val);
            }
        }
    print_r($mas);
    echo "<br>";
    }

