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
      //  $this->load->view('base/js');
      //  $this->load->view('base/findoc');
    }

    public function ingresar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
 
        $user = $this->login_model->getUsers();
        //print_r($user);
        //exit;
       // session_start();
        for ($row = 0; $row < count($user); $row++) {

            if((($user[$row]['usuario'] == $usuario) && ($user[$row]['uPass'] == $password)) && (($usuario != "Admin") && ($password != "1234"))){
                $login = 1;
                $_SESSION['login']  = 1;
                $idUsuario = $user[$row]['uID'];
                $row = count($user);
            }else if(($usuario == "Admin") && ($password == "1234")){
                $login = 2;
                $_SESSION['login']  = 2;
                $idUsuario = 1;
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

                    //$this->principal_model->updateUserActual('0');
                    //print_r("Error de Login");
                    echo '<script language="javascript">alert("Inicio de Sesión Incorrecto");</script>';
                    //$this->load->view('base/head');
                    $this->load->view('login/LoginView');
                   // $this->load->view('base/footer');
                   // $this->load->view('base/js');
                   // $this->load->view('base/findoc');
                break;
                case 1:
         
                     $solicitud = $this->model_solicitud->getRequest();

                     $data['solicitud'] = $solicitud;
                     //$id['log'] = $login;

                    $this->load->view('base/headAdmin');


                    $this->load->view('solicitud/viewSolicitudes',$data);

                    //$this->load->view('base/footer');
                  //  $this->load->view('base/js');
                   // $this->load->view('base/findoc');
   
                break;
                case 2:

                    $this->load->view('base/headAdmin');
                    $solicitud = $this->model_solicitud->getRequest();

                     $data['solicitud'] = $solicitud;


                    $this->load->view('solicitud/viewSolicitudes',$data);

                   // $this->load->view('base/footer');
                   // $this->load->view('base/js');
                    //$this->load->view('base/findoc');
                /*default;
                    */
                break;
            }
        }
     
    }
}
