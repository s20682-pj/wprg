<html>
<head>
<body>
<form method="POST" action="">
<label>Wartość A </label><input type="text" name="napis1" size="10">
<label>Wartość B </label><input type="text" name="napis2" size="10">
<input type="submit" value="Licz">
</form>
<?php
$napis1 = $_POST['napis1'];
$napis2 = $_POST['napis2'];
echo '"%' . $napis2 . ' ' . $napis1 . '%$#"';
?>
</body>
</head>
</html>