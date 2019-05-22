<?php

defined('BASEPATH') or
    exit('No direct script access allowed');

class pacientes_model extends CI_Model {

    function __construct()
    {
        parent ::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getPatients(){
        $result = $this->db->query( "select pID, pNombre,pApellidoP, 
        pApellidoM, email from Pacientes;");
         return $result->result_array();
    }

    function insertPatient($nombre, $apellidoP, $apellidoM, $año, $sexo,$estado,$telefono,
            $fecha, $municipio,$direccion,$email, $asegurado, $lesiones, $transtornos,
            $prob_respiratorios, $envenenamiento,$otros,$adicciones,$alergias, $alcoholismo,
            $cirujias, $fracturas, $transfusiones){

    $datos = array(
            'pNombre'         => $nombre,
            'pApellidoM'      => $apellidoM,
            'pApellidoP'      => $apellidoP,
            'pAño'            => $$año,
            'pSexo'           => $sexo,
            'pEstado'         => $estado,
            'pTelefono'       => $telefono,
            'pFechaNac'       => $fecha,
            'pMunicipio'      => $municipio,
            'pDireccion'      => $direccion,
            'email'           => $email,
            'pAsegurado'      => $asegurado,
            'pLesiones'       => $lesiones,
            'pTranstornos'    => $transtornos,
            'pRespiracion'    => $prob_respiratorios,
            'pEnvenenamiento' => $envenenamiento,
            'otros'           => $otros,
            'pAdiccion'       => $adicciones,
            'pAlergias'       => $alergias,
            'pAlcoholismo'    => $alcoholismo,
            'cirujias'        => $cirujias,
            'fracturas'       => $fracturas,
            'transfusiones'   => $transfusiones,
            'pIDAlta'         => 1,
            'pAlta'           => date('y-m-d')
    );
        $this ->db ->insert('Pacientes', $datos);
    }

    function obtenerValorCampos($idPaciente){
        $resultado = $this->db->query("select * from Pacientes where pID= '".$idPaciente."';");
        return $resultado->result_arrau();
    }
    function delete($idPaciente){
        $resultado = $this->db->query("delete from Pacientes where pID = '".$idPaciente."'");
    }

    function modifyPatient(
        $nombre,$apellidoP,$apellidoM,$año,$sexo, $estado,
        $telefono,$fecha,$municipio, $direccion,
        $email, $asegurado, $lesiones,$transtornos,
        $prob_respiratorios,$envenenamiento,
        $otros, $adicciones, $alergias, $alcoholismo,
        $cirujias, $fracturas, $transfusiones,$idPaciente
    ) {

        $datos = array(
            'pNombre'         => $nombre,
            'pApellidoM'      => $apellidoM,
            'pApellidoP'      => $apellidoP,
            'pAño'            => $$año,
            'pSexo'           => $sexo,
            'pEstado'         => $estado,
            'pTelefono'       => $telefono,
            'pFechaNac'       => $fecha,
            'pMunicipio'      => $municipio,
            'pDireccion'      => $direccion,
            'email'           => $email,
            'pAsegurado'      => $asegurado,
            'pLesiones'       => $lesiones,
            'pTranstornos'    => $transtornos,
            'pRespiracion'    => $prob_respiratorios,
            'pEnvenenamiento' => $envenenamiento,
            'otros'           => $otros,
            'pAdiccion'       => $adicciones,
            'pAlergias'       => $alergias,
            'pAlcoholismo'    => $alcoholismo,
            'cirujias'        => $cirujias,
            'fracturas'       => $fracturas,
            'transfusiones'   => $transfusiones,
            'pIDMod'         => 1,
            'pMod'           => date('y-m-d')
        );
        $this->db->where('pID', $idPaciente);
        $this->db->update('Pacientes', $datos);
    }




}
?>