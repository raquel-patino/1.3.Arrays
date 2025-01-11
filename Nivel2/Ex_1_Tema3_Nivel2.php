<?php
declare (strict_types=1);
$numerosEnteros= array (10, 15, 8, 52, 35);
$numerosDecimales= array (10.5, 15, 52, 33.75, 44.12);

$interseccion=array_intersect ($numerosEnteros, $numerosDecimales);

print_r($interseccion);

$unionArrays= array_merge($numerosEnteros,$numerosDecimales);

print_r($unionArrays);

?>