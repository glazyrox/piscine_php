#!/usr/bin/php
<?php
$str = fopen('php://stdin', 'r');
while (1)
{
    echo "Enter a number: ";
    $a = fgets($str);
    $a = trim($a);
    if (feof($str))
    {
        break;
    }
    if (is_numeric($a))
    {
        if ($a % 2 == 0)
            echo ("The number $a is even\n");
        else
            echo ("The number $a is odd\n");
    }
    else
        echo ("'$a' is not a number\n");
}
    echo ("\n");
?>