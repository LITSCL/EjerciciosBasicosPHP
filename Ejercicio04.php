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
<form method="GET" action="Ejercicio04.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
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
    
    $precioVenta = (float)$_GET['precioVenta']; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.

    if ($precioVenta > 300000) { //Se evalua la condicion.
        $precioVenta = $precioVenta * 0.90; //Se realiza el descuento de 10%.
        $precioVenta = $precioVenta * 1.19; //Se añade el IVA de 19%.
        echo "<hr>"; //Se imprime esta etiqueta html para hacer un salto de línea.
        echo 'El precio de la venta con el IVA es: ' . $precioVenta; //Imprime en pantalla la concatenación.
    }
    else {
        $precioVenta = $precioVenta * 1.19; //Se añade el IVA de 19%.
        echo "<hr>"; //Se imprime esta etiqueta html para hacer un salto de línea.
        echo "El precio de la venta con el IVA es: $precioVenta"; //Imprime en pantalla la concatenación.
    }
    
}   
?>

