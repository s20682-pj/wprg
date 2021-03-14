<html>
<head>
<body>
<form method="POST" action="">
<label>Bok A </label><input type="text" name="liczba1" size="10">
<label>Bok B </label><input type="text" name="liczba2" size="10">
<label>Bok C </label><input type="text" name="liczba3" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$liczba3 = $_POST['liczba3'];

if($liczba1+$liczba2 > $liczba3 && $liczba1+$liczba3 > $liczba2 && $liczba2+$liczba3 > $liczba1){
    echo('ok');
}
else{
    echo('BŁĄD');
    }

?>
</body>
</head>
</html>
