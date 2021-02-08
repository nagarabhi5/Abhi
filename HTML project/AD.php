<?php 
include 'session.php';
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
<li ><a href ="Form submission.php">Manage Student Details</a></li> 
<li><a href ="MA.php">Manage Admins</a></li> 
<li class="active"><a href ="AD.php">Admin Details</a></li>
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
<th>Admin Id </th>
<th>Name</th>
<th>Department</th>
<th>Mobile</th>
<th>Address</th>
<th>Delete</th>
</tr>
</thread>
<tbody>
<?php
include 'conn.php';

$sq = "SELECT * FROM `admin` ";

$q = mysqli_query($conn,$sq);

$nu = mysqli_num_rows($q);

$res = mysqli_fetch_array($q);

while ($res = mysqli_fetch_array($q))
{
    ?>
    <tr>
<td><?php echo $res['Admin_Id'];?></td>
<td><?php echo $res['Admin_Name'];?></td>
<td><?php echo $res['Department'];?></td>
<td><?php echo $res['Mobile_No'];?></td>
<td><?php echo $res['Full_Address'];?></td>
<td><a href = "del_admin.php?Aid=<?php echo $res['Admin_Id'];?>"><input class ="btn btn-danger btn-sm" type="Submit" name="Submit" value="Delete"></td>
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
