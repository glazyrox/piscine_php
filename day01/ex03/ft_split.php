<?php
    function ft_split($s)
    {
        $number =  preg_replace('/[\s]+/',' ',$s);
        $list = explode(" ", $number);
        sort($list);
        return ($list);
    }
?>