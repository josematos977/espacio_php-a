
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<input type="number" name="valor_uno"placeholder="Escribe el primer valor"> <br>

<input type="number" name="valor_dos"placeholder="Escribe el segundo valor"> <br>
<input type="submit" name="boton">



    </form>

    <?php 
   // echo $_POST['valor_uno'];
    // echo $_POST['valor_uno'];



if(isset($_POST['boton'])){


$num1=$_POST['valor_uno'];
$num2=$_POST['valor_dos'];

echo $num1+$num2;

}

    ?>
</body>
</html>