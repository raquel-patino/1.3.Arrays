<?php
declare (strict_types=1);

$alumnos = array (
    "Juan" => [4, 3, 8, 7, 7],
    "Iris" => [10, 10, 9, 8, 8],
    "Ines" => [6, 7, 7, 8, 7],
    "Luis" => [10, 9, 8, 6, 5]
);

medias($alumnos);

function medias (array $alumnos) : void {
$sumaClase=0;
    foreach($alumnos as $nombre=> $nota){
        $sumaAlumno= array_sum($nota);
        $mediaAlumno = $sumaAlumno/ count($nota);
        echo "La media de $nombre es: $mediaAlumno". PHP_EOL;

        $sumaClase+= $mediaAlumno;
    }

$mediaClase=0;
$mediaClase = $sumaClase /count($alumnos);
echo "La media de la clase es: $mediaClase";

}

?>
