<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio03.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="numero1">Numero 1</label>
<input type="text" name="numero1"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<p>
<label for="numero2">Numero 2</label>
<input type="text" name="numero2"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
                     
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
    
        
</html>

<?php
if (isset($_GET["numero1"]) && isset($_GET["numero2"])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    
    $numero1 = (int)$_GET["numero1"]; //Se crea una variable, se trae el dato de tipo string, se refunde a int y se almacena en la variable.
    $numero2 = (int)$_GET["numero2"]; //Se crea una variable, se trae el dato de tipo string, se refunde a int y se almacena en la variable.

    if ($numero1 > $numero2) { //Se evalua la condicion.
        echo "<hr>";
        echo "El primer numero es mayor que el segundo <br/>"; //Se imprime en pantalla si la condicion se cumple.
    }
    elseif ($numero1 < $numero2) { //Si la condicion anterior no se cumple, se evalua esta.
        echo "<hr>";
        echo "El segundo numero es mayor que el primero <br/>"; 
    }
    else { //Si ninguna condición se cumplio, se ejecuta el codigo del else.
        echo "<hr>";
        echo 'Ambos numeros son iguales';
    }
    
}
?>

