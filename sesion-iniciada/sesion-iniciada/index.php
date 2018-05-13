<?php
 session_start();
 if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"]))
  header("Location: http://localhost/google-plus/");
  
  include("../class/class-conexion.php");
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
 if ($conexion->cantidadRegistros($resultado)<=0){
        header("Location: http://localhost/google-plus/");
  }
  $registro = $conexion->obtenerFila($resultado);
  //echo $registro["nombre"] ."  ". $registro["apellido"];


?>


<!DOCTYPE html>
<html>

<head>
   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link rel="icon" href="Img/icon.png" sizes="192x192">

    
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">

    <title>Google+</title>

  
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilosInicio.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style type="text/css">
        .inputimg {
            background: url(Img/gpluslogo.gif) no-repeat scroll 7px 7px;
            background-position: 0.9% 50%;
            background-color: #E5E5E5;
            padding-left: 30px;
        }
        
        input {
            padding: 200px;
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-md fixed-top bg-dark p-0 navbar-fixed" id="menu">
        <div class="logo d-flex flex-row navbar-items">
            <div class="p-2"><i class="fas fa-bars" style="color:#727272;"></i></div>
            <div class="p-2"><img src="Img/logo.png" style="height: 24px; width: 88px; "></div>
            <div class="p-2 navbar-div"></div>
            <div class="p-2" id="encabezado">
                <h4 class="navbar-title">Inicio</h4> </div>
        </div>
        <input class="form-control form-control-dark form-control-lg inputimg" type="text1" placeholder=" Buscar en Google+" aria-label="Search" style=" margin-left: 20px; margin-right: 250px; font-family: 'Roboto'; font-size: 16px;" width="100%">

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <div class="d-flex flex-row-reverse icons-row">
                    <div class="p-2 navbar-icons"><a id="#salir" href="logout.php"><i class="fas fa-sign-out-alt icons-inicio" style="font-size: 30px; margin-top: 2px;"></i></a></div>
                    <div class="p-2 navbar-icons"><a href=""><i class="fas fa-bell icons-inicio"></i></a></div>
                    <div class="p-2 navbar-icons" style="margin-right:20px; "><a href=""><i class="fas fa-th icons-inicio"></i></a></div>

                </div>
            </li>
        </ul>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="fixed-top col-0 col-sm-0 col-md-2 d-none d-md-block bg-light side-bar">
                <nav class="col-0 col-sm-0 col-md-2 d-none d-md-block bg-light sidebar navbar-toggler">
                    <div class="sidebar-sticky">

                        <ul class="nav flex-column">

                            <li class="nav-item">

                                <div class="row nvrow" id="id-inicio">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-home navico"></i>
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Inicio</div>
                                    </div>
                                </div>

                                <div class="row nvrow" id="id-descubrir">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-compass navico"></i>
                                       
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Descubrir</div>
                                       
                                    </div>
                                </div>

                                <div class="row nvrow" id="id-comunidades">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-circle-notch navico"></i>
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Comunidades</div>
                                    </div>
                                </div>

                                <div class="row nvrow" id="id-perfil">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-user-circle navico"></i>
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Perfil</div>
                                    </div>
                                </div>

                                <div class="row nvrow" id="id-personas">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-users navico"></i>
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Personas</div>
                                    </div>
                                </div>

                                <div class="row nvrow" id="id-notificaciones">
                                    <div class="col-lg-2 spc left-div">
                                        <i class="fas fa-bell navico"></i>
                                    </div>
                                    <div class="col-lg-10 spc left-div">
                                        <div class="clr-lb">Notificaciones</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <hr>

                        <ul class="nav flex-column" style="margin-bottom: -120px !important">

                            <li class="nav-item">
                                <a class="nav-link helpbtn" href="#problemaModal" data-toggle="modal" data-target="#problemaModal">
                  Informar de un problema
                </a>
                                <div class="modal fade" id="problemaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enviar Comentarios</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea name="txta-Descripcion" class="form-control" style="background-color: #fff; height: 90px;"> Ingrese una Descripción</textarea>
                                                <p> Accede a la página de ayuda jurídica para solicitar cambios en el contenido por motivos legales. Tu opinión e información adicional se enviarán a Google. Consulta la Política de Privacidad y las Condiciones
                                                    de Servicio.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Enviar</button>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link helpbtn" href="#">
                  Ayuda
                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>


                <body cz-shortcut-listen="true">

                    
                    <main role="main" class="contenido-descubrir discover" id="main-discover" style="margin-top: 75px">

                        
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#4c1c97,#621e9d);">Aficionados de cine</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#621e9d,#721ea0);">Linux</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#721ea0,#881d97);">Críticas de cine</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#881d97,#9d1985);">Arquitectura</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#9d1985,#b11573);">Documentales e historia</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#b11573,#c51161);">Fútbol</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#c51161,#c5194e);">Cuba</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to left,#c51161,#c5194e);">Autos</button></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to left,#b11573,#c51161);">Nutrición</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to left,#9d1985,#b11573);">Apple</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to left,#b11573,#9d1985);">Universo Marvel</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#9d1985,#9b188e);">Historia</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#9b188e,#92189b);">Deporte y ejercicio</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#92189b,#85189b);">Juegos de mesa</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#85189b,#881d97);">Naruto</button></div>
                                            <div class="btn-temas"><button type="button" class="btn btn-primary btn-pill" style="background: linear-gradient(to right,#881d97,#7d189b);">Motos</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fas fa-chevron-circle-left navicon" style="width: 37px; height: 37px; margin-left: -97px;"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fas fa-chevron-circle-right navicon" style="width: 37px; height: 37px;"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                   

                        <div class="album py-5 bg-light" style="margin-top: -23px;">

                    
                            <div class="container">
                                <div class="row">
                                    <div class="col align-self-start">
                                        <div class="12">
                                            <div class="card mb-4 box-shadow">
                                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti1.jpg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
                                                <div class="card-body">
                                                    <a href="#">Peña me pidió que dijera públicamente que México no pagaría el muro: Trump - Televisa News</a>
                                                    <p>Trump narró la última conversacion telefonica que sostuvo con EPN</p>
                                                    <div class="container">
                                                        <div class="row feet-color">
                                                            <div class="col-sm feet1"><img src="Img/prof1.png" class="propic">
                                                            </div>
                                                            <div class="col-sm feet2">
                                                                <div class="feettitle">Noticieros Televisa➤</div>
                                                                <div class="feettxt">Publico</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="12">
                                            <div class="card mb-4 box-shadow">
                                                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti2.jpg" data-holder-rendered="true" style="height: 199px; width: 100%; display: block;">
                                                <div class="card-body">
                                                    <a href="#">Galaxy S9 en Colombia: precio y disponibilidad</a>
                                                    <p class="card-text">Los Galaxy S9 ya se pueden comprar en Colombia. Por ahora los equipos se encuentran en preventa.</p>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm feet1"><img src="Img/prof2.png" class="propic">
                                                            </div>
                                                            <div class="col-sm feet2">
                                                                <div class="feettitle">ENTER.CO➤</div>
                                                                <div class="feettxt">Publico</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-start">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti3.jpg" data-holder-rendered="true" style="height: 199px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">'Black Mirror' tiene confirmada su quinta temporada</a>
                                                        <p class="card-text">Ya está confirmada la próxima temporada de 'Black Mirror'. ¿Qué nos deparará el espejo negro en esta ocasión?</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof3.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">ENTER.CO➤</div>
                                                                    <div class="feettxt">Publico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/coding.jpeg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">Nuevo proyecto de POO se lanza este domingo</a>
                                                        <p class="card-text">El tan esperado proyecto de Prograación Orientada a Objetos por fin se presenta este domingo</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof4.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">BB Mundo➤</div>
                                                                    <div class="feettxt">Publico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti4.jpg" data-holder-rendered="true" style="height: 156px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">5 Sitios de la NASA para -Explorar la Tierra, en El espacio y la Ciencia</a>
                                                        <p class="card-text">5 Sitios de la NASA para -Explorar la Tierra, en El espacio y la Ciencia</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof5.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">ES interesante➤</div>
                                                                    <div class="feettxt">Cosmos, nuestro espacio</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#">#NASA #Tecnologia #Espacio #Ciencia</a>
                                                        <div class="d-flex justify-content-between align-items-center">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col align-self-start">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti5.jpg" data-holder-rendered="true" style="height: 148px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">Robert Downey Jr. avisa: En Infinity War "Rodarán cabezas"</a>
                                                        <p class="card-text">El proximo 27 de abril llega a los cines de todo el muundo Vengadores: Infinity War, y Robert Downey Jr. ya avanza que "van a rodar cabezas"...</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof6.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">Europa Press➤</div>
                                                                    <div class="feettxt">Publico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti6.jpg" data-holder-rendered="true" style="height: 149px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">Los cuatro centinelas de las cálidas arenas del desierto de Qatar</a>
                                                        <p class="card-text">Los cuatro centinelas de las cálidas arenas del desierto de Qatar</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof7.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">TekCrispy➤</div>
                                                                    <div class="feettxt">Tecnologia</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col align-self-start">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti8.jpg" data-holder-rendered="true" style="height: 149px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">La extraordinaria matemática que mintió para que la tomaran en serio y ayudó a resolver "una de las ecuaciones más...</a>
                                                        <p class="card-text">Sophie Germain, la extraordinaria matemática francesa que tuvo que mentir para que la tomaran en serio(y la ciencia se lo agradece)..</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof8.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">BB Mundo➤</div>
                                                                    <div class="feettxt">Publico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card mb-4 box-shadow">
                                                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="Img/noti7.jpg" data-holder-rendered="true" style="height: 170px; width: 100%; display: block;">
                                                    <div class="card-body">
                                                        <a href="#">La única persona en la historia a la que hirío un meteorito</a>
                                                        <p class="card-text">La única persona en la historia a la que hirió un meteorito</p>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm feet1"><img src="Img/prof4.png" class="propic">
                                                                </div>
                                                                <div class="col-sm feet2">
                                                                    <div class="feettitle">Expansión CNN➤</div>
                                                                    <div class="feettxt">Publico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </main>



                   
                   <script defer src="js/fontawesome-all.js"></script>
                    <svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
  <defs><style type="text/css"></style></defs>
  <text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">
    Thumbnail
  </text>
</svg></body>


            </main>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript">
    function seguir(seguido, seguidor){
        //alert("si funciono el usuario "+seguidor+" va a seguir a "+seguido);
        var parametros = "seguido="+seguido+"&"+
                        "seguidor="+seguidor;
        //alert("se enviara "+ parametros );
        $.ajax({
            url:"ajax/seguidores.php",
            method: "POST",
            dataType:"json",
            data: parametros,
            success: function (respuesta) {  
                console.log(respuesta);
                
            }
        });

    }
        
    
        $('#id-inicio').click(function() {
            $.ajax({
                url: 'inicio/div-inicio.php',
                success: function(data) {
                    $('.discover').hide().html(data).fadeIn(1500);
                    $('#encabezado h4').html("Inicio");
                }
            });
        });

        //ajax para descubrir
        $('#id-descubrir').click(function() {
            $.ajax({
                url: 'descubrir/div-descubrir.html',
                success: function(data) {
                    $('.discover').hide().html(data).slideDown(1000);
                    $('#encabezado h4').html("Descubrir");
                }
            });
        });

        $('#id-comunidades').click(function() {

            $.ajax({
                url: 'comunidades/div-comunidad.html',
                success: function(data) {
                    $('.discover').hide().html(data).slideDown(1000);
                    $('#encabezado h4').html("Comunidades");

                }
            });
        });

        $('#id-perfil').click(function() {
            $.ajax({
                url: 'profile/div-profile.php',
                success: function(data) {
                    $('.discover').hide().html(data).slideDown(1000);
                    $('#encabezado h4').html("Perfil");
                }
            });
        });

        $('#id-personas').click(function() {
            $.ajax({
                url: 'personas/div-personas.php',
                success: function(data) {
                    $('.discover').hide().html(data).slideDown(1000);
                    $('#encabezado h4').html("Personas");
                }
            });
        });

        $('#id-notificaciones').click(function() {
            $.ajax({
                url: 'notificaciones/div-notificaciones.html',
                success: function(data) {
                    $('.discover').hide().html(data).slideDown(1000);
                    $('#encabezado h4').html("Notificaciones");
                }
            });
        });
    </script>
</body>

</html>