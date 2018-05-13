<?php
session_start();
include("../../class/class-conexion.php");
        $conexion = new Conexion();
        $sql = sprintf( 
          "SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios WHERE clave LIKE '%s' AND correo LIKE '%s'",
          $_SESSION["psw"],
          $_SESSION["usr"]
      );
      $resultado = $conexion->ejecutarConsulta($sql);
      $registro = $conexion->obtenerFila($resultado);


?>


<div class="container discover">
	<div class="row">
		<div class="col-md-6 align-self-start">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-4 box-shadow">
                		<div class="card-body" style="padding-top: 10px; padding-bottom: 10px;">
                			<div class="row" style="background-color: white !important;">
                				<div class="col-2" style="padding-right: 0px; margin-right: 0px;background-color: white; color: #757575;"><i class="fas fa-user-circle" style="font-size: 30px !important; margin-top: 5px;"></i></div>
                          <div class="col-8 text-left" style="padding-left: 0px; margin-left: -20px; background-color: white !important;"><input type="text" class="form-control" id="publicacion" placeholder="¿Tienes algo nuevo que contar?" style="background-color: white;"></div>
                          <a role ="button" id="publicar" ><i class="fas fa-share-square" style="font-size: 20px !important; margin-top: 5px; "></i></a>
                          <input type ="text" id="prueba" val="<?php echo $registro["codigo_usr"];?>" style =" display: none; " >
                  				<!--<div class="col-2" style="background-color: white; color: #757575;"></div>-->
                  			</div>
                  		</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card mb-4 box-shadow">
						<div class="card-body">
                        <div class="container spc-enc">
                            <div class="row" style="background-color: white;">
                                <div class="col-sm feet1"><img src="Img/prof3.png" class="propic"></div>
                              <div class="col-sm feet2inicio col-12 align-baseline">
                                <div class="feettitle">ENTER.CO➤</div>
                                <div class="feettxt">Publico</div>
                              </div>
                            </div>
                        </div>
                  				<h6>'Black Mirror' tiene confirmada su quinta temporada</h6>
                  				<p class="card-text">Ya está confirmada la próxima temporada de 'Black Mirror'. ¿Qué nos deparará el espejo negro en esta ocasión?</p>
                  			<div class="d-flex justify-content-between align-items-center"></div>
                		</div>
                		<img class="card-img-top" alt="Thumbnail [100%x225]" src="Img/noti3.jpg" data-holder-rendered="true" style="height: 199px; width: 100%; display: block; margin-bottom:10px;">
          <div class="container">
            <p class="card-textrd"><b>Goku:</b> hostia madre </p>
            <p class="card-textrd"><b>Luis:</b> que epico está eso!! xD</p>
          </div>
          </div>
				</div>
              	
				<div class="col-md-12">
					<div class="card mb-4 box-shadow">
            <div class="card-body">
              <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof4.png" class="propic"></div>
                        <div class="col-sm feet2inicio">
                          <div class="feettitle">BB Mundo➤</div>
                          <div class="feettxt">Publico</div>
                        </div>
                      </div>
                  </div>
                  <h6>Nuevo proyecto de POO se lanza este domingo</h6>
                  <p class="card-text">El tan esperado proyecto de Prograación Orientada a Objetos por fin se presenta este domingo</p>
                  <div class="d-flex justify-content-between align-items-center"></div>
            </div>
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/coding.jpeg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
					</div>
				</div>

      	<div class="col-md-12">
					<div class="card mb-4 box-shadow">
            <div class="card-body">
                <div class="container spc-enc">
                    <div class="row" style="background-color: white;">
                        <div class="col-sm feet1"><img src="Img/prof5.png" class="propic"></div>
                        <div class="col-sm feet2inicio">
                            <div class="feettitle">ES interesante➤</div>
                            <div class="feettxt">Cosmos, nuestro espacio</div>
                        </div>
                    </div>
                </div>
                  <h6>5 Sitios de la NASA para -Explorar la Tierra, en El espacio y la Ciencia</h6>
                  <p class="card-text">5 Sitios de la NASA para -Explorar la Tierra, en El espacio y la Ciencia</p>
                  <div class="d-flex justify-content-between align-items-center"></div>
            </div>
               <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti4.jpg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
					</div>
				</div>
			</div>

      <div class="12">
          <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof1.png" class="propic">
                          </div>
                        <div class="col-sm feet2inicio">
                          <div class="feettitle">Noticieros Televisa➤</div>
                          <div class="feettxt">Publico</div>
                        </div>
                       </div>
                    </div>
                    <h6>Peña me pidió que dijera públicamente que México no pagaría el muro: Trump - Televisa News</h6>
                     <p>Trump narró la última conversacion telefonica que sostuvo con EPN</p>
                  <div class="d-flex justify-content-between align-items-center"></div>
              </div>
               	 <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti1.jpg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
            </div>
      </div>  
        <div class="12">
         	<div class="card mb-4 box-shadow">
            <div class="card-body">
               <div class="container spc-enc">
                  <div class="row">
                      <div class="col-sm feet1"><img src="Img/prof2.png" class="propic"></div>
                          <div class="col-sm feet2inicio">
                            <div class="feettitle">ENTER.CO➤</div>
                            <div class="feettxt">Publico</div>
                          </div>
                  </div>
                  </div>
                  <h6>Galaxy S9 en Colombia: precio y disponibilidad</h6>
                  <p class="card-text">Los Galaxy S9 ya se pueden comprar en Colombia. Por ahora los equipos se encuentran en preventa.</p>
                  <div class="d-flex justify-content-between align-items-center"></div>
            </div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti2.jpg" data-holder-rendered="true" style="height: 199px; width: 100%; display: block;">
          </div>
        </div>
    </div>
    


    <div class="col-md-6 align-self-start">  	

      <div class="row">
      <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                 <div class="card-body">
                     <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof8.png" class="propic">
                          </div>
                        <div class="col-sm feet2inicio">
                          <div class="feettitle">BB Mundo➤</div>
                          <div class="feettxt">Publico</div>
                        </div>
                       </div>
                    </div>
                  <h6>La extraordinaria matemática que mintió para que la tomaran en serio y ayudó a resolver "una de las ecuaciones más...</h6>
                  <p class="card-text">Sophie Germain, la extraordinaria matemática francesa que tuvo que mentir para que la tomaran en serio(y la ciencia se lo agradece)..</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti8.jpg" data-holder-rendered="true" style="height: 149px; width: 100%; display: block;">
              </div>
            </div>


            <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof4.png" class="propic">
                          </div>
                        <div class="col-sm feet2inicio">
                          <div class="feettitle">Expansión CNN➤</div>
                          <div class="feettxt">Publico</div>
                        </div>
                       </div>
                    </div>
                  <h6>La única persona en la historia a la que hirío un meteorito</h6>
                  <p class="card-text">La única persona en la historia a la que hirió un meteorito</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti7.jpg" data-holder-rendered="true" style="height: 170px; width: 100%; display: block;">
              </div>
            </div>

      <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof6.png" class="propic">
                          </div>
                        <div class="col-sm feet2inicio ">
                          <div class="feettitle">Europa Press➤</div>
                          <div class="feettxt">Publico</div>
                        </div>
                       </div>
                    </div>
                  <h6>Robert Downey Jr. avisa: En Infinity War "Rodarán cabezas"</h6>
                  <p class="card-text">El proximo 27 de abril llega a los cines de todo el muundo Vengadores: Infinity War, y Robert Downey Jr. ya avanza que "van a rodar cabezas"...</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti5.jpg" data-holder-rendered="true" style="height: 148px; width: 100%; display: block;">
              </div>
            </div>

            <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                  <div class="card-body">
                  <div class="container spc-enc">
                      <div class="row" style="background-color: white;">
                          <div class="col-sm feet1"><img src="Img/prof7.png" class="propic">
                          </div>
                        <div class="col-sm feet2inicio">
                          <div class="feettitle">TekCrispy➤</div>
                          <div class="feettxt">Tecnologia</div>
                        </div>
                       </div>
                    </div>                    
                  <h6>Los cuatro centinelas de las cálidas arenas del desierto de Qatar</h6>
                  <p class="card-text">Los cuatro centinelas de las cálidas arenas del desierto de Qatar</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti6.jpg" data-holder-rendered="true" style="height: 149px; width: 100%; display: block;">
              </div>
            </div>  
        </div>
  </div>
  </div>
   <!-- The Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <div class="row row-modal">
        <img src="../Img/ana.png" class="img-circle-modal">
        <h6 class="align-modal" id="usuario-modal">Ana Rivera</h6>
        <h6 class="align-modal">&#10148;</h6>
        <a class="align-modal" id="comunidad-modal">Publico</a>
      </div>
      <div class="form-group form-modal">
        <textarea name="message" class="form-modal" placeholder="¿Tienes algo nuevo que contar?"></textarea>

      </div>
      <div class="row row-btn-modal">
        <button type="button" class="btn btn-light" id="cancelar-modal" onclick="cancelar()">Cancelar</button>
        <button type="button" class="btn btn-primary">Publicar</button>      
      </div>
    </div>
  </div>

<a id="myBtn"><img src="../Img/pen.jpg" id="fixedbutton" class="img-edit"></a>
</div>

<script type="text/javascript">
$('#publicar').click(function(){
  //var envio =  $('#prueba').val();
  alert("se apreto ");


});

</script>

<style type="text/css">
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
    z-index: -1 !important;
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

.img-edit{
  border-radius: 50%;
  height: 3.5rem; 
  width: 3.5rem;
}

#fixedbutton {
    position: fixed;
    bottom: 2.5rem;
    right: 3rem; 
}
</style>