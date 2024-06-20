<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Registrar</h2>
            <form action="Guardar_Us.php" method="post">
                <input type="number" id="documento" name="Documento" placeholder="Documento" required
                    value="<?php if(isset($_GET['doc'])) echo RetornarDatos::retornarDatos('1', $_GET['doc']); else echo 'Voy a registrar'; ?>"
                >
            <input type="password" id="contrasena" name="Contrasena" placeholder="Contraseña" required
                value="<?php if(isset($_GET['doc'])) echo RetornarDatos::retornarDatos('2', $_GET['doc']); else echo 'Voy a registrar'; ?>"
            >

            <input type="text" name="Nombre" placeholder="Nombre" required
                value="<?php if(isset($_GET['doc'])) echo RetornarDatos::retornarDatos('3', $_GET['doc']); else echo 'Voy a registrar'; ?>"
            >

            <input type="text" id="fecha" name="Fec_nac" placeholder="AÑO-MES-DIA" required
                value="<?php if(isset($_GET['doc'])) echo RetornarDatos::retornarDatos('4', $_GET['doc']); else echo 'Voy a registrar'; ?>"
            >

            <input type="text" id="foto" name="Foto" placeholder="Foto URL"
                value="<?php if(isset($_GET['doc'])) echo RetornarDatos::retornarDatos('5', $_GET['doc']); else echo 'Voy a registrar'; ?>"
            >

            <button type="submit">Ingresar</button>
        </form>
        <a class="volver" href="#">Volver</a>
    </div>
</div>
</body>
</html>