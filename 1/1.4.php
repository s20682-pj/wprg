<html>
<head>
<body>
<form method="POST" action="">
<label>Wartość A </label><input type="text" name="liczba1" size="10">
<label>Wartość B </label><input type="text" name="liczba2" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Wynik dodawania: ' . ($liczba1 + $liczba2);
echo("<br>");
echo 'Wynik odejmowania: ' . ($liczba1 - $liczba2);
echo("<br>");
echo 'Wynik mnożenia: ' . ($liczba1 * $liczba2);
echo("<br>");
echo 'Wynik modulo: ' . ($liczba1 % $liczba2);
?>
</body>
</head>
</html>
