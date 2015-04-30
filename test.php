<?
function wcashe($name, $data)
{
 $data = serialize($data);
    file_put_contents("cache_files/$name.inc", $data); 
}
function rcashe($name)
{
 $data  = file_get_contents("cache_files/$name.inc");
 return unserialize($data); 
}



$test[a1]="asxd";
$test[a2][1]="zxcvb";
$test[a2][2]="bbbbbbbb";
$test[a3][1]="zzzzzzzzzzz";
wcashe("test",$test);
$t=rcashe("test");
echo $t[a2][2];
 