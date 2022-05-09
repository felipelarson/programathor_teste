<?php

function sequencia_crescente($array){
  $inicial=0;
  for ($i=0; $i < count($array); $i++) { 

    if($inicial > $array[$i]){
      print_r($array);
      return "false";
    }

    $inicial = $array[$i];
  }
  print_r($array);
  return "true";
}

echo(sequencia_crescente([1, 3, 2, 1])), PHP_EOL;
echo(sequencia_crescente([1, 2, 3, 5])), PHP_EOL;
echo(sequencia_crescente([1, 3, 2])), PHP_EOL;
echo(sequencia_crescente([1, 2, 1, 2] )), PHP_EOL;
echo(sequencia_crescente([3, 6, 5, 8, 10, 20, 15])), PHP_EOL;
echo(sequencia_crescente([1, 1, 2, 3, 4, 4])), PHP_EOL;
echo(sequencia_crescente([1, 4, 10, 4, 2])), PHP_EOL;
echo(sequencia_crescente([10, 1, 2, 3, 4, 5] )), PHP_EOL;
echo(sequencia_crescente([1, 1, 1, 2, 3])), PHP_EOL;
echo(sequencia_crescente([0, -2, 5, 6] )), PHP_EOL;
echo(sequencia_crescente([1, 2, 3, 4, 5, 3, 5, 6])), PHP_EOL;
echo(sequencia_crescente([40, 50, 60, 10, 20, 30])), PHP_EOL;
echo(sequencia_crescente([1, 1] )), PHP_EOL;
echo(sequencia_crescente([1, 2, 5, 3, 5] )), PHP_EOL;
echo(sequencia_crescente([1, 2, 5, 5, 5])), PHP_EOL;
echo(sequencia_crescente([10, 1, 2, 3, 4, 5, 6, 1])), PHP_EOL;
echo(sequencia_crescente([1, 2, 3, 4, 3, 6] )), PHP_EOL;
echo(sequencia_crescente([1, 2, 3, 4, 99, 5, 6] )), PHP_EOL;
echo(sequencia_crescente([123, -17, -5, 1, 2, 3, 12, 43, 45] )), PHP_EOL;
echo(sequencia_crescente([3, 5, 67, 98, 3])), PHP_EOL;