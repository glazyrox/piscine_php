#!/usr/bin/php
<?php
if ($argv[1])
{
    $str = $argv[1];
    $str = preg_replace('/[\s]+/',' ',$str);
    $arr = explode(" ", $str);
    $str = array_diff($arr, [""], [" "]);
    $str = array_values($str); //поправляет ключи с 0
    $iter = 0;
    while ($str[$iter]) 
        $iter++;
    array_push($str, $str[0]); //добавляет элемент
    $str[0] = "";
    $new_str = array_diff($str, [""]);
    $new_str = array_values($new_str); //поправляет ключи с 0
    $kek = 0;
    while ($kek < $iter)
        $govno = $govno . " " . $new_str[$kek++];
    $govno = trim($govno);
    echo ($govno);
}
    echo("\n");
?>