<?php
 $array = [
    'chave1' => 1,
    'chave2' => 2,
    'chave3' => 3,
];

$array[] = 4;           //elemento adicionado SEM chave.
$array['chave5'] = 5;   //elemento adicionado COM chave.
$array[] = 6;           //elemento adicionado SEM chave.

foreach($array as $indice => $elemento){
    echo 'O índice é '. $indice . '. O elemento é ' . $elemento . PHP_EOL;
}

//Testando tipos de chaves em vetores: 

$teste = [
    1 => 1,
    '1' => 2,
    1.5 => 3,
    true => 4,
    2.333 => 5
];

foreach($teste as $indice => $valor){
    echo 'O índice de teste é:' . $indice . 'e o valor de teste é:' . $valor . PHP_EOL;
}