<?php 

$texto = file_get_contents('nombres.txt');

$textoLimpio = str_replace('"', '', $texto);

$array = explode(",", $textoLimpio);

sort($array);

$puntuacion = 0;
for($x = 0; $x<count($array); $x++){

  $puntuacion = $puntuacion + puntuacion($array[$x], $x+1);
}

echo "El resultado es: ".$puntuacion;

/**
 * Función para encontrar la puntuacion del nombre
 *
 * @param [type] $name
 * @return void
 */
function puntuacion($name, $key): int
{
    $alphabet = [
      'A' => 1,
      'B' => 2,
      'C' => 3,
      'D' => 4,
      'E' => 5,
      'F' => 6,
      'G' => 7,
      'H' => 8,
      'I' => 9,
      'J' => 10,
      'K' => 11,
      'L' => 12,
      'M' => 13,
      'N' => 14,
      'O' => 15,
      'P' => 16,
      'Q' => 17,
      'R' => 18,
      'S' => 19,
      'T' => 20,
      'U' => 21,
      'V' => 22,
      'W' => 23,
      'X' => 24,
      'Y' => 25,
      'Z' => 26
    ];
    $newArray = str_split($name);
    $result = 0;
    for($i = 0; $i<count($newArray); $i++){
      $result = $result + $alphabet[$name[$i]];
    }
    return $result * $key;
}