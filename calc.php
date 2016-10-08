<?php

$n1 = $_REQUEST['num1'];
$n2 = $_REQUEST['num2'];
$op = $_REQUEST['op'];
$res = 0;
if($op == "+")
{
    $res = $n1 + $n2;
}
else if($op == "-")
{
    $res = $n1 - $n2;
}
else if($op == "*")
{
    $res = $n1 * $n2;
}
else if($op == "/")
{
    $res = $n1 / $n2;
}
echo   $res;
?>