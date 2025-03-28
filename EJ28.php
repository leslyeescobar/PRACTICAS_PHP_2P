<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>28</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>MAYOR DE EDAD O MENOR DE EDAD</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero=$_POST['numero'];
    if($numero >= 18){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MAYOR DE EDAD";
   
    }else if($numero < 18 ){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MENOR DE EDAD";
    }else{
        $mensaje="<br>$numero INGRESA NUMERO VALIDO<br>";
    }
echo $mensaje;
}
?>
<br>
<a href="EJ29.php"> SIGUIENTE PRACTICA</a>
  </main>
</section> 
<footer>
    <p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer> 
</body>
</center>
</html>