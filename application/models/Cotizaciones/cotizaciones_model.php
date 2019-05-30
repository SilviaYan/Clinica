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

    function insertTemp($id_prod,$cot, $cantidad, $precio){
        $datos = array(
            'idProd'     => $id_prod,
            'cvID'       => $cot,
            'cantidad'   => $cantidad,
            'precio'     => $precio
        );
        $this->db->insert( 'cot_temp', $datos);
    }

    function insertQuo(
        $idPaciente, $idUsuario,
        $fecha, $lugarExp, $pago, $id
    ){
        $datos = array(
            'pID'       => $idPaciente,
            'uID'       => $idUsuario,
            'cFecha'    => $fecha,
            'cLugarExp' => $lugarExp,
            'cPago'     => $pago,
            'cIDAlta'   => $id,
            'cAlta'     => date('y-m-d')
        );
        $this->db-> insert('Cotizaciones',$datos);
    }

    function insertDC($id_prod, $cotID, $cantidad, $precio, $importe)
    {
        $datos = array(
            'pID'       => $id_prod,
            'cvID'      => $cotID,
            'cantidad'  => $cantidad,
            'precio'    => $precio,
            'importe'   => $importe
        );
        $this->db->insert('detalleCot', $datos);
    }

    function truncarTemporal(){
        $resultado = $this->db->query("truncate table cot_temp;");
    }


} /* Class */

?>
