<!DOCTYPE html>
<html>
	<head>
		<title>Temperature conversion</title>
	</head>
	<body>
		
		<form action="temperature-form-processor.php" method="post">
			<input type="number" name="temperature">
			C<input type="radio" name="units" value="C">
			F<input type="radio" name="units" value="F">
			<input type="submit" name="submit" value="CONVERT">
		</form>
		
		
	</body>
</html>