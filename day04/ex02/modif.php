<?php
if ($_POST["submit"] == "OK" && $_POST["login"] == true && $_POST["oldpw"] == true && $_POST["newpw"] == true)
{
    $flag = 0;
    $arr["login"] = $_POST["login"];
    $arr["oldpw"] = hash('whirlpool', $_POST["oldpw"]);
    $arr["newpw"] = hash('whirlpool', $_POST["newpw"]);
    if (file_exists("../private/passwd"))
    {
        $bigarr = unserialize(file_get_contents("../private/passwd"));
        foreach($bigarr as $key => $value)
        {
            if ($value["login"] == $arr["login"])
            {
                if ($value["passwd"] == $arr["oldpw"])
                {
                    if ($value["passwd"] == $arr["newpw"])
                    {
                        echo "ERROR\n";
                        return ;
                    }
                    $bigarr[$key]["passwd"] = $arr["newpw"];
                    $flag = 1;
                }
            }
        }
        if ($flag == 1) 
        {
            file_put_contents("../private/passwd", serialize($bigarr));
            echo "OK\n";
        }
        else
        {
            echo "ERROR\n";
        }
    }
}
else
    echo "ERROR\n";