<?php

class Usuarios {
    static function Guardar_Usuario($doc,$password,$nombre,$fecha) {
        $servername = '127.0.0.1';
        $username = 'root';
        $dbpassword = '';
        $dbname = 'pruebita';

            // Crear conexión
            $conn = new mysqli($servername, $username, $dbpassword, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Preparar la consulta SQL para insertar los datos en la tabla Usuarios
            $sql = "INSERT INTO Usuarios (Documento, Contrasena, Nombre, Fec_nac) VALUES ('$doc', '$password', '$nombre', '$fecha')";

            // Ejecutar la consulta
            if ($conn->query($sql) === TRUE) {
                // Redirigir a la tienda después de registrar los datos
                $conn->close();
                header("location: CONSULTAR_US.php");
                exit(); // Salir del script después de redirigir
            } else {
                echo "Error al registrar los datos: " . $conn->error;
            }

            // Cerrar la conexión
            $conn->close();
        }
    }

  // Obtener los datos del formulario
            $doc = $_POST['Documento'];
            $password = $_POST['Contrasena'];
            $nombre = $_POST['Nombre'];
            $fecha = $_POST['Fec_nac'];
            $foto = $_POST['Foto'];
// Llamar la función para guardar el usuario
Usuarios::Guardar_Usuario($doc,$password,$nombre,$fecha);
?>