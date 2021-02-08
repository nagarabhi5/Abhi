
<?php
include_once 'conn.php';
include 'session.php';
include_once 'function.php';
if(isset($_POST['Submit']))
{
 $Admin_Name=$_POST['Admin_Name'];
    $Admin_Id=$_POST['Admin_Id'];
    $Password=$_POST['Password'];
    $Confirm_Password=$_POST['Confirm'];
    $Department_Name=$_POST['Department_Name'];
    $Mobile_No=$_POST['Mobile_No'];
    $Address=$_POST['Address'];
    mysqli_select_db($conn,'admin');
    $sql = "INSERT INTO `admin`(`Admin_Name`, `Admin_Id`, `Password`, `Department`, `Mobile_No`,`Full_Address`) 
    VALUES ('$Admin_Name','$Admin_Id','$Password','$Department_Name','$Mobile_No','$Address')";
    if ($Mobile_No==null || $Password==null || $Admin_Id == null || $Department_Name == null || $Address==null ||$Admin_Name == null)
   {
       
       Redirect_to("MA.php");
       echo "No field should be left empty please fill all details";
   }
    else if($Password !== $Confirm_Password)
    {
        echo "Password not matching please re-enter details again";
    }
    else if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
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
<li><a href ="Form submission.php">Manage Student Details</a></li>                                                      
<li class="active"><a href ="MA.php">Manage Admins</a></li> 
<li><a href ="AD.php">Admin Details</a></li>
<li><a href ="Login_Form.php">Logout</a></li> 
</ul>
</div>
<div class="col-sm-10">

<p>This portal can be used by admins only ! Please log out immidieatly if you are not an admin listed under admin sections</p>
<div class="AB w-50">
<h1>Manage Admin details</h1>
<div>
<form  method="post">
<feildset>
<label for="cg">Admin_Name</label>
<input class="form-control" type="text" name="Admin_Name" id="cg" placeholder="FULL NAME" required>
<label for="cg">Admin_Id</label>
<input class="form-control" type="text" name="Admin_Id" id="cg" placeholder="Admin UID" required>
<label for="cg">Password :</label>
<input class="form-control" type="password" name="Password" id="cg" placeholder="Create Password" required>
<label for="cg">Confirm Password :</label>
<input class="form-control" type="password" name="Confirm" id="cg" placeholder="Confirm Password" required>
<label for="cg">Department Name:</label>
<input class="form-control" type="text" name="Department_Name" id="cg" placeholder="Department Name" required>
<label for="cg">Mobile No. :</label>
<input class="form-control" type="number" name="Mobile_No" id="cg" placeholder="Enter mobile no." required>
<label for="cg">Address :</label>
<input class="form-control" type="text" name="Address" id="cg" placeholder="Address" required>




</div>
<br>
<input class ="btn btn-danger btn-sm" type="Submit" name="Submit" value="Add Admin">
</feildset>
<br>
</p>
</div>
</div>
</div>
</div>
</body>
</html>