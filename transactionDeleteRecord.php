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
 $toSearch = $_POST['txtTRNo'];
 $query = mysqli_query($link,"Select * from `tbltransaction` where CONCAT
(`TDate`,`SubTotal`,`ProFee`,`eVAT`,`NetCost`,`TRNo`) LIKE '%" .$toSearch. "%'");
 }
 else
 {
 $query = mysqli_query($link,"SELECT * FROM tbltransaction");
 }
?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Seach and Delete Transactions Data</title>
</head>
<body>
<form action="transactionDeleteRecord.php" method="POST">
<table>
<tr>
<td colspan="7">
SEARCH HERE: <input type="text" name="txtTRNo" placeholder="Enter Transaction Number" id="TRNo" required>
<input type="submit" value="SUBMIT" name="btnsearch">
</td>
</tr>
<tr>
<th colspan="7">TRANSACTIONS LIST</th>
</tr>
<tr>
<th>TRNo</th>
<th>Transaction Date</th>
<th>Sub Total</th>
<th>Pro Fee</th>
<th>eVAT</th>
<th>Net Cost</th>
<th>Action</th>
</tr>
<?php while($row = mysqli_fetch_array($query)): ?>
<tr>
<td><?php echo $row['TRNo']; ?></td>
<td><?php echo $row['TDate']; ?></td>
<td><?php echo $row['SubTotal']; ?></td>
<td><?php echo $row['ProFee']; ?></td>
<td><?php echo $row['eVAT']; ?></td>
<td><?php echo $row['NetCost']; ?></td>
<td><a href="tDeleteProcess.php?TRNo=<?php echo $row["TRNo"]; ?>">Delete</a></td>
</tr>

<?php endwhile; ?>
</table>
</form>
</body>
</html>