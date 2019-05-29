<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class productos_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function getProducts() {
        $result = $this->db->query("select prodID, pMarca, pPrecio, pCosto, pTipo  from Productos;");
        return $result->result_array();    
    }
    
    function insertProduct($marca, $precio, $costo, $nombre, $descripcion, $tipo, $proveedor, $unidad, $existencia){

       $datos = array(
          'pMarca' => $marca,
          'pPrecio' =>$precio,
          'pCosto' => $costo,
          'pExiste' => $existencia,
          'pProd' => $nombre,
          'pDesc' => $descripcion,
          'pTipo' => $tipo,
          'pProv' => $proveedor,
          'pUnidad' => $unidad,
          'pIDAlta' => $_SESSION['userid'],
          'pAlta' => date('y-m-d')
          );

   $this->db->insert('Productos', $datos);  
    }


    function obtenerValorCampos($idProducto){
        $resultado = $this->db->query("select * from Productos where prodID= '".$idProducto."';");       
        return $resultado->result_array();   
    }
    function delete($idProducto){
        $resultado = $this->db->query("delete from Productos where prodID = '".$idProducto."'");

    }

   function modificarProducto($marca, $precio, $costo, $nombre, $descripcion, $tipo, $proveedor, $unidad, $existencia, $idproducto){

   $datos = array(
          'pMarca' => $marca,
          'pPrecio' =>$precio,
          'pCosto' => $costo,
          'pExiste' => $existencia,
          'pProd' => $nombre,
          'pDesc' => $descripcion,
          'pTipo' => $tipo,
          'pProv' => $proveedor,
          'pUnidad' => $unidad,
          'pIDMod' =>$_SESSION['userid'],
          'pMod' => date('y-m-d')
          );

       $this->db->where('prodID', $idproducto);
       $this->db->update('Productos', $datos);

     }

} 