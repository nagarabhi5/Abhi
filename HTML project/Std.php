<?php 
include 'session.php';
include 'conn.php';

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
<li class="active"><a href ="Std.php">Student Details</a></li>                                                        
<li ><a href ="Form submission.php">Manage Student Details</a></li> 
<li><a href ="MA.php">Manage Admins</a></li> 
<li><a href ="AD.php">Admin Details</a></li>
<li><a href ="Login_Form.php">Logout</a></li> 
</ul>
</div>
<div class="col-sm-10">

<p>This portal can be used by admins only ! Please log out immidieatly if you are not an admin listed under admin sections</p>
<h1>Admin details</h1>
<div class="table-responsive">
<table>
<thread>
<tr>
<th>Reg_No </th>
<th>First Name</th>

<th>Last Name</th>
<th>Mobile</th>
<th>Gaurdian Name</th>
<th>Student Address</th>
<th>Delete</th>
</tr>
</thread>
<tbody>
<?php
include 'conn.php';

$sq = " SELECT * FROM `student_db` ";

$q = mysqli_query($conn,$sq);

$nu = mysqli_num_rows($q);

$res = mysqli_fetch_array($q);

while ($res = mysqli_fetch_array($q))
{
    ?>
    <tr>
<td><?php echo $res['Reg_No'];?></td>
<td><?php echo $res['First_Name'];?></td>
<td><?php echo $res['Last_Name'];?></td>

<td><?php echo $res['Mobile_No'];?></td>
<td><?php echo $res['Gaurdian_Name'];?></td>
<td><?php echo $res['Full_Address'];?></td>
<td> <a href = "del.php?id=<?php echo $res['Reg_No'];?>"> <button type= "submit" class ="btn btn-danger btn-sm">Delete</button> </a></td>
</tr>

<?php
}

?>

</tbody>
</table>
<br>
</feildset>
<br>
</p>
</div>
</div>
</div>
</body>
</html>