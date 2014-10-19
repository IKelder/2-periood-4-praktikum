<?php
if (isset($_POST["submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	echo "<h2>{$message}</h2>";
} else {
	$message = "Palun logi sisse!";
	echo "<h2>{$message}</h2>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form method="post" style="width: 250px">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" value="Saada" name="submit">
</form>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
</body>
</html>