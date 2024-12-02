<?php
declare(strict_types = 1);

$array = array ("rAquel", "max", "alicia", "danou");
$caracter = "B";

encontrarValor ($array, $caracter);

function encontrarValor (array $array, string $caracter) {
    $i=0;
    $encontrado=true;

$arrayMinus= array_map("strtolower", $array);
$caracterMinus = strtolower ($caracter);   

while ($i<count($arrayMinus) && $encontrado=true) {
    if(!str_contains($arrayMinus[$i], $caracterMinus)) {
    	$encontrado = false;
    } 
$i++;
}

if ($encontrado){
    echo "El caracter se encuentra en todas las palabras";
}else {
	echo "El caracter no se encuentra en todas las palabras";
} 

}

?>





