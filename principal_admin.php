<?php
include("com.php");

$sql="SELECT * FROM productos";
$query= mysqli_query($con, $sql);

$sqlr="SELECT * FROM registro";
$queryr = mysqli_query($con, $sqlr);
//$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>pagina Administrador</title>
</head>
<body class= "admin_page">
    <header>
        <a href="./eclipse.php"><center><img src="./imagenes/logo_iconos/logo_eclipse.jpeg" width="400" height="75"></center></a>
    </header>
    <div>
        <div>
            <div>
                <h1>registro de productos</h1>
                    <form action="productos.php" method="post">
                        <input type="text" class="input" name="Tipo" id="Tipo" required="obligatorio" placeholder="Tipo de producto">
                        <input type="text" class="input "name="nombre" id="nombre" required="obligatorio" placeholder="nombre de producto">
                        <input type="text" class="input"name="Precio" id="Precio" required="obligatorio" placeholder="Precio">
                        <input type="text" class="input"name="Stock" id="Stock" required="obligatorio" placeholder="Stock">
                        <input type="text" class="input "name="imagen" id="imagen" required="obligatorio" placeholder="imagen de producto">

                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>
            <div >
                <table>
                    <thead>
                        <tr>
                            <th class="th">id</th>
                            <th class="th">Tipo</th>
                            <th class="th">nombre</th>
                            <th class="th">Precio</th>
                            <th class="th">Stock</th>
                            <th class="th">imagen</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th class="thb"> <?php echo $row['id']?></th>
                                <th class="thb"> <?php echo $row['Tipo']?></th>
                                <th class="thb"> <?php echo $row['nombre']?></th>
                                <th class="thb"> <?php echo $row['Precio']?></th>
                                <th class="thb"> <?php echo $row['Stock']?></th>
                                <th class="thb"> <?php echo $row['imagen']?></th>
                                <th class="thbb"><a href="actualizar.php ?ID= <?php echo $row['id'] ?>" class="btn btn-info">editar</a></th>
                                <th class="thbb"><a href="eliminar.php ?ID= <?php echo $row['id'] ?>" class="btn btn-info">eliminar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div>
        <div>
            <div>
                <h1>registro de usuarios</h1>
                    <form action="registro_admin.php" method="post">
                        <input type="text" class="input" name="nombre" id="nombre" required="obligatorio" placeholder="nombre">
                        <input type="text" class="input "name="apellido" id="apellido" required="obligatorio" placeholder="apellido">
                        <input type="text" class="input"name="nusuario" id="nusuario" required="obligatorio" placeholder="usuario">
                        <input type="text" class="input"name="contrasena" id="contrasena" required="obligatorio" placeholder="contraseña">
                        <input type="text" class="input "name="correo" id="correo" required="obligatorio" placeholder="correo">
                        <input type="text" class="input "name="celular" id="celular" required="obligatorio" placeholder="celular">

                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>
            <div >
                <table>
                    <thead>
                        <tr>
                            <th class="th">id</th>
                            <th class="th">nombre</th>
                            <th class="th">apellido</th>
                            <th class="th">usuario</th>
                            <th class="th">contraseña</th>
                            <th class="th">correo</th>
                            <th class="th">celular</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($queryr)){
                        ?>
                            <tr>
                                <th class="thb"> <?php echo $row['id']?></th>
                                <th class="thb"> <?php echo $row['nombre']?></th>
                                <th class="thb"> <?php echo $row['apellido']?></th>
                                <th class="thb"> <?php echo $row['nusuario']?></th>
                                <th class="thb"> <?php echo $row['contrasena']?></th>
                                <th class="thb"> <?php echo $row['correo']?></th>
                                <th class="thb"> <?php echo $row['celular']?></th>
                                <th class="thbb"><a href="actualizar_usuario.php ?ID= <?php echo $row['id'] ?>" class="btn btn-info">editar</a></th>
                                <th class="thbb"><a href="eliminar_usuario.php ?ID= <?php echo $row['id'] ?>" class="btn btn-info">eliminar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>