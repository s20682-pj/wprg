<html>
<head>
<body>
<form method="POST" action="3.3.php">
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
<br>
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
$dodatki = $_POST['dodatki'];
$wybranych=count($dodatki); 
    
if (isset($_POST['dziecko'])) {
							$dziecko = 'Łóżeczko - tak';
						} else {
							$dziecko = 'Łóżeczko - nie';
						}

$fp = fopen('rezerwacja.csv', 'a');
fwrite($fp, $imie);
fwrite($fp, ";");
fwrite($fp, $nazwisko);
fwrite($fp, ";");
fwrite($fp, $osoby);
fwrite($fp, ";");
fwrite($fp, $data);
fwrite($fp, ";");
fwrite($fp, $noc);
fwrite($fp, ";");
fwrite($fp, $ulica);
fwrite($fp, ";");
fwrite($fp, $dom);
fwrite($fp, ";");
fwrite($fp, $mieszkanie);
fwrite($fp, ";");
fwrite($fp, $karta);
fwrite($fp, ";");  
fwrite($fp, $email);
fwrite($fp, ";");  
fwrite($fp, $tel);
fwrite($fp, ";");  
fwrite($fp, $dziecko);
fwrite($fp, ";"); 
fwrite($fp, $wybranych);
fwrite($fp, "\n");
?>   
    
<form action="3.3.php" method="post">
    <label>
        <tr>
            <br><br>
            <td>Pokaż tabelę</td>
            <td><input type="checkbox" name="wynik"></td>
            <br>
            <td><input type="submit" value="Wyślij"/></td>
        </tr>
    </label>
</form>

<?php
$row = 1;
if (isset($_POST["results"])) {
if (($handle = fopen("rezerwacja.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}}
?>
</body>
</head>
</html>
