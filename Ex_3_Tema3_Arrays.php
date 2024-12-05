<?php
declare(strict_types = 1);

$palabras = array ("rAquel", "max", "alicia", "danou");
$caracter = "a";

encontrarValor ($palabras, $caracter);

function encontrarValor (array $palabras, string $caracter) : void{
    $i=0;
    $encontrado=true;

$arrayMinus= array_map("strtolower", $palabras);
$caracterMinus = strtolower ($caracter);   

while ($i < count($arrayMinus) && $encontrado) {
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





