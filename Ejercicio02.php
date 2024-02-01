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
<form method="GET" action="Ejercicio02.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="evaluacion1">Evaluación 1</label>
<input type="text" name="evaluacion1"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<p>
<label for="evaluacion2">Evaluación 2</label>
<input type="text" name="evaluacion2"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<p>
<label for="evaluacion3">Evaluación 3</label>
<input type="text" name="evaluacion3"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<p>
<label for="evaluacion4">Evaluación 4</label>
<input type="text" name="evaluacion4"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
    
        
</html>

<?php
if (isset($_GET['evaluacion1']) && isset($_GET['evaluacion2']) && isset($_GET['evaluacion3']) && isset($_GET['evaluacion4'])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    
$evaluacion1 = (float)$_GET["evaluacion1"]; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.
$evaluacion2 = (float)$_GET["evaluacion2"]; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.
$evaluacion3 = (float)$_GET["evaluacion3"]; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.
$evaluacion4 = (float)$_GET["evaluacion4"]; //Se crea una variable, se trae el dato de tipo string, se refunde a float y se almacena en la variable.
//Se utiliza la etiqueta <hr> para hacer un salto de linea y hacer una separación visual.
echo "<hr>" . 'El promedio final del alumno es: ' . ($evaluacion1 * 0.15 + $evaluacion2 * 0.20 + $evaluacion3 * 0.25 + $evaluacion4 * 0.40); //Se imprime en pantalla la concatenación.
    
}
?>

