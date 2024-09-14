<?php

    include("../server/BD/_config/conexionBD.php");
    include("../server/BD/_config/consultaBD.php");

    $conexion = new ConexionBD();
    $con = $conexion->conectar();
    $consulta = new ConsultaBD();

    $datosSucursal = [];

    $par = "*";
    $tb = "PYMES_ACTIVIDADES";
    $cadena = "";

    $stmt = $consulta->consultaDatos($con, $par, $tb, $cadena);

    oci_execute($stmt);

    while ($row = oci_fetch_assoc($stmt)) {
        $datosSucursal[] = $row;
    }

    var_dump($datosSucursal );
    
?>
