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
        if ($_SESSION['login'] == 2) {
            $this->load->view('base/headAdmin');
        } else if ($_SESSION['login'] == 1) {
            $this->load->view('base/headClient');
        }
        //  $this->load->view('base/headAdmin');
        $this->load->view('Cotizaciones/cotizacionesView');
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }







}

?>