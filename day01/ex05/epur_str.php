#!/usr/bin/php
<?php
preg_replace('/[\s]+/',' ',$argv[1]);
$argv[1] = trim($argv[1]);
echo (preg_replace('/[\s]+/',' ',$argv[1]))."\n";
?>