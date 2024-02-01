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
<form method="GET" action="Ejercicio01.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="largo">Largo</label>
<input type="text" name="largo"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<p>
<label for="ancho">Ancho</label>
<input type="text" name="ancho"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>

        
</html>

<?php   
if (isset($_GET['largo']) && isset($_GET['ancho'])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    $largo = (int)$_GET['largo']; //Se crea una variable, se trae el dato de tipo string, se refunde a int y se almacena en la variable.
    $ancho = (int)$_GET["ancho"]; //Se crea una variable, se trae el dato de tipo string, se refunde a int y se almacena en la variable.
    
    //Se utiliza la etiqueta <hr> para hacer un salto de linea y hacer una separación visual.
    echo "<hr>".'El area del rectangulo es: ' . $largo * $ancho . "<br/>"; //Se calcula el area y se imprime la concatenacion.
    echo "El perimetro del rectangulo es: " . (($largo * 2) + ($ancho * 2)); //Se calcula el perimetro y se imprime la concatenacion.
}
?>

