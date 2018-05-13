
<?php
session_start();
include("../../class/class-conexion.php");
  $conexion = new Conexion();
   $sql = sprintf( 
      "SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios WHERE clave LIKE '%s' AND correo LIKE '%s'",
      $_SESSION["psw"],
      $_SESSION["usr"]
  );
 // echo $sql;
  //exit;
  $resultado = $conexion->ejecutarConsulta($sql);
  $respuesta = array();
  //echo "hola mundo";
 
  $registro = $conexion->obtenerFila($resultado);

  $sql1 =sprintf("SELECT seguidor, usuariolog FROM tbl_seguidores WHERE usuariolog = %s",
                  $registro["codigo_usr"]);
  $resultado = $conexion->ejecutarConsulta($sql1);

  $seguidores = $conexion->cantidadRegistros($resultado);



?>



<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 discover" style="margin-top: -30px; margin-left:20px;">
	<div class="container">
		<div class="card card bg-dark">
  				<img class="card-img fixed-bg card-style">
  			<div class="card-img-overlay img-style">
    			<div class="row cont-prof">
    				<div class="col-1 cont-prof"><img src="../Img/ana.png" class="img-circle"></div>
    					<div class="col-6 cont-prof spc-name">
    						<h2>    <?php echo $registro["nombre"]." ".$registro["apellido"]; ?>     </h2>
    						<p> <?php echo $seguidores; ?> seguidores</p>
    					</div>
					
					<div class="col-5 cont-prof d-none d-lg-block t-white">
						<div class="row cont-prof" >
    						<div class="col-sm-nwx cont-prof">
     							<a class="font-weight-bold boutme" href="#">SOBRE MÍ</a> 
    						</div>
    						<div class="col-sm-nw cont-prof">
     							<p><i class="fas fa-ellipsis-v dots"></i> </p>
    						</div>
    						<div class="col-sm-nw cont-prof edit-txt">
     							<button type="button" class="btn btn-light btn-md" >EDITAR PERFIL</button>
    						</div>
  						</div>
   					</div>
    			</div>
  			</div>
	</div>


    <h5 class="comun-txt">Comunidades y colecciones</h5>
    <div class="card-deck deck-wd">
      <div class="card mb-3 com-card color-nw-card">
        <div class="card-body agg-sp">
          <h5 class="card-title text-center"><i class="fas fa-plus-circle agg-tam"></i></h5>
          <p class="card-text text-center" >Crear una colección</p>
        </div>
      </div>
      <div class="card bg-light mb-3 com-card full-com">
        <div class="card-body">
        	  <img class="card-img-top card-image-stl" src="../Img/coding.jpeg" alt="Card image cap">
            <img src="../Img/ana.png" class="img-circle com-prof-img">
          <div class="card-body card-bod-style">
        		<h6 class="card-title text-left t-white">Coleccion</h6>
      	   	<p class="card-text text-left txt-com-style title-stl">Publico</p>
      	   	<p class="card-text text-left txt-com-style"> 2 seguidores</p>
        	</div>	       
        </div>
      </div>
      <div class="card bg-light mb-3 com-card empty-com">
        <div class="card-body">
        </div>
      </div>
      <div class="card bg-light mb-3 com-card empty-com">
        <div class="card-body"> 
        </div>
      </div>
    </div>
    
    <h5 class="comun-txt">Publicaciones</h5>
    <p class="comun-txt text-center">Parece que has llegado al final</p>

<!-- The Modal -->
<div class="modal fade" id="modal-perfiil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <a role="button" data-toggle="modal" data-target"#modal-perfil"><img src="../Img/pen.jpg" id="fixedbutton" class="img-edit" style="height: 3.5rem; width: 3.5rem;"></a>

<script type="text/javascript">
var modal = document.getElementById('modal-perfil');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function cancelar(){
        modal.style.display = "none"; 
}
</script>

<style type="text/css">
/*-------------------------------------------------------------------------------*/
.row-btn-modal{
  height: 35px;
  background-color:transparent;
  margin-left: 300px;
  margin-top: 100px;
}

.form-modal{
height: 100px;
width: 460px;
border-color: transparent;
margin-top:5px;
background-color:transparent;
}

#comunidad-modal{
  color: blue;
}
.align-modal{
  margin-top:12px;
  margin-left:5px;
}

.row-modal{
  height: 50px;
  background-color: transparent;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 530px;
    height: 364px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

 .img-circle-modal{
  border-radius: 50%;
  width: 50px;
  height: 50px;
  border: 2px solid white;
  margin-left:5px;
 }
/*----------------------------------------------------------------------*/

	.spc-name{
		padding-left: 30px;
    

    color:white;
		
	}

	.cont-prof{
		background-color: transparent !important;
	}	

	 .card-body{
 	background-color: transparent !important;
 	
 }

 .card-img-overlay{
 	margin-top: 24.5rem !important;
 }

 .img-circle{
 	border-radius: 50%;
 	width: 70px;
 	height: 70px;
 	border: 2px solid white;
 }

.col-sm-nw{
	flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  max-width: 100%;
  margin-right: 15px;
  margin-left: 15px;
}

.col-sm-nwx{
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  max-width: 100%;
  margin-right: 15px;
  margin-left: 15px;
}

.card{
	height: 100%;
	width: 95%;
}

html, body {
  max-width: 100%;
  overflow-x: hidden;
}

.fixed-bg {
  background-image: url("../Img/coffee.jpg");
  min-height: 500px;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.card-style{
  height: 509px; 
  border-radius:0px;
  background-attachment: fixed;
}

.boutme{
  font-size: 15px; color:white;
}

.dots{
  font-size:18px;
}

.edit-txt{
  font-style: bold;
}

.comun-txt{
  background-color: #F1F1F1 !important;
  color:gray;
  margin-top: 30px;
  margin-bottom: 30px;
}

.deck-wd{
  width: 95%;
}

.com-card{
  max-width: 18rem;
  border-radius: 0px;
  height: 16rem;
}

.empty-com{
  background-color: #E9E9E9 !important;
  border-color: #E9E9E9 !important;
}

.txt-com-style{
  color: #A2A2A2; font-size: 0.8rem;
  margin-top:-0.6rem;
}

.card-bod-style{
  margin-left: -1.5rem;
}

.full-com{
   background-color: #414141 !important;
   border-color: transparent;
}

.card-image-stl{
  margin-top: -1.25rem;
  margin-left: -1.3rem;
  width: 12.25rem;
  height: 7rem;
}

.com-prof-img{
  height: 30px; width: 30px;
  margin-top: -1.5rem;
  margin-left: -0.5rem;
}

.title-stl{
   margin-bottom:0.5rem;
}

.agg-tam{
  font-size: 40px;
}

.agg-sp{
  margin-top: 3rem;
}

.t-white{
  color: white;
}

.img-style{
  background-color: transparent;
}

.color-nw-card{
  background-color: white;
}

#fixedbutton {
    position: fixed;
    bottom: 2.5rem;
    right: 3rem; 
}

.img-edit{
  
  border-radius: 50%;
  width: 70px;
  height: 70px;

 }
</style>
	