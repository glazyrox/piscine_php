#!/usr/bin/php
<?php
if ($argc == 2)
{
    $fd = fopen($argv[1], 'r');
    while(!feof($fd))
    {
        $arr = fgets($fd);
        $arr = preg_replace_callback('/<a.*?>(.*?)</', function ($plswork) {
            // print("\nTUT NOL: ".$plswork[0]."\n"); print("\nTUT ODIN: ".$plswork[1]."\n"); 
            return (str_replace($plswork[1], strtoupper($plswork[1]), $plswork[0]));}, $arr);
        $arr = preg_replace_callback('/a.*?title="(.*?)">/', function ($plswork) {
            //print("\n".$plswork[0]."\n"); print("\n".$plswork[1]."\n"); 
            return (str_replace($plswork[1], strtoupper($plswork[1]), $plswork[0]));}, $arr);
        echo $arr;
    }
    echo "\n";
}
?>