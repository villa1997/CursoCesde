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
        <pre>
            <?php
                $lenguajes = ['html', 'css', 'javascript'];
                print_r($lenguajes);
                echo '<br>';
                var_dump($lenguajes);

                $lenguajes = array_pop($lenguajes);
                echo 'javascript';  
            ?>
            <h2>
                <?php
                // Funcion sin parametros
                    function saludar (){
                        echo'<h1>'. "Hola a todos". '</h1>';
                    }
                    saludar();
                    // Funcion con parametros
                    function usuario($nombre, $tel){
                        echo 'nombre: ' . $nombre . '<br>';
                        echo 'Telefono: '. $tel . '<br>';
                    }

                    echo '<br>';
                    usuario("dave", 12345);
                ?>
            </h2>
        </pre>
    </body>
</html>
