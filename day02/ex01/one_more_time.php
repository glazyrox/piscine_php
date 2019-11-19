#!/usr/bin/php
<?php
$argv[1];
$str_data = $argv[1];
$month = ["janvier", "fevrier",	"mars", "avril", "mai",	"juin",	"juillet",	"aout",	"septembre", "octobre",	"novembre",	"decembre"];
$days = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
$arr_data = explode(" ", $str_data); // в целом массив с данными, которые подают
$arr_month = str_split($arr_data[2]); // разбитый по буквам месяц
$arr_day = str_split($arr_data[0]); // разбитый по буквам день
$arr_month[0] = mb_strtolower($arr_month[0]); // уменьшает первую букву месяца
$arr_day[0] = mb_strtolower($arr_day[0]); // уменьшает первую букву дня
$str_month = implode($arr_month); // месяц в строке
$str_day = implode($arr_day); // день в строке
$pattern1 = "/[A-Z]/";
// парс на регистр
if (preg_match($pattern1, $str_month)) // проверочка месяца на наличие больших букв
{
    echo "Wrong format\n";
    exit;
}
if (preg_match($pattern1, $str_day)) // проверочка месяца на наличие больших букв
{
    echo "Wrong format\n";
    exit;
}
// парс на валидность месяца и дня
$arr_data[0] = mb_strtolower($arr_data[0]); 
$arr_data[2] = mb_strtolower($arr_data[2]);
if (in_array($arr_data[0], $days) == false)
{
    echo "Wrong format\n";
    exit;
}
if (in_array($arr_data[2], $month) == false)
{
    echo "Wrong format\n";
    exit;
}
// парс числа
if (is_numeric($arr_data[1]) == false) // число ли подали
{
    echo "Wrong format\n";
    exit;
}
if (strlen($arr_data[1]) > 2) // ли чем два символа
{
        echo "Wrong format\n";
        exit; 
}
if ($arr_data[1] > 31 || $arr_data[1] == 0)
{
    echo "Wrong format\n";
    exit; 
}
if (strlen($arr_data[3]) != 4 || $arr_data[3] < 1970)
{
    echo "Wrong format\n";
    exit; 
}
if (strlen($arr_data[4]) != 8)
{
    echo "Wrong format\n";
    exit; 
}
$clock = explode(":", $arr_data[4]);
if ($clock[0] > 24 || $clock[1] > 59 || $clock[2] > 59)
{
    echo "Wrong format\n";
    exit; 
}
$dataone = "1970-01-01 00:00:00";
$flipped = array_flip($month);
$key = array_search($arr_data[2], $month) + 1;
$mydata = $arr_data[3]."-".$key."-".$arr_data[1]." ".$arr_data[4];
date_default_timezone_set('Europe/Moscow');
$gvn1 = strtotime($dataone);
$gvn2 = strtotime($mydata);
echo ($gvn2 - $gvn1."\n");
date
?>
