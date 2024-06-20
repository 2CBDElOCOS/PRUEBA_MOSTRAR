<?php
class Usuarios {
    public static function consultarUsuarios() {
        // Conexión a la base de datos (ajusta los parámetros según tu configuración)
        $conexion = new mysqli('127.0.0.1', 'root', '', 'pruebita');

        // Verificar conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        // Consulta SQL
        $sql = "SELECT * FROM Usuarios";
        $resultado = $conexion->query($sql);

        // Verificar resultado
        $usuarios = array();
        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }

        // Cerrar conexión
        $conexion->close();

        return $usuarios;
    }
}
?>