<html>
<head>
<body>
<form method="POST" action="">
<label>Liczba </label><input type="text" name="liczba" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba = $_POST['liczba'];
$x = 0;

if ($liczba < 1) {
         print ("Coś jest nie tak");
       } elseif ($liczba == 1) {
         print ('Liczba 1 nie jest ani pierwsza, ani złożona.');
       } else {
         $pierwsza = True;
         for ($i = 2; $i < $liczba; $i++) {
           if ($pierwsza) {
             if ($liczba % $i == 0) {
              $pierwsza = False;
             }
           }$x++;
         }
      }
      if ($pierwsza) {
        print ("Liczba $liczba jest pierwsza. ");
        echo $x;
      } else {
        print ("Liczba $liczba nie jest pierwsza. ");
        echo $x;
      }

?>
</body>
</head>
</html>
