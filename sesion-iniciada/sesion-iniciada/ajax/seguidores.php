<?php
        include("../../class/class-conexion.php");
        $conexion = new Conexion();

        $sql = sprintf("INSERT INTO tbl_siguiendo(siguiendo, usuariolog) VALUES (%s,%s)",
                        $_POST["seguido"],
                        $_POST["seguidor"]);
        $conexion->ejecutarConsulta($sql);
        $sql1= sprintf("INSERT INTO tbl_seguidores(seguidor, usuariolog) VALUES (%s,%s)",
                        $_POST["seguidor"],
                        $_POST["seguido"]  );
        $conexion->ejecutarConsulta($sql1);
        $respuesta["codigoResultado"]=0;
        echo json_encode($respuesta);



?>