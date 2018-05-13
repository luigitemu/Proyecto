<?php
session_start();
include_once("../../class/class-conexion.php");
 $conexion = new Conexion();
 $respuesta= array();

 $sql=sprintf("INSERT INTO tbl_usuarios( nombre,".
 			 "apellido, clave, correo, tel,".
			 "nacimiento, url_pef, genero)".
			 "VALUES ('%s','%s',sha1('%s'),'%s',%s,'%s','%s','%s')",
			$conexion->antiInyeccion($_POST['nombre']),
			$conexion->antiInyeccion($_POST['apellido']),
			$conexion->antiInyeccion($_POST['clave']),
			$conexion->antiInyeccion($_POST['correo']),
			$conexion->antiInyeccion($_POST['celular']),
			$conexion->antiInyeccion($_POST['fecha']),
			$conexion->antiInyeccion($_POST['imagen']),
			$conexion->antiInyeccion($_POST['genero']));
 $conexion->ejecutarConsulta($sql);

 $_SESSION['usr'] = $_POST['correo'];
 $_SESSION["psw"] = sha1($_POST['clave']);
	$respuesta["codigoResultado"] = 0;
	echo json_encode($respuesta);
	//echo$sql;
?>