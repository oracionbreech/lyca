<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'carrental';
 $link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 if ( mysqli_connect_errno() ) 
 { exit('Failed to connect to MySQL: ' . mysqli_connect_error()); }
 if(isset($_POST['btnsearch']))
 {
 $toSearch = $_POST['txtPlateNo'];
 $query = mysqli_query($link,"Select * from `tblcar` where CONCAT 
(`ceno`,`CModel`,`CBrand`,`CPrice`,`CColor`,`PlateNo`) LIKE '%" .$toSearch. "%'");
 }
 else
 {
 $query = mysqli_query($link,"SELECT * FROM tblcar");
 }
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Seach and Delete employee data</title>
</head>
<body>
<form action="searchDeleteRecord.php" method="POST">
<table>
<tr>
<td colspan="7">
SEARCH HERE: <input type="text" name="txtPlateNo" placeholder="Enter A Key Word" id="plateno" required>
<input type="submit" value="SUBMIT" name="btnsearch">
</td>
</tr>
<tr>
<th colspan="7">CAR LISTS</th>
</tr>
<tr>
<th>Engine Number</th>
<th>Car Model</th>
<th>Car Brand</th>
<th>Car Price</th>
<th>Car Color</th>
<th>Plate Number</th>
<th>Action</th>
</tr>
<?php while($row = mysqli_fetch_array($query)): ?>
<tr>
<td><?php echo $row['ceno']; ?></td>
<td><?php echo $row['CModel']; ?></td>
<td><?php echo $row['CBrand']; ?></td>
<td><?php echo $row['CPrice']; ?></td>
<td><?php echo $row['CColor']; ?></td>
<td><?php echo $row['PlateNo']; ?></td>
<td><a href="deleteProcess.php?carid=<?php echo $row["carid"]; ?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</form>
</body>
</html> 