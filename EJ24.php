<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24</title>
</head>
<body>
<center>
        <header>
    <h1><mark> ES PAR O IMPAR</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero= $_POST['numero'];
    if($numero % 2 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numero. "<br>ES PAR";
    }else{
        $mensaje="<br>EL NUMERO<br>" . $numero. "<br>ES IMPAR";
    }
    echo"<br>$mensaje<br>";
}
?>
<br>  
<a href="EJ25.php"> SIGUIENTE PRACTICA</a>
</main>
</section>
<footer>
<p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
</center>
</body>
</html>
