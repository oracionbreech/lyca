<html>
<head>
<meta charset="utf-8">
<title>Transaction Entry</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Transaction Entry</h1>
<form action="transactionEntryCon.php" method="post">
<label for="TDate">
<i class="fas fa-user">Transaction Date:</i>
</label>
<input type="text" name="txtDate" placeholder="Enter Transaction Date" id="TDate" required>

<label for="SubTotal">
<i class="fas fa-lock">Sub Total:</i>
</label>
<input type="text" name="txtTotal" placeholder="Enter Sub Total" id="SubTotal" required>

<label for="ProFee">
<i class="fas fa-lock">Pro Fee:</i>
</label>
<input type="text" name="txtFee" placeholder="Enter Pro Fee" id="ProFee" required>

<label for="eVAT">
<i class="fas fa-lock">eVAT:</i>
</label>
<input type="text" name="txteVAT" placeholder="Enter eVAT" id="eVAT" required>

<label for="NetCost">
<i class="fas fa-lock">Net Cost:</i>
</label>
<input type="text" name="txtNCost" placeholder="Enter Net Cost" id="NetCost" required>

<input type="submit" value="SUBMIT">
</form>

<form action="transactionRecord.php" method="post">
	<input type="submit" value="See Records">
</form>

<form action="insertRecord.php" method="post">
	<input type="submit" value="Insert new Car Record">
</form>

<form action="insertClientRecord.php" method="post">
	<input type="submit" value="Insert new Client Record">
</form>
</div>
</body>
</html>
