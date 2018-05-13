<?php
session_start();
include_once("../../class/class-conexion.php");

 
 $conexion = new Conexion();
  $sql = sprintf( "SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios WHERE clave LIKE sha1('%s') AND correo LIKE '%s'",
           $_POST["clave"],
           $_POST["correo"]
       );
       
       $resultado = $conexion->ejecutarConsulta($sql);
       $respuesta = array();
       if ($conexion->cantidadRegistros($resultado)>0){
           $respuesta = $conexion->obtenerFila($resultado);
           $respuesta["codigoResultado"] = 0;
           $respuesta["mensajeResultado"] = "El usuario si existe";
           $_SESSION["usr"] = $respuesta["correo"];
           $_SESSION["psw"] = sha1($_POST["clave"]);
       }else {
           $respuesta["codigoResultado"] = 1;
           $respuesta["mensajeResultado"] = "El usuario no existe";
           session_destroy();
	   }
	  // echo $sql;
       echo json_encode($respuesta);
?>