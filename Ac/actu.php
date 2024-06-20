
<?php
$conexion = mysqli_connect('127.0.0.1', 'root', '', 'pruebita');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['Documento'])) {
    $documento = $_GET['Documento'];

    $sql = "SELECT * FROM Usuarios WHERE Documento = '$documento'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);}}
        ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Registrar</title>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>ACTUALIZAR</h2>
<form action="Update.php" method="POST">
        <label for="">Documento</label>
        <input type="number" value="<?php echo htmlspecialchars($row['Documento']); ?>" name="Documento">

        <label for="">Nombre</label>
        <input type="text" value="<?php echo htmlspecialchars($row['Nombre']); ?>" name="Nombre">

        <label for="">Contraseña</label>
        <input type="password" value="<?php echo htmlspecialchars($row['Contrasena']); ?>" name="Contrasena">

        <label for="">Fecha nacimiento</label>
        <input type="text" value="<?php echo htmlspecialchars($row['Fec_nac']); ?>" name="Fec_nac">

        <button type="submit">ACEPTAR</button>
    </form>
    <a href="../CONSULTAR_US.php"><button>VOLVER</button></a>
    </div>
    
</div>
</body>
</html>