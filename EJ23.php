<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23</title>
</head>
<body>
<center>
        <header>
    <h1><mark> MULTIPLO DE 3 Y 5</mark></h1>
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
    $numer= $_POST['numero'];

    if($numer % 3 == 0 && $numer % 5 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>ES MULTIPLO DE 3 Y 5";
    }else{
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>NO ES MULTIPLO DE 3 Y 5";
    }
echo $mensaje;
    }
?>
 <br>  
 <a href="EJ24.php"> SIGUIENTE PRACTICA</a>
</main>
</section>
<footer>
<p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
</center>
</body>
</html>
