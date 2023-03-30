<?php

include("com.php");

$id=$_GET["ID"];

$sql="SELECT * FROM productos WHERE id='$id'";
$query= mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>actualizar</title>
</head>
<body class="fondo">
    <header>.
        <a href="./eclipse.php"><center><img src="./imagenes/logo_iconos/logo_eclipse.jpeg" width="400" height="75"></center></a>
    </header>

    <div class="container mt-5">
        <form action="updete.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $row['id'] ?>">

                <input type="text" class="form-control mb-3" name="Tipo" value="<?php echo $row['Tipo'] ?>">
                <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $row['nombre'] ?>">
                <input type="text" class="form-control mb-3" name="Precio" value="<?php echo $row['Precio'] ?>">
                <input type="text" class="form-control mb-3" name="Stock" value="<?php echo $row['Stock'] ?>">
                <input type="text" class="form-control mb-3" name="imagen" value="<?php echo $row['imagen'] ?>">
            <input type="submit" class="btn btn-primary btn_block" value="actualizar">
        </form>
    </div>

</body>
</html>