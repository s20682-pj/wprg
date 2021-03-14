<html>
<head>
<body>
<form method="POST" action="">
<label>Bok A </label><input type="text" name="liczba1" size="10">
<label>Bok B </label><input type="text" name="liczba2" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Pole prostokąta o wprowadzonych bokach to: ' . ($liczba1 * $liczba2);
?>
</body>
</head>
</html>
