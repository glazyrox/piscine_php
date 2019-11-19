<?php
    if (!($_POST["submit"] == "OK" && $_POST["login"] == true && $_POST["passwd"] == true))
    {
        echo "ERROR\n";
        return ;
    }
    if (!(file_exists("../private")))
        mkdir("../private");
    $arr["login"] = $_POST["login"];
    $arr["passwd"] = hash('whirlpool', $_POST["passwd"]);
    if (file_exists("../private/passwd"))
    {
        $bigarr = unserialize(file_get_contents("../private/passwd"));
        foreach($bigarr as $ffa)
        {
            if ($ffa["login"] == $_POST["login"])
            {
                echo "ERROR\n";
                return ;
            }
        }
        $bigarr[] = $arr;
        file_put_contents("../private/passwd", serialize($bigarr));
    }
    if (file_exists("../private") && (!(file_exists("../private/passwd"))))
    {
        $bigarr[]= $arr;
        file_put_contents("../private/passwd", serialize($bigarr));
    }
    echo "OK\n";
?>