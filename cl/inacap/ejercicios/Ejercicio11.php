<!DOCTYPE HTML>
<html>
<head>
        
</head>
<body>
<h1>Formulario de ingreso de datos</h1>
<?php //Esto se puede cambiar a POST. ?>
<form method="GET" action="Ejercicio11.php"> <?php //Se establece el formulario mediante html y utilizando el método GET, se envia a la ruta especificada con el atributo action. ?>
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
if (isset($_GET['numero1']) && isset($_GET['numero2'])) { //El metodo isset comprueba si la variable existe (Se verifica que el usuario ingreso los datos).
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET["numero2"];
     
    echo "<hr>Los numeros que estan entre $numero1 y $numero2:";

    if ($numero2 < $numero1){
        $auxiliar = $numero1;
        $numero1 = $numero2;
        $numero2 = $auxiliar;
    }

    $contador = 0;
    for ($i = $numero1 + 1;$i < $numero2; $i++){
        echo "<br>$i";
        $contador++;
    }

    echo "<br>La cantidad de números que hay entre $numero1 y $numero2 es: $contador";
         
}
?>

