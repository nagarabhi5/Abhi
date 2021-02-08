<?php

include "conn.php";

$id = $_GET ['id'];
 $del = " DELETE FROM student_db WHERE Reg_No = '$id' ";

 mysqli_query($conn,$del);
  
  header('location:Std.php');
  mysqli_close($conn);
  ?>