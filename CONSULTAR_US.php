<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <?php
    include 'Mostrar_D.php';
    $usuarios = Usuarios::consultarUsuarios();
    if (count($usuarios) > 0) {
        echo "<table>";
        echo "<tr><th>Documento</th><th>Nombre</th><th>Fecha de Nacimiento</th><th>Foto</th></tr>";
        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario['Documento'] . "</td>";
            echo "<td>" . $usuario['Nombre'] . "</td>";
            echo "<td>" . $usuario['Fec_nac'] . "</td>";
            echo "<td><img src='" . $usuario['Foto'] . "' alt='Foto'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay usuarios registrados.";
    }
    ?>
    <br>
    <a href="Ac/actu.php"><button>ACTUALIZAR DATOS</button></a>
    <a href="Registrar_Usuario.php"><button>REGISTRAR</button></a>
    
</body>
</html>