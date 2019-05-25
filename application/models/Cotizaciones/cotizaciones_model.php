<?php

defined('BASEPATH') or
    exit('No direct script access allowed');

class cotizaciones_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

        /* Obtener información del paciente*/
    function getPatient($idP)
    {
        $result = $this->db->query("select pNombre, pApellidoP from Pacientes WHERE pID ='".$idP."';");
        return $result->result_array();
    }
        /* Obtener información del producto para
           el detalle de cotización*/
    function getProduct(){
        $result = $this->db->query("");
        return $result->result_array();
    }

    function getIDCot(){
        $result = $this->db->query("CALL getNextIDCot();");
        return $result->result();
    }

    function deleteQuo($idCot){
        $resultado = $this->db->query("delete from Cotizaciones where cotID='".$idCot."';");
    }

    function insertQuo(
        $idPaciente, $idUsuario,
        $fecha, $subtotal, $total,
        $lugarExp, $pago, $iva 
    ){
        $datos = array(
            'pID'       => $idPaciente,
            'uID'       => $idUsuario,
            'cFecha'    => $fecha,
            'cSubtotal' => $subtotal,
            'cTotal'    => $total,
            'cLugarExp' => $lugarExp,
            'cPago'     => $pago,
            'cIva'      => $iva,
            'cIDAlta'   => 1,
            'cAlta'     => date('y-m-d')
        );
        $this->db-> insert('',$datos);
    }
} /* Class */

?>
