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

        if ($_SESSION['login'] == 1) {
            $this->load->view('base/headAdmin');
        } else if ($_SESSION['login'] == 2) {
            $this->load->view('base/headClient');
        }
        $this->load->view('Cotizaciones/cotizacionesView', $data);
        $this->load->view('base/js');
         // $this->load->view('base/api');
        $this->load->view('base/findoc');
    }

    public function getPatient()
    {
        $array = array();
        $idP = $this->input->post('pID');
        if(isset($idP)){
            $array = $this->cotizaciones_model->getPatient($idP);
            @$nombre  = $array[0]['pNombre'];
            @$apellido = $array[0]['pApellidoP'];

            $paciente = $nombre." ".$apellido;

        }
        return print_r($paciente);
    }

    public function getProducts()
    {
            $smt = $_REQUEST['p'];
            $action  =  $_REQUEST['action'];
            if($action == 'ajax'){
            $data = array();
            $array = $this->cotizaciones_model->getProducts($smt);
            $data['prod'] = $array;
            $this->load->view('base/headerCot');
            $this->load->view('Cotizaciones/prod_cot', $data);
            $this->load->view('base/js');
            $this->load->view('base/findoc');
            }

    }

    public function showTable(){
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
        }
        if (isset($_POST['precio'])) {
            $precio = $_POST['precio'];
        }
        if (!empty($id) and !empty($cantidad) and !empty($precio)) {
         $this->cotizaciones_model->insertTemp($id,$cantidad,$precio);
        }
        if(isset($_GET['id'])){
            $this->cotizaciones_model->deleteTemp($_GET['id']);
        }
        $array = array();
        $array = $this->cotizaciones_model->getTemp();
        $data['temp'] = $array;
        $this->load->view('base/headerCot');
        $this->load->view('Cotizaciones/detalle_cot', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }
}

?>