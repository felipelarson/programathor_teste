<?php

function primos($inicial, $final) {
  $retorno = array();

  for ($i=$inicial; $i < $final; $i++) { 
    if(testar_primo($i)){
      array_push($retorno, $i);
    }
  }

  print_r($retorno);
}

function testar_primo($numero){ 
	for ($i = 2; $i < sqrt($numero); $i++){ 
		if ($numero % $i == 0) 
			return false; 
	} 
	return true; 
}


primos(10, 29);
primos(11, 30);
primos(2, 10);