<?php


date_default_timezone_set("Asia/Kolkata");


$d = date("H");

if($d > 00 && $d < 12)
{
    echo "Good Morning";
}

else if($d >12 && $d <= 18)
{
    echo "Good Afternoon";
}

else if($d > 18)
{
    echo "Good Evening";
}


?>