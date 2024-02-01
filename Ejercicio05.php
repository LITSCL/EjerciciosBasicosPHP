<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio05.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="numero">Ingrese un número</label>
<input type="text" name="numero"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
        
</html>

<?php
if (isset($_GET["numero"])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    
    $numero = (int)$_GET["numero"]; //Se crea una variable, se trae el dato de tipo string, se refunde a int y se almacena en la variable.

    if ($numero < 0) {
        echo "<hr>" . "El numero es negativo";
    }
    elseif ($numero > 0) {
        echo "<hr>" . "El numero es positivo";
    }
    else{
        echo ("<hr>" . "El numero es igual a 0");
    }
    
}
?>
