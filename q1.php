<?php

$nl = "<br/>"; //nova linha

/**
* Resposta a Questão 01 da atividade 02 do data 20140408
* 
* @name questao01
* @author Samir Souza <samir.guitar@gmail.com>
* @version 1.0
* 
* @param int $fatorialDe o número do qual será calculado o fatorial
* @return
*/
$fatorialDe = 5;
$result1 = 1;

for($i = $fatorialDe ; $i!= 0 ; $i--)
  $result1 = $result1 * $i;

echo "$nl$nl -Q1 $nl O resultado do fatorial de $fatorialDe é $result1$nl";

