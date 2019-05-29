<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login/login_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

public function index() {
       // $this->principal_model->updateUserActual('0');
//session_start();
  //      $this->load->view('base/head');
        $this->load->view('login/login');
     //   $this->load->view('base/footer');
        $this->load->view('base/js');
      //  $this->load->view('base/findoc');
    }

    public function ingresar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
 
        $user = $this->login_model->getUsers();
        for ($row = 0; $row < count($user); $row++) {

            if((($user[$row]['usuario'] == $usuario) && ($user[$row]['uPass'] == $password)) && ($user[$row]['uRol'] == "Administrador")){
                $login = 2;
                $_SESSION['login']  = 1; /* 1 ES ADMIN */
                $idUsuario = $user[$row]['uID'];
                $_SESSION['userid']  = $idUsuario;
                $row = count($user);
            }else if((($user[$row]['usuario'] == $usuario) && ($user[$row]['uPass'] == $password)) && ($user[$row]['uRol'] == "Ventas")){
                $login = 1;
                $_SESSION['login']  = 2; /* 2 ES VENTAS*/
                $idUsuario = 1;
                $_SESSION['userid']  = $user[$row]['uID'];
                $row = count($user);
            }else{
                if($row == (count($user)-1)){
                    $login = 0;
                    $_SESSION['login']  = 0;
                    $row = count($user);
                }else{
                    $login = -1;
                }
            }

             // $_SESSION['login']  = $login;
            switch($login){
                case 0:
                    echo '<script language="javascript">alert("Inicio de Sesión Incorrecto");</script>';
                    $this->load->view('login/login');
                    $this->load->view('base/findoc');
                break;
                case 1:
                    $this->load->view('base/headClient');
                    $this->load->view('base/bodyclient');
                    $this->load->view('base/findoc');
   
                break;
                case 2:
                    $this->load->view('base/headAdmin');
                    $this->load->view('base/body');
                    $this->load->view('base/js');
                    $this->load->view('base/findoc');
                /*default;
                    */
                break;
            }
        }
     
    }

    public function salir(){
        session_start();
        session_destroy();
        redirect(base_url() . 'Login');
    }


}
