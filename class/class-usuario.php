<?php

include("class-conexion.php");

class Usuario{

    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $telefono;
    private $fechaNacimiento;

    public function __construct($nombre,
                $apellido,
                $correo,
                $clave,
                $telefono,
                $fechaNacimiento){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this->correo = $correo;
    }
    public function getClave(){
        return $this->clave;
    }
    public function setClave($clave){
        $this->clave = $clave;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getfechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function setfechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento = $fechaNacimiento;
    }
    public function __toString(){
        return "Nombre: " . $this->nombre . 
            " Apellido: " . $this->apellido . 
            " Correo: " . $this->correo . 
            " Clave: " . $this->clave . 
            " Telefono: " . $this->telefono . 
            " fechaNacimiento: " . $this->fechaNacimiento;
    }
    public function seguridad(){
        session_start();
        $conexion = new Conexion();
        $sql = sprintf( "SELECT codigo_usr, nombre, apellido, clave, correo, tel, nacimiento, url_pef, genero FROM tbl_usuarios WHERE clave LIKE '%s' AND correo LIKE '%s'",
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
           $_SESSION["psw"] = $_POST["clave"];
       }else {
           $respuesta["codigoResultado"] = 1;
           $respuesta["mensajeResultado"] = "El usuario no existe";
           session_destroy();
       }
       echo json_encode($respuesta);
   
   }
}



?>