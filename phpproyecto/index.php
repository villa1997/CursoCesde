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
        <h1>
            <?php
                // Esto es un Comentario
                $PrimeraVariable = 2;
                 $SegundaVariable = 5;
                 $Lenguaje = "HTML";
                echo $PrimeraVariable / $SegundaVariable . "<br>" ;
                if ($PrimeraVariable == 2 && $SegundaVariable == 5){
                    echo 'soy menor'. "<br>";
                }
                else{
                     echo 'soy mayor'. "<br>";
                }
                switch ($Lenguaje){
                    case "PHP":
                        echo 'PHP';
                        break;
                    case"JAVASCRIPT" :
                        echo 'JAVASCRIPT';
                        break;
                    case "HTML":
                        echo 'HTML';
                        break;
                }
                //echo $SegundaVariable + $SegundaVariable;
            ?>   
        </h1>
        <p>
            <h1>
                <?PHP
                    echo 'Esta es otra seccion';
                ?>
             </h1>
        </p>  
    </body>
</html>
