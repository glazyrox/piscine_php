<?php
    function ft_is_sort($trash)
    {
        
        $str_new = $trash;
        $old = $trash;
        sort($str_new);
        $i = 0;
        while ($str_new[$i++])
        {
            if ($str_new[$i] != $old[$i])
                return (0);
        }
        return (1);
    }
?>