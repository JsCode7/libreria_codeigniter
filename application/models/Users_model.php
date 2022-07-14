<?php

defined('BASEPATH') or exit('No direct script acces allowed');

	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login($email, $password){
			$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}

		function get_mostrar(){
			$sql ="SELECT * FROM productos";
			$result = $this->db->query($sql);
			return $result->result();
		}
	
		function agregar($codproducto, $nombre, $precio, $descripcion, $descuento){
			$sql ="INSERT INTO `productos`(`codproducto`, `nombre`, `precio`, `descripcion`, `descuento`) values ($codproducto, '$nombre', $precio, '$descripcion', $descuento)";
			$result = $this-> db -> query($sql);
		}
		function eliminar($codproducto){
			$sql ="DELETE FROM `productos` WHERE `codproducto` = $codproducto";
			$result = $this-> db -> query($sql);
		}
		function modificar($codproducto, $nombre, $precio, $descripcion, $descuento){
			//UPDATE `productos` SET `nombre`='[value-2]',`precio`='[value-3]',`descripcion`='[value-4]',`descuento`='[value-5]' WHERE 1
		   $sql ="UPDATE `productos` SET `nombre`='$nombre',`precio`= '$precio' ,`descripcion`='$descripcion',`descuento`= '$descuento' WHERE `codproducto`= '$codproducto'";
			$result = $this-> db -> query($sql);
		}
	
		function get_mostrarmodificar($codproducto){
			$sql ="SELECT * FROM productos WHERE codproducto = $codproducto";
			$result = $this->db->query($sql);
			return $result->result();
		}
	}
