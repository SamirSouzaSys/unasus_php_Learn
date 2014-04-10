<?php

/**
 * Resposta a Questão 05 da atividade 02 do data 20140408 - mostrará o resultado de três funções geométricas
 * 
 * @name questao05
 * @author Samir Souza <samir.guitar@gmail.com>
 * @version 1.0
 */


/**
 * @author Samir Souza <samir.guitar@gmail.com> 
 * @param type $lado
 * @return float $result
 */
function areaQuadrado($lado){ //área do quadrado
    return $lado*$lado;
}

/**
 * @author Samir Souza <samir.guitar@gmail.com>
 * @param type $l1
 * @param type $l2
 * @return float $result
 */
function hipotenusa($l1,$l2){ //fatorial de
    return sqrt($l1^2 + $l2^2);
}

/**
 * @author Samir Souza <samir.guitar@gmail.com>
 * @param type $base
 * @param type $altura
 * @return float $result
 */
function areaTriangulo($base,$altura){
    return ($base * $altura)/2;
}


$nl = "<br/>"; //nova linha

$ladoQuadrado = 5;

$cateto1 = 9;
$cateto2 = 3;

$altura = 5;
$base = 2;

echo "A área do quadrado de lado $ladoQuadrado é ". areaQuadrado($ladoQuadrado).$nl.$nl;
echo "A área do triângulo de altura $altura e base $base é ". areaTriangulo($base,$altura).$nl.$nl;
echo "A Hipotenusa do Triângulo de Lados ".$cateto1. ' e '.$cateto2. " é aproximadamente " .  hipotenusa($cateto1,$cateto2).$nl.$nl;