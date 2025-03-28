<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27</title>
</head>
<body>
    <center>
    <header>
        <h1><mark>ECUACION DE PRIMER GRADO</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
        <label for ="a">a:</label>
    <input type="number" id="a" name="a"><br><br>
    <label for ="b">b:</label>
    <input type="number" id="b" name="b"><br><br>
    <button type="submit"> ENVIAR </button><br>
</form>
<?php
     if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['a'])&&($_POST['a'])) {

         $a = $_POST['a']; 
         $b = $_POST['b']; 
         if ($a == 0) {
              echo "<br>La ecuación no es de primer grado ya que el coeficiente 'a' es 0. <br>";
         } else {
         $x = -$b / $a;
               echo "<br>La solución de la ecuación {$a}X + ({$b}) = 0 es: X = $x <br>";
            }
        }
        }
        ?>
<br>  
<a href="EJ28.php"> SIGUIENTE PRACTICA</a>
</main>
</section>
<footer>
    <p>LESLYE MARGARITA ESCOBAR MORADO</p>
</footer>
</center>
</body>
</html>