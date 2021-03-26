<?php
    function blad($array){
        foreach($array as $value){
            if(!is_numeric($value)) exit("BŁĄD");
        }
    }

    $nArray = [];
    $mArray = [];
    $input =  explode(" ",readline());

    $nNumbers = explode(" ",readline());
    $mNumbers = explode(" ",readline());
    
    $n = $input[0];
    $m = $input[1];

    blad($nNumbers);
    blad($mNumbers);
    if(count($nNumbers) != $n || count($mNumbers) != $m || !is_numeric($n) || !is_numeric($m) || $n != $m){
        exit("BŁĄD");
    }

    foreach($nNumbers as $value){
        array_push($nArray, intval($value));
    }
    foreach($mNumbers as $value){
        array_push($mArray, intval($value));
    }
    
    $i=0;
    $result = 0;
    while($i < count($nArray)){
        $result += $nArray[$i] * $mArray[$i];
        $i++;
    }
    echo $result;
?>