<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct() {
        parent::__construct();
     //   $this->load->library('correos_po');
        $this->load->model('Tool_model');
        $this->load->model('conexion_model', 'Conexion');
        //$this->load->library('AOS_funciones');
    }
	public function index()
	{
		$this->load->model('Tool_model');
		$data['recetachef'] = $this->Tool_model->recetaschef();
		$data['receta'] = $this->Tool_model->recetas();
		$this->load->view('header');
		$this->load->view('welcome_message', $data);
	}
	public function ver($id)
	{
		$this->load->model('Tool_model');
		$data['ingrediente'] = $this->Tool_model->recetas_detalles($id);
		$data['receta'] = $this->Tool_model->get_receta($id);
		$this->load->view('header');
		$this->load->view('ver', $data);
	}
}
