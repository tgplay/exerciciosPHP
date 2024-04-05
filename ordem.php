<?php

$notas = array(5, 3, 2, 4, 7, 1, 0, 6);
$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);

echo "Ordenadas:";
var_dump($notasOrdenadas);
