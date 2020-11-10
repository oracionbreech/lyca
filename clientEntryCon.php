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
$Client_name = mysqli_real_escape_string($link, $_REQUEST['txtCN']);
$Address = mysqli_real_escape_string($link, $_REQUEST['txtAdd']);
$Age = mysqli_real_escape_string($link, $_REQUEST['txtAge']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['txtGender']);
$ContactNo = mysqli_real_escape_string($link, $_REQUEST['txtCNo']);
$CStatus = mysqli_real_escape_string($link, $_REQUEST['txtCS']);
$sql = "INSERT INTO tblclient (Client_name,Address,Age,Gender,ContactNo,CStatus) VALUES ('$Client_name', '$Address',
'$Age','$Gender','$ContactNo','$CStatus')";
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