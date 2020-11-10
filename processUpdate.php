<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'carrental';
 $link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 if ( mysqli_connect_errno() )
 {
exit('Failed to connect to MySQL: ' . mysqli_connect_error());
 }
if(count($_POST)>0)
{
mysqli_query($link,"UPDATE tblcar set ceno='" . $_POST['txtCeno'] . "', CModel='" .
$_POST['txtModel'] . "', CBrand='" . $_POST['txtBrand'] . "', CPrice=" . $_POST['txtPrice'] . "
,CColor='" . $_POST['txtColor'] . "', PlateNo='" . $_POST['txtPlateNo'] . "' WHERE carid=" .
$_POST['txtCarID'] . "");
$message = "Record Modified Successfully";
}
$result = mysqli_query($link,"SELECT * FROM tblcar WHERE carid=" . $_GET['carid'] . "");
$row= mysqli_fetch_array($result);
?><html>
<head>
<title>Update Employee Data</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Edit Car List</h1>
<form name="frmUser" method="post" action="">
<?php
if(isset($message))
{
echo '<script>alert("Record Modified Successfully")</script>';
}
?>
<label for="carengine">
<i class="fas fa-user">Car Engine #:</i>
</label>
<input type="hidden" name="txtCarID" class="txtField" value="<?php echo $row['carid']; ?>">
<input type="text" name="txtCeno" value="<?php echo $row['ceno']; ?>">
<label for="carmodel">
<i class="fas fa-user">Car Model:</i>
</label>
<input type="text" name="txtModel" class="txtField" value="<?php echo $row['CModel']; ?>">
<label for="carbrand">
<i class="fas fa-user">Car Brand:</i>
</label>
<input type="text" name="txtBrand" class="txtField" value="<?php echo $row['CBrand']; ?>">
<label for="price">
<i class="fas fa-user">Car Price:</i>
</label>
<input type="text" name="txtPrice" class="txtField" value="<?php echo $row['CPrice']; ?>">
<label for="carcolor">
<i class="fas fa-user">Car Color:</i>
</label>
<input type="text" name="txtColor" class="txtField" value="<?php echo $row['CColor']; ?>">
<label for="plateno">
<i class="fas fa-user">Plate #:</i>
</label>
<input type="text" name="txtPlateNo" class="txtField" value="<?php echo $row['PlateNo']; ?>">
<input type="submit" name="submit" value="Submit" class="button">
</form>

<form action="allRecords.php" method="post">
<input type="submit" value="See Records">
</form>

</div>
</body>
</html>