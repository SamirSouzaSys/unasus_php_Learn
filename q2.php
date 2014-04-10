<?php

$nl = "<br/>"; //nova linha

/**
 * Resposta a Questão 02 da atividade 02 do data 20140408
 * 
 * @name questao02
 * @author Samir Souza <samir.guitar@gmail.com>
 * @version 1.0
 * 
 * @param int $fatorialDe o número do qual será calculado o fatorial
 * @return int $fatorial do número requisitado
 */

/**
 * 
 * @param type $fD
 * @return int o resultado do fatorial do número requisitado
 */
function q2fatorial($fD){ //fatorial de
    if($fD>1){
        return $fD * q2fatorial($fD-1);
    }else{
        return $fD * $fD;
    }
}

$fatorialDe = 5;

echo "$nl$nl -Q2 $nl O resultado do fatorial de $fatorialDe é ". q2fatorial($fatorialDe). $nl;