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
    function getProducts($something)
    {
        $result = "";
        if($something == null){
            $result = $this->db->query("select * from Productos;");
        }else{
            $result = $this->db->query("select * from Productos WHERE pProd like '%" . $something . "%' or prodID like '%" . $something . "%';");
        }

        return $result->result_array();
    }
    

    function getIDCot(){
        $result = $this->db->query("CALL getNextIDCot();");
        return $result->result();
    }

    function deleteQuo($idCot){
        $resultado = $this->db->query("delete from Cotizaciones where cotID='".$idCot."';");
    }

    function deleteTemp($id)
    {
        $resultado = $this->db->query("delete from cot_temp where id='" . $id . "';");
    }

    function getTemp(){
        $result = $this->db->query("select * from cot_temp;");
        return $result->result_array();
    }

    function insertTemp($id_prod, $cantidad, $precio){
        $datos = array(
            'idProd'       => $id_prod,
            'cantidad'       => $cantidad,
            'precio'    => $precio
        );
        $this->db->insert( 'cot_temp', $datos);
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
