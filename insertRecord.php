<html>
<head>
<meta charset="utf-8">
<title>Car Entry</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="login">
<h1>Car Entry</h1>
<form action="carEntryCon.php" method="post">
<label for="carengine">
<i class="fas fa-user">Car Engine #:</i>
</label>
<input type="text" name="txtENo" placeholder="Enter Car Engine Number" id="carengine" required>
<label for="carmodel">
<i class="fas fa-user">Car Model:</i>
</label>
<input type="text" name="txtModel" placeholder="Enter Car Model" id="carmodel" required>
<label for="carbrand">
<i class="fas fa-lock">Car Brand:</i>
</label>
<input type="text" name="txtBrand" placeholder="Enter Car Brand" id="carbrand" required>
<label for="carcolor">
<i class="fas fa-lock">Car Color:</i>
</label>
<input type="text" name="txtColor" placeholder="Enter Car Color" id="carcolor" required>
<label for="carprice">
<i class="fas fa-lock">Car Price:</i>
</label>
<input type="text" name="txtPrice" placeholder="Enter Car Price" id="carprice" required>
<label for="plateno">
<i class="fas fa-lock">Plate #:</i>
</label>
<input type="text" name="txtPlateNo" placeholder="Enter Plate Number" id="plateno" required>
<input type="submit" value="SUBMIT">
</form>
</div>
</body>
</html>