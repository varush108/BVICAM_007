<?php
if($_GET["ln"]=='en')
{ 
    setcookie("language","english");
}
else
{
    setcookie("language","hindi");
}
header("location: ". $_SERVER['HTTP_REFERER']);
?>