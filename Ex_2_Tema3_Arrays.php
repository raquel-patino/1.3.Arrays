<?php
declare(strict_types = 1);

$X= array (10, 20, 30, 40, 50, 60);

$longitud= count($X);
echo $longitud . "<br>";

function eliminarValor (int $numero) : boolean { 
    $valorEliminar=20;
    return $numero!=$valorEliminar;
}

$X=(array_filter ($X, "eliminarValor"));  
  
print_r ($X);
echo "<br>";
print_r (array_values($X));

$longitud2= count ($X);
echo "<br>";
echo $longitud2;

?>
