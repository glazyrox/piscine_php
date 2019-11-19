#!/usr/bin/php
<?php
    $str = $argv[1];
    $str = preg_replace('/[\s]+/',' ',$str);
    $str = trim($str);
    echo ($str."\n");
?>