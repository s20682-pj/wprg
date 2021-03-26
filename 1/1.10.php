<?php
    function rysuj($n, $poczatek, $kierunek){
        if($poczatek == "MIN"){
            if($kierunek == "LEFT"){
                for($i=1; $i<=$n; $i++){
                    for($j=0; $j<$i; $j++){
                        echo "*";
                    }
                    echo "\n";
                }
            }
            if($kierunek == "RIGHT"){
                for($i=1; $i<=$n; $i++){
                    for($j=0; $j < $n - $i; $j++){
                        echo " ";
                    }
                    for($k=0; $k<$i; $k++){
                        echo "*";
                    }
                    echo "\n";
                }
            }
        }
        if($poczatek == "MAX"){
            if($kierunek == "LEFT"){
                for($i=$n; $i>0; $i--){
                    for($j=0; $j<$i; $j++){
                        echo "*";
                    }
                    echo "\n";
                }
            }
            if($kierunek == "RIGHT"){
                for($i=$n; $i>0; $i--){
                    for($k=$i; $k<$n; $k++){
                        echo " ";
                    }
                    for($j=0; $j<$i; $j++){
                        echo "*";
                    }
                    echo "\n";
                }
            }
        }
    }
    $n="";
    while(!is_numeric($n) || $n < 0) $n = readline();
    rysuj($n,"MIN","LEFT");    
    rysuj($n,"MAX","LEFT");
    rysuj($n,"MAX","RIGHT");
    rysuj($n,"MIN","RIGHT");
?>