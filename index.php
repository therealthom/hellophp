<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            // Código PHP para obtener el factorial de un número
            // función para obtener factorial de forma iterativa
            function obtieneFactorial($numero){ 
                $factorial = 1; 
                for ($i = 1; $i <= $numero; $i++){ 
                  $factorial = $factorial * $i; 
                } 
                return $factorial; 
            } 

            //Ejemplo
            $numero = 20; 
            $resultado = obtieneFactorial($numero); 
            echo "Factorial de $numero = $resultado"; 
            echo "Factorial de $numero = $resultado"; 
            echo "Factorial de $numero = $resultado"; 
            echo "Factorial de $numero = $resultado"; 
            echo "Factorial de $numero = $resultado";     
        ?> 
    </body>
</html>
