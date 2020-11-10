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
$result = mysqli_query($link,"SELECT * FROM tblcar");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Update employee data</title>
</head>
<body>
<table border="1">
<tr>
<td colspan="7">CAR LISTS</td>
</tr>
<tr>
<td>Engine Number</td>
<td>Car Model</td>
<td>Car Brand</td>
<td>Car Price</td>
<td>Car Color</td>
<td>Plate Number</td>
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
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ceno"]; ?></td>
<td><?php echo $row["CModel"]; ?></td>
<td><?php echo $row["CBrand"]; ?></td>
<td><?php echo $row["CPrice"]; ?></td>
<td><?php echo $row["CColor"]; ?></td>
<td><?php echo $row["PlateNo"]; ?></td>
<td><a href="processUpdate.php?carid=<?php echo $row["carid"]; ?>">
 Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>