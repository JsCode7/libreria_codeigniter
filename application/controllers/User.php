<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		//Carga librería de la sesión
		$this->load->library('session');

		//Restringe a los usuarios devolverse al login si la sesión no está abierta
		if($this->session->userdata('user')){
			redirect('home');
		}
		else{
			$this->load->view('headtienda');
			$this->load->view('bodytienda');
			$this->load->view('footertienda');
		}
	}

	public function iniciarsesion(){
		//Carga librería de la sesión
		$this->load->library('session');

		//Restringe a los usuarios devolverse al login si la sesión no está abierta
		if($this->session->userdata('user')){
			redirect('home');
		}
		else{
			$this->load->view('login_page');
		}
	}

	public function inicio(){
		$this->load->view('head');
		$this->load->view('agregar');
		$this->load->view('footer');
	}

	public function iniciotienda(){
		$this->load->view('headtienda');
		$this->load->view('bodytienda');
		$this->load->view('footertienda');
	}
	
	public function catalogo(){
		$this->load->view('catalogo');
	}

	public function contacto(){
		$this->load->view('contacto');
	}

	public function login(){
		//Carga librería de la sesión
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $_POST['password'];
		$data = $this->users_model->login($email, $password);
		if($data){
			$this->session->set_userdata('user', $data);
			redirect('home');
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	public function home(){
		//Carga librería de la sesión
		$this->load->library('session');
		//Restringe a los usuarios
		if($this->session->userdata('user')){
			$this->load->view('home');
		}
		else{
			redirect('/');
		}
	}

	public function logout(){
		//Carga librería de la sesión
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

	public function mostrar(){
		$this->load->model("Users_model","proceso");
		$data = $this->proceso->get_mostrar();
		echo json_encode($data);
	}

	public function mostrarbusqueda($codproducto){
		//$codproducto = $this->input -> post('codproducto');
		$this->load->model("Users_model","proceso");
		$datos = [
			'antecedente' => $this->proceso->get_mostrarmodificar($codproducto)
		];
		
		$this->load->view('head');
		$this->load->view('modificar', $datos);
		$this->load->view('footer');

	}

	public function agregar(){
		$codproducto = $this -> input -> post('codproducto');
		$nombre = $this -> input -> post('nombre');
		$precio = $this -> input -> post('precio');
		$descripcion = $this -> input -> post('descripcion');
		$descuento = $this -> input -> post('descuento');
		$this->load->model("Users_model", "proceso");
		$data = $this -> proceso -> agregar($codproducto, $nombre, $precio, $descripcion, $descuento);
		echo json_encode($data);
	}

	public function modificar(){
		$codproducto = $this -> input -> post('codproducto');
		$nombre = $this -> input -> post('nombre');
		$precio = $this -> input -> post('precio');
		$descripcion = $this -> input -> post('descripcion');
		$descuento = $this -> input -> post('descuento');
		$this->load->model("Users_model", "proceso");
		$data = $this -> proceso -> modificar($codproducto, $nombre, $precio, $descripcion, $descuento);
		echo json_encode($data);
	}

	public function eliminar(){
		$codproducto = $this -> input -> post('codproducto');
		$this->load->model("Users_model", "proceso");
		$data = $this -> proceso -> eliminar($codproducto);
		echo json_encode($data);
	}

	// Aqui comenzarán los controladores del carrito
	
}
