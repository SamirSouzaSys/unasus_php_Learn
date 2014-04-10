<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

       
        for($i=0 ; $i<10 ; $i++){
            $arrayTeste[] = $i+100;
        }
        foreach($arrayTeste as $cadaUm){
            echo $i.' = '. $cadaUm +     9 . ' <br/>';
        }
        echo '-<br/>';
        echo '-<br/>';
        echo '-<br/>';
        echo '-<br/>';

        $valor = 'Simplismente PHP';
        echo "imprimindo na tela.$valor<br/>";
        echo 'imprimindo na tela'.$valor;
  
        ?>
    </body>
</html>
