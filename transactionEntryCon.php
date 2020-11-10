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
$TDate = mysqli_real_escape_string($link, $_REQUEST['txtDate']);
$SubTotal = mysqli_real_escape_string($link, $_REQUEST['txtTotal']);
$ProFee = mysqli_real_escape_string($link, $_REQUEST['txtFee']);
$eVAT = mysqli_real_escape_string($link, $_REQUEST['txteVAT']);
$NetCost = mysqli_real_escape_string($link, $_REQUEST['txtNCost']);
$sql = "INSERT INTO tbltransaction (TDate,SubTotal,ProFee,eVAT,NetCost) VALUES ('$TDate',
'$SubTotal','$ProFee','$eVAT','$NetCost')";
if(mysqli_query($link, $sql))
{
 echo "Records added successfully.";
}
else
{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>