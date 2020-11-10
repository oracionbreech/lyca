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
mysqli_query($link,"UPDATE tblclient set Client_name='" . $_POST['txtClient_name'] . "', Address='" .
$_POST['txtAdd'] . "', Age='" . $_POST['txtAge'] . "', Gender=" . $_POST['txtGender'] . "
,ContactNo='" . $_POST['txtCNo'] . "', CStatus='" . $_POST['txtCS'] . "' WHERE CLID=" .
$_POST['txtCLID'] . "");
$message = "Record Modified Successfully";
}
$result = mysqli_query($link,"SELECT * FROM tblclient WHERE CLID=" . $_GET['CLID'] . "");
$row= mysqli_fetch_array($result);
?><html>
<head>
<title>Update Clients Data</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Edit Clients List</h1>
<form name="frmUser" method="post" action="">
<?php
if(isset($message))
{
echo '<script>alert("Record Modified Successfully")</script>';
}
?>
<label for="Client__name">
<i class="fas fa-user">Client Name:</i>
</label>
<input type="hidden" name="txtCLID" class="txtField" value="<?php echo $row['CLID']; ?>">
<input type="text" name="txtClient_name" value="<?php echo $row['Client_name']; ?>">

<label for="Address">
<i class="fas fa-user">Address:</i>
</label>
<input type="text" name="txtAdd" class="txtField" value="<?php echo $row['Address']; ?>">

<label for="Age">
<i class="fas fa-user">Age:</i>
</label>
<input type="text" name="txtAge" class="txtField" value="<?php echo $row['Age']; ?>">

<label for="Gender">
<i class="fas fa-user">eVAT:</i>
</label>
<input type="text" name="txtGender" class="txtField" value="<?php echo $row['Gender']; ?>">

<label for="ContactNo">
<i class="fas fa-user">Contact Number:</i>
</label>
<input type="text" name="txtCNo" class="txtField" value="<?php echo $row['ContactNo']; ?>">

<label for="CStatus">
<i class="fas fa-user">Civil Status:</i>
</label>
<input type="text" name="txtCS" class="txtField" value="<?php echo $row['CStatus']; ?>">

<input type="submit" name="submit" value="Submit" class="button">
</form>

<form action="clientRecord.php" method="post">
<input type="submit" value="See Records">
</form>

</div>
</body>
</html>