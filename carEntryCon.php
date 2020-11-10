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
$eno = mysqli_real_escape_string($link, $_REQUEST['txtENo']);
$cmodel = mysqli_real_escape_string($link, $_REQUEST['txtModel']);
$cbrand = mysqli_real_escape_string($link, $_REQUEST['txtBrand']);
$ccolor = mysqli_real_escape_string($link, $_REQUEST['txtColor']);
$cprice = mysqli_real_escape_string($link, $_REQUEST['txtPrice']);
$cplateno = mysqli_real_escape_string($link, $_REQUEST['txtPlateNo']);
$sql = "INSERT INTO tblcar (ceno,cmodel,cbrand,cprice,ccolor,plateno) VALUES ('$eno', '$cmodel', 
'$cbrand','$cprice','$ccolor','$cplateno')";
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