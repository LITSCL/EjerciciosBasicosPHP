<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio08.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="segundos">Segundos</label>
<input type="text" name="segundos"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
        
</html>

<?php 
if (isset($_GET["segundos"])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
echo "<hr>"; 
$segundos = (int)$_GET['segundos'];
$minutos = number_format($segundos / 60); //El método number_format() permite quitar los decimales a un número.
$segundosFaltantes = 0;

if ($segundos%60 != 0) { //Se evalúa la condición.
    while ($segundos%60 != 0) {
        $segundos = $segundos + 1;
        $segundosFaltantes = $segundosFaltantes + 1;
    }
}
else {
    $segundosFaltantes = 60;
    echo "Los segundos que introdujiste generan " . $minutos . " minutos exactos" . "</br>";
}

echo "Faltan $segundosFaltantes segundos para convertirse en exactamente " . ($minutos+1) . " minutos";
    
}
?>

