<?php

/**
 * Resposta a Questão 04 da atividade 02 do data 20140408 - imprimirá oa sequencia de fibonnaci até 144
 * 
 * @name questao04
 * @author Samir Souza <samir.guitar@gmail.com>
 * @version 1.0
 * 
 */
/**
 * 
 * @param type $anterior
 * @param type $atual
 * @param type $seq
 * @param type $lim
 * @return array Com os números da sequência
 */
function fibonnaci($anterior,$atual,$seq,$lim){ //fatorial de
    if($anterior == 0){ //iniciando
        $seq[] = $atual;
        return fibonnaci($atual,($atual+$anterior),$seq,$lim);
    }else{
        if($atual >= $lim){
            if($atual == $lim)
                $seq[] = $atual;
            return $seq;
        }
        $seq[] = $atual;
        return fibonnaci($atual, ($atual+$anterior), $seq,$lim);    
    }
}

$nl = "<br/>"; //nova linha
//$result = 1;
$limite = 144;
$sequencia = fibonnaci(0,1,$sequencia,$limite);

echo "$nl$nl -Q4 A Sequência de Fibonnaci tendo como o máximo menor ou igual a $limite é:$nl";
foreach($sequencia as $valor){
    echo ' -> '.$valor ;
}
echo $nl;

