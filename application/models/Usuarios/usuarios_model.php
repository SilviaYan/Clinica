<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');
    
//todas la funciones del modelo se mandan a llamar desde el controlador 
class usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
    
    //funcion getUsers consulta de todos los registros de la tabla signup
    function getUsers() {
        $result = $this->db->query("select * from signup;");
        return $result->result_array();    
    }
    //se creas la funcion y se insertan esos datos en la tabla 
    function insertarUsuario($nombre, $Apaterno, $Amaterno, $usuario, $contrasena, $rol){

       $datos = array(
          'nUsuario' =>$nombre,
          'uPaterno' => $Apaterno,
          'uMaterno' => $Amaterno,
          'usuario' => $usuario,
          'uPass' => $contrasena,
          'uRol' => $rol,
          'uIDMod' => 1,
          'uMod' => date('y-m-d'),
          'uIDAlta' => 1,
          'uAlta' => date('y-m-d')
          );

   $this->db->insert('signup', $datos);  
    }

    //se obtienen el valor de los campos esta funcion se utiliza al momento de editar se manda a llamar en el controlador 
    function obtenerValorCampos($idUsuario){
        $resultado = $this->db->query("select * from signup where uID= '".$idUsuario."';");       
        return $resultado->result_array();   
    }
    //elimina un registro de la bd
    function delete($idUser){
        $resultado = $this->db->query("delete from signup where uID = '".$idUser."'");

    }
    //se creas la funcion y se modifican esos datos en la tabla 
   function modificarUsuario($idUsuario,$nombre, $Apaterno, $Amaterno, $usuario, $contrasena, $rol){

   $datos = array(
    'nUsuario' =>$nombre,
    'uPaterno' => $Apaterno,
    'uMaterno' => $Amaterno,
    'usuario' => $usuario,
    'uPass' => $contrasena,
    'uRol' => $rol,
    'uIDMod' => 1,
    'uMod' => date('y-m-d')
          );

       $this->db->where('uID', $idUsuario);
       $this->db->update('signup', $datos);
     }

} 