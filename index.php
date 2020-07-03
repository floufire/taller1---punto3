<?php
 $pardezapatos=150000;
 $caso1=($pardezapatos*3)-45000;
 $caso2=($pardezapatos*4)-120000 ;
 $caso3=($pardezapatos*5)-150000;
 

 $cantidadz="5";

 if ($cantidadz= "0" ||  $cantidadz= "1" || $cantidadz= "2" || $cantidadz= "3" || $cantidadz= "4" || $cantidadz= "5") {
    $cantidadz="5";
    switch ($cantidadz) {
        case "3":
        echo "El precio de su compra con el 10% es= ".$caso1;
        break;
        case "4":
        echo "El precio de su compra con el 20% es= ".$caso2;
        break;
        case "5":
        echo "El precio de su compra con el 20% es= ".$caso3;
        break;
    }
 }else{
    echo("<br>");
    echo("El precio de su compra es igual a " .$pardezapatos. " multiplicado por la cantidad de pares de zapatos que compraste menos la division del total por 100 multiplicado por 40");
 }