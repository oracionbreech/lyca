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
 $toSearch = $_POST['txtCLID'];
 $query = mysqli_query($link,"Select * from `tblclient` where CONCAT
(`Client_name`,`Address`,`Age`,`Gender`,`ContactNo`,`CStatus`) LIKE '%" .$toSearch. "%'");
 }
 else
 {
 $query = mysqli_query($link,"SELECT * FROM tblclient");
 }
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Seach and Delete Client Data</title>
</head>
<body>
<form action="clientDeleteRecord.php" method="POST">
<table>
<tr>
<td colspan="8">
SEARCH HERE: <input type="text" name="txtCLID" placeholder="Enter Client ID Number" id="CLID" required>
<input type="submit" value="SUBMIT" name="btnsearch">
</td>
</tr>
<tr>
<th colspan="8">CLIENTS LIST</th>
</tr>
<tr>
<th>Client ID Number</th>
<th>Client Name</th>
<th>Address</th>
<th>Age</th>
<th>Gender</th>
<th>Contact Number</th>
<th>Civil Status</th>
<th>Action</th>
</tr>
<?php while($row = mysqli_fetch_array($query)): ?>
<tr>
<td><?php echo $row['CLID']; ?></td>
<td><?php echo $row['Client_name']; ?></td>
<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['Age']; ?></td>
<td><?php echo $row['Gender']; ?></td>
<td><?php echo $row['ContactNo']; ?></td>
<td><?php echo $row['CStatus']; ?></td>
<td><a href="cDeleteProcess.php?CLID=<?php echo $row["CLID"]; ?>">Delete</a></td>
</tr>

<?php endwhile; ?>
</table>
</form>
</body>
</html>