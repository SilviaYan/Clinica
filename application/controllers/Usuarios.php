<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Usuarios/usuarios_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }
        //funcion index (despliaga la pagina principal del modulo usuario)
        public function index() {
        $user= $this->usuarios_model->getUsers();

        $data['user'] = $user;

          if($_SESSION['login']==2){
             $this->load->view('base/headAdmin');
           }else if($_SESSION['login']==1){
             $this->load->view('base/headClient');
           }
        //$this->load->view('base/headAdmin');
        $this->load->view('Usuarios/usuariosView',$data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    /*funcion editar*/
    public function editar(){
        $idUsuario = $this->input->post('editar');
        $dato ['usuario']= $this->usuarios_model->obtenerValorCampos($idUsuario);

        $this->load->view('base/headAdmin');
        $this->load->view('Usuarios/editarUsuario', $dato);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    //despliega la vista para registrar un nuevo usuario
    public function nuevoUsuario(){

        $this->load->view('base/headAdmin');
        $this->load->view('Usuarios/NuevoUsuarioView');
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
    }

        //funcion de agregar usuario
        public function agregarUsuario(){
        $nombre = $this->input->post('nombre');
        $Apaterno = $this->input->post('Apaterno');
        $Amaterno = $this->input->post('Amaterno');
        $usuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $rol = $this->input->post('rol');
        
       // $this->load->model('Productos/productos_model');


        $this->usuarios_model->insertarUsuario($nombre, $Apaterno, $Amaterno, $usuario, $contrasena, $rol);
        redirect(base_url() . 'Usuarios');
    }

    /*funcion eliminar usuario*/
    public function eliminar(){
        $idUsuario = $this->input->post('eliminar');
        $this->usuarios_model->delete($idUsuario);
        redirect(base_url() . 'Usuarios');
    }

    
//funcion para modificar usuario
     public function modificarUsuario(){
        $nombre = $this->input->post('nombre');
        $Apaterno = $this->input->post('Apaterno');
        $Amaterno = $this->input->post('Amaterno');
        $usuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $rol = $this->input->post('rol');
        $id = $this->input->post('idusuario');
     
        $this->usuarios_model->modificarUsuario($id,$nombre, $Apaterno, $Amaterno, $usuario, $contrasena, $rol);
        redirect(base_url() . 'Usuarios');
    } 

    public function pdfReport()
{
     $user= $this->usuarios_model->getUsers();
     $data['user'] = $user;

$hora = new DateTime("now", new DateTimeZone('America/Mexico_City'));
            //echo "Fecha: ";
        //$hora->format('Y-m-d');
         $data['h'] = $hora;

        $hora2 = new DateTime("now", new DateTimeZone('America/Mexico_City'));
     //$hora2->format('H:i:s');
     $data['h2'] = $hora2;

    $this->load->library('Pdf');
    $this->load->view('Usuarios/usuariospdf',$data);
}
    
}