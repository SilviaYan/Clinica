<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Productos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Productos/productos_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

        public function index() {
      
        $products = $this->productos_model->getProducts();

        $data['products'] = $products;

        if($_SESSION['login']==2){
             $this->load->view('base/headAdmin');
           }else if($_SESSION['login']==1){
             $this->load->view('base/headClient');
           }
      //  $this->load->view('base/headAdmin');
        $this->load->view('Productos/productosView',$data);
        $this->load->view('base/js');
      //  $this->load->view('base/body');
    }
    

    public function modificar(){
        $idProducto = $this->input->post('editar');
        $dato ['producto']= $this->productos_model->obtenerValorCampos($idProducto);

        $this->load->view('base/headAdmin');
        $this->load->view('Productos/modificarProducto', $dato);
     
        $this->load->view('base/js');
        $this->load->view('base/findoc');
    }

        public function agregarProducto(){
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $tipo = $this->input->post('tipo');
        $proveedor = $this->input->post('proveedor');
        $unidad = $this->input->post('unidad');
        $marca = $this->input->post('marca');
        $precio = $this->input->post('precio');
        $costo = $this->input->post('costo');
        $existencia = $this->input->post('existencia');

       // $this->load->model('Productos/productos_model');


        $this->productos_model->insertProduct($marca, $precio, $costo, $nombre, $descripcion, $tipo, $proveedor, $unidad, $existencia);
        redirect(base_url() . 'Productos');
    }

    public function eliminar(){
        $idProductoSelect = $this->input->post('eliminar');
        $this->productos_model->delete($idProductoSelect);
        redirect(base_url() . 'Productos');
    }

    public function nuevoProducto(){

        $this->load->view('base/headAdmin');
        $this->load->view('Productos/agregarProductoView');
        $this->load->view('base/js');
        $this->load->view('base/findoc'); 
    }

//metodo para modificar solicitud
     public function modificarProduct(){
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $tipo = $this->input->post('tipo');
        $proveedor = $this->input->post('proveedor');
        $unidad = $this->input->post('unidad');
        $marca = $this->input->post('marca');
        $precio = $this->input->post('precio');
        $costo = $this->input->post('costo');
        $existencia = $this->input->post('existencia');
        $id = $this->input->post('idproducto');
     
    //    $this->load->model('Productos/productos_model');


        $this->productos_model->modificarProducto($marca, $precio, $costo, $nombre, $descripcion, $tipo, $proveedor, $unidad, $existencia, $id);
        redirect(base_url() . 'Productos');
    }
 public function pdfReport()
{
      $products = $this->productos_model->getProducts();

        $data['products'] = $products;

$hora = new DateTime("now", new DateTimeZone('America/Mexico_City'));
            //echo "Fecha: ";
        //$hora->format('Y-m-d');
         $data['h'] = $hora;

        $hora2 = new DateTime("now", new DateTimeZone('America/Mexico_City'));
     //$hora2->format('H:i:s');
     $data['h2'] = $hora2;

    $this->load->library('Pdf');
    $this->load->view('Productos/productospdf',$data);
}
    
}