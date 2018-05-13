<?php
session_start();
include("../../class/class-conexion.php");

$conexion = new Conexion();
$sql="SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios";
$resultado= $conexion->ejecutarConsulta($sql);

$sql1=sprintf( 
	"SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios WHERE clave LIKE '%s' AND correo LIKE '%s'",
	$_SESSION["psw"],
	$_SESSION["usr"]
);
$resultado1 = $conexion->ejecutarConsulta($sql1);
$usuario = $conexion->obtenerFila($resultado1);

//echo $sql;




?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 discover" id="personas">
	<div class="card-deck">
		<?php
			
			while($fila = $conexion->obtenerFila($resultado)){
				if(!($usuario["codigo_usr"]==$fila["codigo_usr"])){	
				echo '<div class="card text-center" style="max-width: 20%;">'.
		  	'<div class="card-body">'.
		    '<img class="img-circle-per" src="'.$fila["url_pef"].'">'.
		    '<p class="card-text prof-name">'.$fila["nombre"].' '. $fila["apellido"].'</p>'.
		    '<a href="#" id="persona-'.$fila["codigo_usr"].'" class="btn btn-link" onClick="  seguir('.$fila["codigo_usr"].','.$usuario["codigo_usr"].'); ">Seguir</a>'.
		  	'</div>'.
				'</div>';
				}
			}
		
		?>
	
	</div>
</div>

<style type="text/css">
#personas{
	margin-top: 120px;
}

.img-circle-per {
   border-radius: 50%;
   height: 90px;
   width: 90px;
}

.prof-name{
	margin-bottom: 50px;
    margin-top: 10px;
    font-size: 15px !important;
    font-style: bold !important;
}


</style>
