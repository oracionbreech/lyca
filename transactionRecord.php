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
$result = mysqli_query($link,"SELECT * FROM tbltransaction");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<title>Update Transactions Data</title>
</head>
<body>
<table border="1">
<tr>
<td colspan="7">TRANSACTIONS LIST<br><a href="insertTransactionRecord.php"> New Record</a></br></td>
</tr>
<tr>
<td>Transaction Number</td>
<td>Transaction Date</td>
<td>Sub Total</td>
<td>Pro Fee</td>
<td>eVAT</td>
<td>Net Cost</td>
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
<td><?php echo $row["TRNo"]; ?></td>
<td><?php echo $row["TDate"]; ?></td>
<td><?php echo $row["SubTotal"]; ?></td>
<td><?php echo $row["ProFee"]; ?></td>
<td><?php echo $row["eVAT"]; ?></td>
<td><?php echo $row["NetCost"]; ?></td>
<td><a href="transactionUpdate.php?TRNo=<?php echo $row["TRNo"]; ?>">Update</a> || <a href="tdeleteProcess.php?TRNo=<?php echo $row["TRNo"]; ?>">Delete</a>
</td>
</tr>

<?php
$i++;
}
?>
</table>
</body>
</html>
