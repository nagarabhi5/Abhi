<?php

include 'session.php';
$conn = mysqli_connect('localhost','root');
if($conn)
{
    echo "connected";
}
else
{
    echo "not conected";
}
mysqli_select_db ($conn,'admin');
$Admin_Name = $_POST['Admin_Name'];
$Password = $_POST['Password'];

$Q= " SELECT * FROM `admin` WHERE `Admin_Name`='$Admin_Name' AND `Password` = '$Password'";

$res = mysqli_query($conn,$Q);
$Final_Input = mysqli_num_rows($res);
if($Final_Input == 1)
{
    $_SESSION['Admin_Name']=$Admin_Name;
    $_SESSION['Password']=$Password;
header('location:Admin.php');
}
else
{
    
    header('location:Login_Form.php');
    echo "Admin_Name or Password is invalid ";
}
?>