<html>
<head>
<body>
<form method="POST" action="">
<label>Imię </label><input type="text" name="imie" size="20" reqiured>
<label>Nazwisko </label><input type="text" name="nazwisko" size="20" reqiured>
<br>
<label>Licza osób </label><select name="osoby">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
<br>
<label>Data przyjadu </label><input type="date" name="data" size="5" reqiured>
<label>Ilość nocy </label><select name="noc">
<option>1</option>
<option>2</option>
<option>3</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
</select>
<br>
<label>Adres<br>Ulica </label><input type="text" name="ulica" size="20" reqiured>
<label>Nr domu </label><input type="text" name="dom" size="5" reqiured>
<label>Nr mieszkania </label><input type="text" name="mieszkanie" size="5">
<br>
<label>Nr karty </label><input type="number" name="karta" size="20" min=0000000000000000 max=9999999999999999 reqiured>
<br>
<label>Email </label><input type="email" name="email" size="10" reqiured>
<br>
<label>Nr telefonu </label><input type="number" name="tel" size="10" min=111111111 max=999999999 reqiured>
<br>
<label>Czy łóżko dla dziecka? </label><input type="checkbox" name="dziecko" value="tak">
<br>
<label>Dodatkowo </label><select multiple name='dodatki[]' size=5>
<option value='kilma'>klimatyzacja</option>
<option value='fajki'>pokój dla palących</option>
<option value=kawa''>ekspres do kawy</option>
<option value='wanna'>wanna</option>
</select>
<br>
<input type="submit" value="Wyślij">
</form>
<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$osoby = $_POST['osoby'];
$data = $_POST['data'];
$noc = $_POST['noc'];
$ulica = $_POST['ulica'];
$dom = $_POST['dom'];
$mieszkanie = $_POST['mieszkanie'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$dziecko = $_POST['dziecko'];
$dodatki = $_POST['dodatki'];
$wybranych=count($dodatki); 
echo("Podsumowanie: ");
echo "\n";
echo("Imię: $imie Nazwisko: $nazwisko Liczba osób: $osoby Data: $data Ilość nocy: $noc Adres: $ulica $dom $mieszkanie Numer karty: $karta Email: $email Numer telefonu: $tel Czy łóżeczko $dziecko Ile dodatków: $wybranych");
  
?>
</body>
</head>
</html>
