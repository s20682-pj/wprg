<html>
<head>
<body>
<form method="POST" action="">
<label>Wartość A </label><input type="text" name="liczba1" size="10">
<label>Wartość B </label><input type="text" name="liczba2" size="10">
<label>Wartość C </label><input type="text" name="liczba3" size="10">
<input type="submit" value="Licz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$liczba3 = $_POST['liczba3'];
    
if ($liczba1 < $liczba2 && $liczba1 < $liczba3){
    if ($liczba2 < $liczba3){
        echo $liczba1;
        echo $liczba2;
        echo $liczba3;
    }else{
        echo $liczba1;
        echo $liczba3;
        echo $liczba2;
    }
} else if($liczba2 < $liczba1 && $liczba2 < $liczba3){
    if ($liczba1 < $lcizba3){
        echo $liczba2;
        echo $liczba1;
        echo $liczba3;
    }else{
        echo $liczba2;
        echo $liczba3;
        echo $liczba1;
    }
} else if($liczba3 < $liczba1 && $liczba3 < $liczba2){
    if ($liczba1 < $liczba2){
        echo $liczba3;
        echo $liczba1;
        echo $liczba2;
    }else{
        echo $liczba3;
        echo $liczba2;
        echo $liczba1;
    }
}

echo "<br />";
    
if ($liczba1 > $liczba2 && $liczba1 > $liczba3){
    if ($liczba2 > $liczba3){
        echo $liczba1;
        echo $liczba2;
        echo $liczba3;
    }else{
        echo $liczba1;
        echo $liczba3;
        echo $liczba2;
    }
} else if($liczba2 > $liczba1 && $liczba2 > $liczba3){
    if ($liczba1 > $lcizba3){
        echo $liczba2;
        echo $liczba1;
        echo $liczba3;
    }else{
        echo $liczba2;
        echo $liczba3;
        echo $liczba1;
    }
} else if($liczba3 > $liczba1 && $liczba3 > $liczba2){
    if ($liczba1 > $liczba2){
        echo $liczba3;
        echo $liczba1;
        echo $liczba2;
    }else{
        echo $liczba3;
        echo $liczba2;
        echo $liczba1;
    }
}
 
?>
</body>
</head>
</html>
