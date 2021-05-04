<html>
<head>
<body>
<form method="POST" action="3.1.php">
<input type="text" name="liczba1" size="10">
<select name="znak">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="text" name="liczba2" size="10">
<input type="submit" value="Oblicz">
</form>
<?php
if (isset($_POST["liczba1"]) && isset($_POST["liczba2"]) && isset($_POST["znak"])) {
    $liczba1 = $_POST["liczba1"];
    $liczba2 = $_POST["liczba2"];
    $znak = $_POST["znak"];

    switch ($znak) {
        case "+": {
            require 'funkcje.php';
            dodaj($liczba1, $liczba2);
            break;
        }
        case "-": {
            require 'funkcje.php';
            odejmij($liczba1, $liczba2);
            break;
        }
        case "*": {
            require 'funkcje.php';
            pomnóż($liczba1, $liczba2);
            break;
        }
        case "/": {
            require 'funkcje.php';
            if ($liczba2 != 0) {
                podziel($liczba1, $liczba2);
            } else {
                echo "Tak nie można";
            }
            break;
        }
    }
}
?>
</body>
</head>
</html>
