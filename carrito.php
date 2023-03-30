<?php

session_start();

include ("com.php");

$car = array(
    'productos' => array(),
    'subtotal' => 0,
    'total' => 0
);
//echo '123';

if(isset($_SESSION["carrito"])){
    $car = $_SESSION["carrito"];
}
$carritosGuardados = [];
if(isset($_SESSION["carritos"])){
    $carritosGuardados = $_SESSION["carritos"];
}

calcular($car, $carritosGuardados);

if(isset($_GET["carrito"])){
    print $_SESSION["carrito"]['total'];
    $id = $_GET["carrito"];
    if($id){
        add($id, $car, $con, $carritosGuardados);
    }
}

if(isset($_GET["remove"])){
    $id = $_GET["remove"];
    echo $id;
    if(isset($id) || $id == 0){
        remove($id, $car, $carritosGuardados);
    }
}

function add($p = [], &$car, &$con, &$carritosGuardados){
    $sql = mysqli_query($con, "SELECT * FROM productos WHERE id = '$p' ");
    $resul = mysqli_fetch_array($sql);
    //echo $resul['nombre']." . TOTAL: ".$resul['Precio'];
    $resul['cantidad'] = 1;
    array_push($car['productos'], $resul);
    $_SESSION["carrito"] = $car;
    calcular($car, $carritosGuardados);
}

function calcular(&$car, &$carritosGuardados){
    $car['subtotal'] = 0;
    $car['total'] = 0;
    $car['index'] = 0;

    foreach($car['productos'] as &$p){
       $car['subtotal'] += $p['Precio'];
    }
    $car['total'] = $car['subtotal'];
    $_SESSION["carrito"] = $car;

    $carritosGuardados[$car['index']] = $car;
    $_SESSION["carritos"] = $carritosGuardados;
}

function remove($index = 0, &$car, &$carritosGuardados){
    array_splice($car['productos'], $index, 1);
    //echo"aelñfjnsgbjnsfibjns";
    echo sizeof($car['productos']);
    calcular($car, $carritosGuardados);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>eclipse Store</title>
</head>
<body class="fondo">
    <div>
        <a href="./eclipse.php"><center> <img src="./imagenes/logo_iconos/logo_eclipse.jpeg" width="400" height="75"></center></a>
</div>
    <h1 class="carr">Carrito Total: $<?php echo $car['total'] ?></h1>
    <form action="eclipse.php" method="get">
        <button type="submit" name="p" value="p">Seguir Comprando</button>
    </form>
    <form action="correo.php" method="get">
        <button type="submit" name="comprar" value="comprar">Comprar</button>
    </form>

    <div>
        <?php
            include("com.php");
            foreach($car['productos'] as $key =>$row){
        ?>
        <div>
            <img src="/eclipse-main/imagenes/<?php echo $row ['imagen'] ?>">
            <h4 class="carr">Nombre: <?php echo $row['nombre']?></h4>
            <p class ="carr">Precio: $ <?php echo $row['Precio']?></p>
            <p class="carr">Cantidad: <?php echo $row['cantidad']?></p>
            <form action="carrito.php" method="get">
                <button type="submit" name="remove" value="<?php echo $key ?>"> eliminar</button>
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