<?php
$con = mysqli_connect('localhost', 'root');
if($con)
{
    echo "Connected";
}
else
{
    echo"no connection";
}
?>