<?php
class RetornarDatos
{
    public static function retornarDatos($des = 1, $valor = 1120561778)
    {
        $servername = '127.0.0.1';
        $username = 'root';
        $dbpassword = '';
        $dbname = 'pruebita';

        // Create connection
        $conn = new mysqli($servername, $username, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $salida = '';

        $campo = '';
        $tabla = 'Usuarios';
        $busqueda = 'Documento';

        switch ($des) {
            case 1:
                $campo = 'Nombre';
                break;
            case 2:
                $campo = 'Fec_nac';
                break;
            case 3:
                $campo = 'Contrasena';
                break;
            case 4:
                $campo = 'Foto';
                break;
            default:
                return 'Invalid parameter';
        }

        $sql = "SELECT $campo FROM $tabla WHERE $busqueda = '$valor'";

        $r = $conn->query($sql);
        if ($r) {
            while ($fila = $r->fetch_array()) {
                $salida = $fila[0];
            }
        } else {
            $salida = "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();

        return $salida;
    }
}