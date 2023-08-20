<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toolcrib extends CI_Controller {
    function __construct() {
        parent::__construct();
     //   $this->load->library('correos_po');
        $this->load->model('Tool_model');
        $this->load->model('conexion_model', 'Conexion');
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
        $data['venta'] = $this->tool_model->recetatemp();
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
         function verProducto($idp){
        $this->load->model('tool_model');

        $datosProd=$this->tool_model->getProds($idp);
       // $data['codigo']=$datosProd->codigo;
        $data['producto']=$datosProd->ingrediente;

        //$data['cantidad']=$datosProd->cantidad;

        $data['productos']=$this->tool_model->getProd($idp);   
       // $data['movimientos']=$this->tool_model->movimientosProd($idp);   
        $data['qty'] =$this->tool_model->prodCant($idp);
        $data['ubicacion']=$this->tool_model->ubicaciones($idp);
        $this->load->view('header');
        $this->load->view('toolcrib/ver_Prod', $data);
        //echo var_dump($data);die();
    }
    function editarProducto() {
        $this->load->model('tool_model');
        $this->load->model('conexion_model', 'Conexion');
        $idp = $this->input->post('idProducto');
        $qty=$this->input->post('cantidad');
        $ubicacion = $this->input->post('ubicacion');
        $stock = $this->input->post('stock');
        $qtyF=$stock+$qty;
        


        $query = "SELECT * from ubiProds where ubicacion ='".$ubicacion."' and idProd='".$idp."'";
        $result=$this->db->query($query)->result_array();
        if ($result) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Ubicacion ya ha sido registrada");'; 
            echo 'window.location = "verProducto/'.$idp.'"';
            echo '</script>';
        

            
        }else{
              $data = array(
            'idProd' => $this->input->post('idProducto'),
            'ubicacion' => $this->input->post('ubicacion'),
            'cantidad' => $this->input->post('cantidad'),
            
        );
       
          $this->tool_model->registrarubicacion($data);

      /*  $mov = array(
            'idProd'=>$idp,
            'idUs' => $this->session->id,
            'cantidad'=>$qty,
            'local'=>$ubicacion,
            'tipo'=>'ENTRADA',
            'comentario'=>$this->input->post('comentario'),
            'fecha' => date('Y-m-d'),
        );
        $this->tool_model->registrarMov($mov);*/

        

        redirect(base_url('toolcrib/verProducto/'.$idp));


        }    

    }
    function EditarProd($idp){
        $this->load->model('tool_model');

        //$datosProd=$this->tool_model->getProds($idp);
        $datosub=$this->tool_model->ubicacion($idp);
       // $data['codigo']=$datosProd->codigo;
        //$data['producto']=$datosProd->producto;

        //$data['ubicacion']=$datosub->ubicacion;

        //$data['cantidad']=$datosProd->cantidad;

        $data['productos']=$this->tool_model->getProd($idp);       
        $data['ubicaciones']=$this->tool_model->locacion($idp);       
        $this->load->view('header');
        $this->load->view('toolcrib/editar_Prod', $data);
        //echo var_dump($data);die();
    }
    function updateProducto() {
        $this->load->model('tool_model');
        $idp = $this->input->post('idProducto');
        $stock = $this->input->post('stock');
        $qty=$this->input->post('cantidad');
        $qtyF=$stock+$qty;
        //echo var_dump($qtyF); die();
        $ubi = $this->input->post('ubicacion');
        $data = array(
            'cantidad' => $qtyF,
        );
       
         $id_inserted =  $this->tool_model->updateProducto($idp,$ubi,$data);
         $mov = array(
            'idProd'=>$idp,
            'idUs' => $this->session->id,
            'cantidad'=>$qty,
            'local'=>$ubi,
            'tipo'=>'ENTRADA',
            'comentario'=>$this->input->post('comentario'),
            'fecha' => date('Y-m-d'),
        );
         $this->tool_model->registrarMov($mov);
         redirect(base_url('toolcrib/verProducto/'.$idp));
    }
    function registrar_subproducto(){

        $datos = array(
           // 'proveedor'=>$this->input->post('proveedor'),
            'ingrediente'=>$this->input->post('producto'),
            /*'cantidadEmpaque'=>$this->input->post('cantidadEmpaque'),
            'unidadReceta'=>$this->input->post('unidadReceta'),
            'preciodlls'=>$this->input->post('preciodlls'),
            'preciounitario'=>$this->input->post('preciounitario'),*/
            'unidadEmpaque'=>$this->input->post('unidadEmpaque'),
            'subproducto'=>1,

        );
        $this->load->model('tool_model');

        $id = $this->tool_model->registrarProducto($datos);

         $query='SELECT * from VentTCTemp';
        //var_dump($query);die();
        $res = $this->Conexion->consultar($query);
//        echo var_dump($res);die();



    foreach($res as $val) {

        //echo var_dump($val->idUs.$val->idProd.$val->cantidad);
        
        $data = array(
            'id_productos' => $id,
            'ingredientes' => $val->idProd,
            'cantidad' => $val->cantidad,
            
        );

        $id_inserted =  $this->tool_model->registrarVentaDet($data);
        $this->tool_model->delVentTemp();

        
    }
    redirect(base_url('toolcrib/inventario'));
}
function registrarRecetaTemp(){
        //$datos['idUs'] = $this->session->id;
        /*$datos['idProd']=$this->input->post('producto');
        $datos['cantidad']=$this->input->post('cantidad');*/
        $datos = array(
           // 'idUs'=>$this->session->id,
            'id_productos' =>$this->input->post('producto'),
            'cantidad'=>$this->input->post('cantidad'),

        );
        $this->load->model('tool_model');

        $res = $this->tool_model->registrarRecetaTemp($datos);
        redirect(base_url('toolcrib/receta'));
    
        }


function registrarReceta(){
     $foto = file_get_contents($_FILES['foto']['tmp_name']);

        $datos = array(
            'nombre'=>$this->input->post('nombre'),
            'procedimiento'=>$this->input->post('procedimiento'),
            'propietario'=>$this->input->post('propietario'),
            'foto'=>$foto,


        );
        $this->load->model('tool_model');

        $id = $this->tool_model->registrarReceta($datos);

         $query='SELECT * from receta_temp';
        //var_dump($query);die();
        $res = $this->Conexion->consultar($query);
//        echo var_dump($res);die();



    foreach($res as $val) {

        //echo var_dump($val->idUs.$val->idProd.$val->cantidad);
        
        $data = array(
            'id_receta' => $id,
            'ingredientes' => $val->id_productos,
            'cantidad' => $val->cantidad,
            
        );

        $id_inserted =  $this->tool_model->registrarRecetaDet($data);
        $this->tool_model->delRecetaTemp();

        
    }
    redirect(base_url('toolcrib/inventario'));
}

function ajax_ingredientess(){
    $id=$this->input->post('id');
    $query = "SELECT sp.*, p.ingrediente FROM subproductos sp JOIN productos p on sp.id_productos=p.id WHERE sp.id_productos = ".$id;

    $res = $this->Conexion->consultar($query);

    if ($res) {
        echo json_encode($res);
    }
}
function editar_receta($id){

        $this->load->model('tool_model');
        $data['receta'] = $this->Tool_model->get_receta($id);
        $data['venta'] = $this->tool_model->receta_detalles($id);
        $data['productos']=$this->tool_model->productos();

        $this->load->view('header');
        $this->load->view('toolcrib/editar_receta', $data);
    

}
function editar_receta_ingredientes(){
    $id_receta =$this->input->post('id_receta');
        $datos = array(
            'id_receta'=>$id_receta,
            'ingredientes' =>$this->input->post('producto'),
            'cantidad'=>$this->input->post('cantidad'),

        );
        $this->load->model('tool_model');

        $res = $this->tool_model->editar_receta_ingredientes($datos);
        redirect(base_url('toolcrib/editar_receta/'.$id_receta));
}
function update_receta(){
    $id_receta =$this->input->post('id_receta');
     $foto = file_get_contents($_FILES['foto']['tmp_name']);

        $datos = array(
            'nombre'=>$this->input->post('nombre'),
            'procedimiento'=>$this->input->post('procedimiento'),
            'propietario'=>$this->input->post('propietario'),

        );
        $this->load->model('tool_model');

        $this->tool_model->update_receta($id_receta,$datos);

    redirect(base_url('welcome/ver/'.$id_receta));
}
function uploadFoto() {
      $this->load->model('tool_model');
      $id=$this->input->post('id');
      //$datos['id'] = $id;
      $datos['foto'] = file_get_contents($_FILES['file']['tmp_name']);
        //$datos['nombre_archivoEjemplo'] = $_FILES['file']['name'];
      //echo var_dump($datos);die();
        ///echo var_dump($datos);die();
      $this->tool_model->update_receta($id,$datos);   
    }
    function cancelarProducto($idp){
        $this->load->model('tool_model');
        $this->tool_model->cancelarProducto($idp);
        redirect(base_url('toolcrib/subproducto'));
    }
    function cancelarProductoReceta($idp){
        $this->load->model('tool_model');
        $this->tool_model->cancelarProductoReceta($idp);
        redirect(base_url('toolcrib/receta'));
    }
     function cancelarReceta($idp, $idr){
        $this->load->model('tool_model');
        $this->tool_model->cancelarReceta($idp);
        redirect(base_url('toolcrib/editar_receta/'.$idr));
    }



}
