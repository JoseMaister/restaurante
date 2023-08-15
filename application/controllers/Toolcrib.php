<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toolcrib extends CI_Controller {
    function __construct() {
        parent::__construct();
     //   $this->load->library('correos_po');
        $this->load->model('Tool_model');
        //$this->load->library('AOS_funciones');
    }
    function inventario(){
        $this->load->model('tool_model');
        $data['productos']=$this->tool_model->productos();

        $this->load->view('header');
        $this->load->view('toolcrib/inventario', $data);
    }
    function producto_nuevo(){
        $this->load->model('tool_model');
        $this->load->view('header');
        $this->load->view('toolcrib/productoNuevo');
    }

    function subproducto(){
        $this->load->model('tool_model');
        $data['venta'] = $this->tool_model->ventatemp();
        $data['productos']=$this->tool_model->productos();

        $this->load->view('header');
        $this->load->view('toolcrib/subproducto', $data);
    }


function receta(){
        $this->load->model('tool_model');
        $data['venta'] = $this->tool_model->ventatemp();
        $data['productos']=$this->tool_model->productos();

        $this->load->view('header');
        $this->load->view('toolcrib/receta', $data);
    }
    function registrar_producto(){

        $datos = array(
            'proveedor'=>$this->input->post('proveedor'),
            'ingrediente'=>$this->input->post('ingrediente'),
            'cantidadEmpaque'=>$this->input->post('cantidadEmpaque'),
            'unidadReceta'=>$this->input->post('unidadReceta'),
            'preciodlls'=>$this->input->post('preciodlls'),
            'preciounitario'=>$this->input->post('preciounitario'),
            'unidadEmpaque'=>$this->input->post('unidadEmpaque'),

        );
        $this->load->model('tool_model');

        $res = $this->tool_model->registrarProducto($datos);
        redirect(base_url('toolcrib/inventario'));
    }
     function registrarVenta(){
        //$datos['idUs'] = $this->session->id;
        /*$datos['idProd']=$this->input->post('producto');
        $datos['cantidad']=$this->input->post('cantidad');*/
        $datos = array(
           // 'idUs'=>$this->session->id,
            'idProd' =>$this->input->post('producto'),
            'cantidad'=>$this->input->post('cantidad'),

        );
        $this->load->model('tool_model');

        $res = $this->tool_model->registrarVentaTemp($datos);
        redirect(base_url('toolcrib/subproducto'));
    
        }

}
