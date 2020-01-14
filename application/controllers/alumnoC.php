<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoC extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("alumnoM");
	}

	public function index(){
		$datos=array("title" =>"ALUMNO AJAX || AVANZADO");
		$this->load->view("template/header", $datos);
		$this->load->view("alumnoV");
		$this->load->view("template/footer");
	}

	public function get_alumno(){
		$respuesta=$this->alumnoM->get_alumno();
		echo json_encode($respuesta);
	}

	public function eliminar(){
		$id=$this->input->post("id");
		$respuesta=$this->alumnoM->eliminar($id);
		echo json_encode($respuesta);
	}

	public function get_sexo(){
		$respuesta=$this->alumnoM->get_sexo();
		echo json_encode($respuesta);
	}


	public function get_carrera(){
		$respuesta=$this->alumnoM->get_carrera();
		echo json_encode($respuesta);
	}

	public function get_ciudad(){
		$respuesta=$this->alumnoM->get_ciudad();
		echo json_encode($respuesta);
	}

	public function get_datos(){
		$id=$this->input->post("id");
		$respuesta=$this->alumnoM->get_datos($id);
		echo json_encode($respuesta);
	}

	public function ingresar(){
		$datos["nombre"] =$this->input->post("nombre");
		$datos["apellido"] =$this->input->post("apellido");
		$datos["edad"] =$this->input->post("edad");
		$datos["sexo"] =$this->input->post("sexo");
		$datos["carrera"] =$this->input->post("carrera");
		$datos["ciudad"] =$this->input->post("ciudad");
		$respuesta=$this->alumnoM->set_alumno($datos);
		echo json_encode($respuesta);
	}



	public function actualizar(){
		$datos["id_alumno"] =$this->input->post("id_alumno");
		$datos["nombre"] =$this->input->post("nombre");
		$datos["apellido"] =$this->input->post("apellido");
		$datos["edad"] =$this->input->post("edad");
		$datos["sexo"] =$this->input->post("sexo");
		$datos["carrera"] =$this->input->post("carrera");
		$datos["ciudad"] =$this->input->post("ciudad");
		$respuesta=$this->alumnoM->actualizar($datos);
		echo json_encode($respuesta);
	}






}