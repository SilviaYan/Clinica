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

        $this->load->view('base/headAdmin');
        $this->load->view('Productos/productosView',$data);
        $this->load->view('base/js');
        $this->load->view('base/findoc');
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

    
}