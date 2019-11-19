#!/usr/bin/php
<?php
$i = 1;
if ($argc < 2)
{
    exit(1);
}
while ($i < $argc)
{
    $new_str = $new_str." ".$argv[$i];
    $i++;
}
$new_str = trim($new_str);
$new_str =  preg_replace('/[\s]+/',' ',$new_str);
$new_str = explode(" ", $new_str);
sort($new_str);
$i = 0;
while ($new_str[$i] || $new_str[$i] == "0")
{
    echo $new_str[$i]."\n";
    $i++;
}
?>