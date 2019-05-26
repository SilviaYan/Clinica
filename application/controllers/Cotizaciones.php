<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cotizaciones extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cotizaciones/cotizaciones_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $idCot = $this->cotizaciones_model->getIDCot();
        $value = (array) $idCot[0];
        $data['id'] = $value['AUTO_INCREMENT'];

        if ($_SESSION['login'] == 2) {
            $this->load->view('base/headAdmin');
        } else if ($_SESSION['login'] == 1) {
            $this->load->view('base/headClient');
        }
        //  $this->load->view('base/headAdmin');
        $this->load->view('Cotizaciones/cotizacionesView', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function getPatient()
    {
        $mensaje = "";
        $idP = $this->input->post('pID');
        if(isset($idP)){
            $array = $this->cotizaciones_model->getPatient($idP);
            @$nombre  = $array[0]['pNombre'];
            @$apellido = $array[0]['pApellidoP'];

            $mensaje .= 'nombre:' . $nombre . '<br>
                    apellido' . $apellido . '';
        }
        return print_r( $mensaje);
    }
}

?>