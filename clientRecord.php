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
$result = mysqli_query($link,"SELECT * FROM tblclient");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Update Client Data</title>
</head>
<body>
<table border="1">
<tr>
<td colspan="8">CLIENTS LISTS<br><a href="insertClientRecord.php"> New Record</a></br></td>
</tr>
<tr>
<td>Client ID</td>
<td>Name</td>
<td>Address</td>
<td>Age</td>
<td>Gender</td>
<td>Contact Number</td>
<td>Civil Status</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result))
{
if($i%2==0)
$classname="even";
else
$classname="odd";
?><tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["CLID"]; ?></td>
<td><?php echo $row["Client_name"]; ?></td>
<td><?php echo $row["Address"]; ?></td>
<td><?php echo $row["Age"]; ?></td>
<td><?php echo $row["Gender"]; ?></td>
<td><?php echo $row["ContactNo"]; ?></td>
<td><?php echo $row["CStatus"]; ?></td>
<td><a href="clientUpdate.php?CLID=<?php echo $row["CLID"]; ?>">Update</a> || <a href="cDeleteProcess.php?CLID=<?php echo $row["CLID"]; ?>">Delete</a>
</td>
</tr>

<?php
$i++;
}
?>
</table>
</body>
</html>
