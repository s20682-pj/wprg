<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form method="post">
    Imię:<br>
    <input type="text" name="name"><br>
    Nazwisko:<br>
    <input type="text" name="surname"><br>
    Wiek:<br>
    <input type="text" name="age"><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
              
$name=$_POST['name'];
$surname=$_POST['surname'];
$age=$_POST['age'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $name);
fwrite($fp, " ");
fwrite($fp, $surname);
fwrite($fp, " ");
fwrite($fp, $age);
fwrite($fp, "\n");
fclose($fp);

?>