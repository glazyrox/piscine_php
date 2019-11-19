#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $file = $argv[1];
        $file_headers = @get_headers($file);
        if(!$file_headers || $file_headers[0] == 'This site can’t be reached') {
            exit;
        }
        else 
        {
            $fd = fopen($argv[1], 'r');
            while(!feof($fd))
            {
                $str = fgets($fd);
                if (!$str)
                {
                    exit;
                }
                $new_str = $new_str . $str; 
                }
                if (preg_match('/img.src="(.*?)"/', $new_str, $match) == false)
            $img = $match[1];
            echo $img;
            $ch = curl_init($img);
            $name = "www.42.fr";
            mkdir($name);
            $fp = fopen($name . '/' . "logo.svg", 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
        }
    }
?>