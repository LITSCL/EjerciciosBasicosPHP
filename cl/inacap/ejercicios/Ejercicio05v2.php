<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio05v2.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
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
    
    $numero = $_GET["numero"]; //Se almacena un string en la variable.
    echo "<hr>";
    if ($numero < 0) {
        echo "El numero es negativo";
    }
    elseif ($numero > 0) {
        echo "El numero es positivo";
    }
    else {
        echo("El numero es igual a 0");
    }
    
} 
?>

