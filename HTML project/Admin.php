<?php require_once("function.php");
include 'session.php' ; ?>
<!DOCTYPE>
<html>
<head>
<title>Admin Portal</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/admin_css.css">
</head>
<body1>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
<h1>Welcome</h1>
<h1>
<?php echo $_SESSION['Admin_Name'];?></h1>
<h5>Side Menu</h5>


<ul id="B" class ="a">
<li class="active"><a href="Admin.php">Portal</a></li>
<li><a href ="Std.php">Student Details</a></li>                                                        
<li><a href ="Form submission.php">Manage Student Details</a></li> 
<li><a href ="MA.php">Manage Admins</a></li> 
<li><a href ="AD.php">Admin Details</a></li>
<li><a href ="Login_Form.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10">
<h1>Admin Portal</h1>
<p>This portal can be used by admins only ! Please log out immidieatly if you are not an admin listed under admin sections</p>
<p>


</p>
</div>
</div>
</div>
</body1>
</html>