<?php
     include("com.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Eclipse Store</title>
</head>

<body>
    <header>
        <a href="./eclipse.php"><center><img src="./imagenes/logo_iconos/logo_eclipse.jpeg" width="400" height="75"></center></a>
    </header>
    <div class="filtros">
        
    </div>
    <div class="fixed">
    <div class="acciones">
        <ul class="sesion">
            <li><a href="./inicio_sesion.html"> inicio de sesion</a></li>
            <li><a href="./registro_cuenta.html"> registro de cuenta</a></li>
            <li><a href="./carrito.php"> carrito</a></li>
        </ul>
    </div>
    </div>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM productos");
    
    ?>
    <div class="general">
        <?php
           
            while($row = mysqli_fetch_array($sql)){
            ?>
            <div class="card2">
            <h3><?php echo $row ['Tipo'] ?></h3>
            <div class="frame-slider3">
                <ul>
                    <li><img src="/eclipse-main/imagenes/<?php echo $row ['imagen'] ?>"></li>
                </ul>
            </div>
            <p><?php echo $row ['nombre'] ?></p>
            <p>en almacen: <?php echo $row ['Stock'] ?></p>
            <p>$<?php echo $row ['Precio'] ?></p>
            
            <form action = "carrito.php" method = "get">
            <button type="submit" name="carrito" value="<?php echo $row['id'] ?>">agregar</button>
            </form>
        </div>
        <?php
        }
        ?>
        
        
    </div>
    <footer class="footer">
        <nav>
            <ul class="info">
                <li><a class="nosotros" href="./sobre nosotros.html">sobre nosotros</a></li>
                <li>C. Nueva Escocia 1885, 44638 Guadalajara, Jal.</li>
                <li><h3>Contactanos</h3></li>
                <li>numero de telefono: 3322112278</li>
            </ul>
        </nav>
    </footer>
</body>
</html>