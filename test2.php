<?php
function rect($param1, $param2 = null)
{
    $tmp1 = $param1;
    $tmp2 = $param2;
    if($param2 == null)
    {
        $param2 = $param1;
    }
    while($param1--)
    {
        while($param2--)
        {
            if($param1 == $tmp1-1 || $param1 == 0)
            {
                echo "*";
            }
            else
            {
                if($param2 == $tmp2-1 || $param2 == 0)
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp";
                    echo "&nbsp";
                }
            }
        }
        echo "<br/>";
        $param2 = $tmp2;
    }
}
extract($_REQUEST);
rect($param1, $param2);
?>