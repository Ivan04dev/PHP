<?php
    header('Content-Type: application/json');

    include("../server/BD/_config/conexionBD.php");
    include("../server/BD/_config/consultaBD.php");

    if(isset($_POST['fecha']) && isset($_POST['horario'])) {
        $fecha = $_POST['fecha'];
        $horario = $_POST['horario'];
        echo $fecha . ' - ' . $horario;
    }

    $conexion = new ConexionBD();
    $con = $conexion->conectar();
    $consulta = new ConsultaBD();

    $datos = [];

     // Definir los parámetros de la consulta
     $par = "USUARIO, ACTIVIDAD, EXTRACT(HOUR FROM FECHA) AS HORA, COUNT(*) AS CANTIDAD_ACTIVIDADES";
     $tb = "PYMES_ACTIVIDADES";
     $cadena = "WHERE
                     FECHA BETWEEN TO_DATE('2024-09-09 00:00:00', 'YYYY-MM-DD HH24:MI:SS') AND TO_DATE('2024-09-09 23:59:59', 'YYYY-MM-DD HH24:MI:SS')
                 GROUP BY
                     USUARIO, ACTIVIDAD, EXTRACT(HOUR FROM FECHA)
                 ORDER BY
                     HORA, USUARIO, ACTIVIDAD";

    $stmt = $consulta->consultaDatos($con, $par, $tb, $cadena);

    oci_execute($stmt);

    while ($row = oci_fetch_assoc($stmt)) {
        $datos[] = [
            "usuario" => $row['USUARIO'],
            "actividad" => $row['ACTIVIDAD'],
            "hora" => $row['HORA'],
            "cantidad_actividades" => (int)$row['CANTIDAD_ACTIVIDADES']
        ];
    }

    echo json_encode($datos)
    
?>
