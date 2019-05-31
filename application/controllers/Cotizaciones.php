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
        $this->cotizaciones_model->truncarTemporal();
        if ($_SESSION['login'] == 1) {
            $this->load->view('base/headAdmin');
        } else if ($_SESSION['login'] == 2) {
            $this->load->view('base/headClient');
        }
        $this->load->view('Cotizaciones/cotizacionesView', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function cotizacionesList(){

        $cot= $this->cotizaciones_model->getCot();
        $data['cot'] = $cot;
        if ($_SESSION['login'] == 1) {
            $this->load->view('base/headAdmin');
        } else if ($_SESSION['login'] == 2) {
            $this->load->view('base/headClient');
        }
        $this->load->view('Cotizaciones/cotizacionesList', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');

    }

    public function eliminar(){
        $idCotSelected = $this->input->post('eliminar');
        $this->cotizaciones_model->deleteQuoDet($idCotSelected);
        $this->cotizaciones_model->deleteQuo($idCotSelected);
        redirect(base_url() . 'Cotizaciones');
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
         $cot = $_POST['cot'];
         $this->cotizaciones_model->insertTemp($id,$cot,$cantidad,$precio);
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

     public function agregarCotizacion(){
      /* Primero insertas la cotización */
        $fecha = $this->input->post('fecha');
        $idUsuario = $this->input->post('uID');
        $lugarExp = $this->input->post('exp');
        $idPaciente = $this->input->post('pID');
        $pago = $this->input->post('pago');

        /* después te traes los datos de la tabla temporal */
        $array = $this->cotizaciones_model->getTemp();
        if($array != null){
            $this->cotizaciones_model->insertQuo(
                $idPaciente,
                $idUsuario,
                $fecha,
                $lugarExp,
                $pago,
                $idUsuario
            );
            $importe = 0;
            foreach ($array as $key) {
                $idProd = $key['idProd'];
                $cvID = $key['cvID'];
                $cantidad = $key['cantidad'];
                $precio = $key['precio'];
                $importe = $cantidad * $precio;
                $this->cotizaciones_model->insertDC($idProd, $cvID, $cantidad, $precio, $importe);
            }
            $this->cotizaciones_model->truncarTemporal();
            redirect(base_url() . 'Cotizaciones/cotizacionesList');
        }else{
            echo "<script> alert('Necesitas productos.'); </script>";
            $this -> index();
        }
    }
}
?>