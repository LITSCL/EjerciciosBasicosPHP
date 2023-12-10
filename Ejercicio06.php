<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio06.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="precioVenta">Precio de la venta</label>
<input type="text" name="precioVenta"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
        
</html>


<?php
if (isset($_GET["precioVenta"])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    
    $precioVenta = (float)$_GET["precioVenta"]; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.

    if ($precioVenta > 500000) { //Se evalua la condición.
        $precioVenta = $precioVenta * 0.90;
    }
    else{
        $precioVenta = $precioVenta * 0.95;
    }

    echo "<hr>" . "El precio de la venta con el IVA incluido es: " . $precioVenta; //Se imprime en pantalla la concatenación.

}
?>

