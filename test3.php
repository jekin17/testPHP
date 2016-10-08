<?php
include_once "test2.php";
extract($_REQUEST);
if(isset($key2))
{
    rect($key1,$key2);
}
else
{
    rect($key1);
}

?>