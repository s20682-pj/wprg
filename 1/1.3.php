<html>
<head>
<body>
<form method="POST" action="">
<label>Wartość A </label><input type="text" name="liczba" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba = $_POST['liczba'];
$wynik = round((sqrt($liczba)),2)
echo 'Wynik pierwiastkowania to to: ' . $liczba;
?>
</body>
</head>
</html>
