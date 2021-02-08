<?php

include "conn.php";

$Aid = $_GET ['Aid'];
 $del1 = " DELETE FROM admin WHERE Admin_Id = '$Aid' ";

 mysqli_query($conn,$del1);
  
  header('location:MA.php');
  mysqli_close($conn);
 
  ?>