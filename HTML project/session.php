<?php 
session_start();
if (!isset($_SESSION['Admin_Name']) && !isset($_SESSION['Password']))
{
    header('location:Login_Form.php');
    
}
?>