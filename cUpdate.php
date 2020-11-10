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
mysqli_query($link,"UPDATE tbltransaction set TDate='" . $_POST['txtDate'] . "', SubTotal='" .
$_POST['txtTotal'] . "', ProFee='" . $_POST['txtFee'] . "', eVAT=" . $_POST['txteVAT'] . "
,NetCost='" . $_POST['txtNCost'] . "' WHERE TRNo=" .
$_POST['txtTRNo'] . "");
$message = "Record Modified Successfully";
}
$result = mysqli_query($link,"SELECT * FROM tbltransaction WHERE TRNo=" . $_GET['TRNo'] . "");
$row= mysqli_fetch_array($result);
?><html>
<head>
<title>Update Transactions Data</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Edit Transactions List</h1>
<form name="frmUser" method="post" action="">
<?php
if(isset($message))
{
echo '<script>alert("Record Modified Successfully")</script>';
}
?>
<label for="TDate">
<i class="fas fa-user">Transaction Date:</i>
</label>
<input type="hidden" name="txtTRNo" class="txtField" value="<?php echo $row['TRNo']; ?>">
<input type="text" name="txtDate" value="<?php echo $row['TDate']; ?>">
<label for="SubTotal">
<i class="fas fa-user">Sub Total:</i>
</label>
<input type="text" name="txtTotal" class="txtField" value="<?php echo $row['SubTotal']; ?>">
<label for="ProFee">
<i class="fas fa-user">Pro Fee:</i>
</label>
<input type="text" name="txtFee" class="txtField" value="<?php echo $row['ProFee']; ?>">
<label for="eVAT">
<i class="fas fa-user">eVAT:</i>
</label>
<input type="text" name="txteVAT" class="txtField" value="<?php echo $row['eVAT']; ?>">
<label for="NetCost">
<i class="fas fa-user">Net Cost:</i>
</label>
<input type="text" name="txtNCost" class="txtField" value="<?php echo $row['NetCost']; ?>">

<input type="submit" name="submit" value="Submit" class="button">
</form>

<form action="clientRecord.php" method="post">
<input type="submit" value="See Records">
</form>

</div>
</body>
</html>