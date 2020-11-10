<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'carrental';
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 if ( mysqli_connect_errno() )
 { exit('Failed to connect to MySQL: ' . mysqli_connect_error()); }
if(count($_POST)>0)
{
 mysqli_query($link,"Delete from tblclient WHERE CLID=" . $_POST['txtCLID'] . "");
 $message = "Record Successfully DELETED";
 header('Location: clientDeleteRecord.php');
}
$result = mysqli_query($link,"SELECT * FROM tblclient WHERE CLID=" . $_GET['CLID'] . "");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Clients Data</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>You are about to delete this record. Click SUBMIT button to proceed. </h1>
<form name="frmUser" method="post" action="cdeleteProcess.php">
<label for="Client_name">
<i class="fas fa-user">Name:</i>
</label>
<input type="hidden" name="txtCLID" class="txtField" value="<?php echo $row['CLID']; ?>">
<input type="text" name="txtCN" value="<?php echo $row['Client_name']; ?>">
<label for="Address">
<i class="fas fa-user">Address:</i>
</label>
<input type="text" name="txtAdd" class="txtField" value="<?php echo $row['Address']; ?>">
<label for="Age">
<i class="fas fa-user">Age:</i>
</label>
<input type="text" name="txtAge" class="txtField" value="<?php echo $row['Age']; ?>">
<label for="Gender">
<i class="fas fa-user">Gender:</i>
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

<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</div>
</body>
</html>