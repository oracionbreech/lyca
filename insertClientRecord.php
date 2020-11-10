<html>
<head>
<meta charset="utf-8">
<title>Client Entry</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Client Entry</h1>
<form action="clientEntryCon.php" method="post">

<label for="Client_name">
<i class="fas fa-user">Name:</i>
</label>
<input type="text" name="txtCN" placeholder="Enter Name" id="Client_name" required>

<label for="Address">
<i class="fas fa-lock">Address:</i>
</label>
<input type="text" name="txtAdd" placeholder="Enter Address" id="Address" required>

<label for="Age">
<i class="fas fa-lock">Age:</i>
</label>
<input type="text" name="txtAge" placeholder="Enter Age" id="Age" required>

<label for="Gender">
<i class="fas fa-lock">Gender:</i>
</label>
<input type="text" name="txtGender" placeholder="Enter Gender" id="Gender" required>

<label for="ContactNo">
<i class="fas fa-lock">Contact Number:</i>
</label>
<input type="text" name="txtCNo" placeholder="Enter Contact Number" id="ContactNo" required>

<label for="CStatus">
<i class="fas fa-lock">Civil Status:</i>
</label>
<input type="text" name="txtCS" placeholder="Enter Civil Status" id="CStatus" required>

<input type="submit" value="SUBMIT">
</form>

<form action="clientRecord.php" method="post">
	<input type="submit" value="See Records">
</form>

<form action="insertTransactionRecord.php" method="post">
	<input type="submit" value="Insert new Transaction Record">
</form>

<form action="insertRecord.php" method="post">
	<input type="submit" value="Insert new Car Record">
</form>

</div>
</body>
</html>
