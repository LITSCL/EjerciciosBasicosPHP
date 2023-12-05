<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio07.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
<p>
<label for="horasAcademicas">Horas Academicas</label>
<input type="text" name="horasAcademicas"/> <?php //El usuario ingresa datos mediante html. ?>
</p>
            
<input type="submit" value="Enviar"></input> <?php //El usuario envia datos mediante GET. ?>
</form>
</body>
        
</html>

<?php
if (isset($_GET["horasAcademicas"])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).

    $horasAcademicas = (float)$_GET["horasAcademicas"];
    $minutosAcademicos = $horasAcademicas * 45;
    $horasReales = $minutosAcademicos / 60;

    echo "<hr>"; //Se efectua un salto de línea.
    echo "La cantidad de horas reales es: $horasReales"; //Se imprime en pantalla la concatenación.

}
?>

