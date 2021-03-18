<html>
<head>
<body>
<form method="POST" action="">
<label>Wartość </label><input type="text" name="napis" size="10">
<input type="submit" value="Licz">
</form>
<?php
$napis = $_POST['napis'];
 
if(isPangram($napis)==true){
    echo "true";
} else {
    echo "false";
}

function isPangram($napis){
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $isPangram = false;
    $array = str_split($napis);
    foreach ($array as $char) {
            if (ctype_alpha($char)) {
                    if (ctype_upper($char)) {
                        $char = strtolower($char);
                    }
            $key = array_search($char, $alphabet);
            if ($key !== false) {
                unset($alphabet[$key]);
            }
            }
    }
if (!$alphabet) {
    $isPangram = true;
}
return $isPangram;
}
?>
</body>
</head>
</html>
