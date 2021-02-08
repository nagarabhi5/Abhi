<?php
include_once 'conn.php';
include 'session.php';
include_once 'function.php';
?>
<?php

if(isset($_POST['submit']))
{
    $FN=$_POST['First_Name'];
    $LN=$_POST['Last_Name'];
    $Mobile_No=$_POST['Personal_No'];
    $Reg=$_POST['Reg_No'];
    $Ad=$_POST['Full_Address'];
    $F_N=$_POST['Father_Name'];
    $M_N=$_POST['Mother_Name'];
    $F_NO = $_POST['Father_No'];
    $M_No = $_POST['M_No'];
    $G_N = $_POST['Gaurdian_Name'];
    $G_No = $_POST['Gaurdian_No'];
    $G_A = $_POST['Gaurdian_Address'];
    
    mysqli_select_db($conn,'admin');

    $SQL=" INSERT INTO `student_db`(`First_Name`, `Last_Name`, `Mobile_No`, `Reg_No`, `Full_Address`, `Father_Name`, `Mother_Name`, `Father_No`, `Mother_No`, `Gaurdian_Name`, `Gaurdian_No`, `Gaurdian_Address`)
    VALUES ('$FN','$LN','$Mobile_No','$Reg','$Ad','$F_N','$M_N','$F_NO','$M_No','$G_N','$G_No','$G_A') ";
   
   if (mysqli_query($conn, $SQL)) {
      echo "New record has been added successfully !";
   } else {
      echo "Error: " . $SQL . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);  
}

?>
<!DOCTYPE>
<html>
<head>
<title>Admin Portal</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/admin_css.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
<h1>Welcome</h1>
<h1>
<?php echo $_SESSION['Admin_Name'];?></h1>
<h5>Side Menu</h5>
<ul id="B" class ="a">
<li><a href="Admin.php">Portal</a></li>
<li><a href ="Std.php">Student Details</a></li>                                                        
<li class="active"><a href ="Form submission.php">Manage Student Details</a></li> 
<li><a href ="MA.php">Manage Admins</a></li> 
<li><a href ="AD.php">Admin Details</a></li>
<li><a href ="Login_Form.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10">

<p>This portal can be used by admins only ! Please log out immidieatly if you are not an admin listed under admin sections</p>
<div class="AB w-50">
<h1>Manage student details</h1>

<form action="Form submission.php" method="post">
<feildset >
<label for="cg">First Name :</label>
<input class="form-control" type="text" name="First_Name" id="cg" placeholder="First Name" required>
<label for="cg">Last Name :</label>
<input class="form-control" type="text" name="Last_Name" id="cg" placeholder="Last Name" required>
<label for="cg">Mobile No. :</label>
<input class="form-control" type="number"  name="Personal_No" id="cg" placeholder="Mobile No" required>
<label for="cg">Address :</label> 
<input class="form-control" type="text" name="Full_Address" id="cg" placeholder="Full Address" required>
<label for="cg">Father's Name :</label>
<input class="form-control" type="text" name="Father_Name" id="cg" placeholder="Enter full Name" required>
<label for="cg">Mother's Name :</label>
<input class="form-control" type="text" name="Mother_Name" id="cg" placeholder="Mother's Name" required>
<label for="cg">Father's No. :</label>
<input class="form-control" type="number"  name="Father_No" id="cg" placeholder="Father's mobile No" required>
<label for="cg">Mother's No. :</label>
<input class="form-control" type="number" name="M_No" id="cg" placeholder="Mother's Mobile No." required>
<label for="cg">Gaurdian's Name :</label>
<input class="form-control" type="text" name="Gaurdian_Name" id="cg" placeholder="Gaurdian's Name" required>
<label for="cg">Gaurdian's No. :</label>
<input class="form-control" type="number"   name="Gaurdian_No" id="cg" placeholder="Gaurdian's No" required>
<label for="cg">Gaurdian's Address :</label> 
<input class="form-control" type="text" name="Gaurdian_Address" id="cg" placeholder="Full Address" required>
<label for="cg">Registration No. :</label>
<input class="form-control" type="text" name="Reg_No" id="cg" placeholder="Registration No." required>
<br>
<input class ="btn btn-danger btn-sm" type="submit" name="submit" value="Add student details">
<br>


</div>

</feildset>
</div>
<br>
</p>
<br>
</div>
</div>
</div>
</body>
</html>
