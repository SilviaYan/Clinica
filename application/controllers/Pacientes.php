<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pacientes extends CI_Controller{

    function __construct()
    {
        parent :: __construct();
        $this->load->model('Pacientes/pacientes_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $patients = $this->pacientes_model->getPatients();
        $data['patients'] = $patients;

        $this->load->view('base/headAdmin');
        $this->load->view('Pacientes/pacientesView', $data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

    public function agregar(){
        $idPaciente = $this->input->post('editar');
        $dato['paciente'] = $this->pacientes_model->obtenerValorCampos($idPaciente);

        $this->load->view('base/headAdmin');
        $this->load->view('Pacientes/modificarPaciente', $dato);

        $this->load->view('base/js');
        $this->load->view('base/findoc');

    }

    public function agregarPaciente(){
         $nombre             = $this->input->post('nombre');
         $apellidoM          = $this->input->post('apellidoM');
         $apellidoP          = $this->input->post('apellidoP');
         $año                = $this->input->post('año');
         $sexo               = $this->input->post('sexo');
         $estado             = $this->input->post('estado');
         $telefono           = $this->input->post('telefono');
         $fecha              = $this->input->post('fecha');
         $municipio          = $this->input->post('municipio');
         $direccion          = $this->input->post('direccion');
         $email              = $this->input->post('email');
         $asegurado          = $this->input->post('asegurado');
         $lesiones           = $this->input->post('lesiones');
         $transtornos        = $this->input->post('transtornos');
         $prob_respiratorios = $this->input->post('respiratorios');
         $envenenamiento     = $this->input->post('envenenamiento');
         $otros              = $this->input->post('otros');
         $adicciones         = $this->input->post('adicciones');
         $alergias           = $this->input->post('alergias');
         $alcoholismo        = $this->input->post('alcoholismo');
         $cirujias           = $this->input->post('cirujias');
         $fracturas          = $this->input->post('fracturas');
         $transfusiones      = $this->input->post('transfusiones');


         $this ->pacientes_model->insertPatient($nombre,
            $apellidoP,$apellidoM,$año,
            $sexo,$estado, $telefono,
            $fecha,$municipio,$direccion,
            $email,$asegurado, $lesiones,
            $transtornos,$prob_respiratorios, $envenenamiento,
            $otros, $adicciones, $alergias,
            $alcoholismo,$cirujias,$fracturas, $transfusiones);
            redirect(base_url().'Pacientes');
    }

    public function eliminar(){
        $idPacienteSelect = $this->input->post('eliminar');
        $this->pacientes_model->delete($idPacienteSelect);
        redirect(base_url().'Pacientes');
    }

    public function nuevoPaciente(){
        $this->load->view('base/headAdmin');
        $this->load->view('Pacientes/agregarPacienteView');
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
    }

    public function modPaciente()
    {
        $nombre             = $this->input->post('nombre');
        $apellidoM          = $this->input->post('apellidoM');
        $apellidoP          = $this->input->post('apellidoP');
        $año                = $this->input->post('año');
        $sexo               = $this->input->post('sexo');
        $estado             = $this->input->post('estado');
        $telefono           = $this->input->post('telefono');
        $fecha              = $this->input->post('fecha');
        $municipio          = $this->input->post('municipio');
        $direccion          = $this->input->post('direccion');
        $email              = $this->input->post('email');
        $asegurado          = $this->input->post('asegurado');
        $lesiones           = $this->input->post('lesiones');
        $transtornos        = $this->input->post('transtornos');
        $prob_respiratorios = $this->input->post('respiratorios');
        $envenenamiento     = $this->input->post('envenenamiento');
        $otros              = $this->input->post('otros');
        $adicciones         = $this->input->post('adicciones');
        $alergias           = $this->input->post('alergias');
        $alcoholismo        = $this->input->post('alcoholismo');
        $cirujias           = $this->input->post('cirujias');
        $fracturas          = $this->input->post('fracturas');
        $transfusiones      = $this->input->post('transfusiones');
        $id = $this->input->post('idpaciente');


        $this->pacientes_model-> modifyPatient($id,
            $nombre, $apellidoP,  $apellidoM, $año,$sexo,
            $estado, $telefono,$fecha, $municipio,
            $direccion, $email,  $asegurado,  $lesiones, $transtornos,
            $prob_respiratorios,$envenenamiento, $otros, $adicciones,
            $alergias, $alcoholismo,$cirujias, $fracturas, $transfusiones
        );
        redirect(base_url() . 'Pacientes');
    }
}

?>