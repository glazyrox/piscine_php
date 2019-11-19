<?php
    if ($_GET['action'] === 'set')
        $flag = 1;
    else if ($_GET['action'] === 'get')
        $flag = 2;
    else if ($_GET['action'] === 'del')
        $flag = 3;
    if ($flag == 1 && $_GET['name'] && $_GET['value'])
        setcookie($_GET['name'], $_GET['value']);
    else if ($flag == 2 && $_GET['name'] == true)
        echo $_COOKIE[$_GET['name']];
    else if ($flag == 3 && $_GET['name'] == true)
        setcookie($_GET['name'], '', time() - 3600);