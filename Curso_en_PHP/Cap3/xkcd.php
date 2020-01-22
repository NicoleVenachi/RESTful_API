<?php
// echo file_get_contents('https://xkcd.com/info.0.json').PHP_EOL; //Abre y muestra contenido de un arhivo, luego imprime espacio
$json = file_get_contents('https://xkcd.com/info.0.json'); //guardo info en string JSON
$data = json_decode($json,true); //areglo basado en string, true significa que lo mantiene como arreglo, no como obj
echo $data['img'].PHP_EOL; //muestro prop img

