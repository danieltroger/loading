<?php
$wtd = array("generating","creating","hacking","chmodding","deleting");
for($i = 0;$i <= 100;$i++)
{
echo fillout($wtd[rand(0,(sizeof($wtd)-1))] . " " . rs(rand(1,20)) . "." . rs(3) . "....",100+5) . "\n";
for($is = 1; $is <= $i;$is++)
{
echo "=";
}
echo ">";
for($t=$i+1;$t <=100;$t++)
{
echo " ";
}
echo "{$i}%\r";
usleep(rand(10000,500000));
}
echo "\n";
function rs($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwqyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
function fillout($string,$totleng)
{
$leng = strlen($string);
if($leng >=$totleng)
{
return $string;
}
else
{
$res = $string;
for($a = $leng+1; $a < $totleng; $a++)
{
$res .= " ";
}
return $res;
}
}
