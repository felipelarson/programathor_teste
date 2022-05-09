<?php

$array_sorteado = array();
$numeros_unicos = array();

for ($i=0; $i < 20; $i++) { 
  array_push($array_sorteado, random_int(1, 10));
}

$contagem_array = array_count_values($array_sorteado);

foreach ($contagem_array as $key => $value) {

  echo $key," - ", $value, PHP_EOL;
  if($value == 1){
    array_push($numeros_unicos, $key);
    echo "escolhido ", $key, PHP_EOL;
  }
}

print_r($numeros_unicos);