<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoM extends CI_Model {

	public function get_alumno(){
		$pa_consultar="CALL pa_consultar()";
		$query=$this->db->query($pa_consultar);
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function eliminar($id){
		$pa_eliminar="CALL pa_eliminar(?)";
		$arreglo= array("id_alumno" => $id);
		$query=$this->db->query($pa_eliminar, $arreglo);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_sexo(){
		$exe=$this->db->get("sexo");
		return $exe->result();
	}

	public function get_carrera(){
		$exe=$this->db->get("carrera");
		return $exe->result();
	}


	public function get_ciudad(){
		$exe=$this->db->get("ciudad");
		return $exe->result();
	}

	public function set_alumno($datos){
		$pa_insertar="CALL pa_insertar(?,?,?,?,?,?)";
		$arreglo=array("nombre" =>$datos["nombre"],
			"apellido" =>$datos["apellido"],
			"edad" =>$datos["edad"],
			"id_sexo" =>$datos["sexo"],
			"id_carrera" =>$datos["carrera"],
			"id_ciudad" =>$datos["ciudad"]);
		$query=$this->db->query($pa_insertar, $arreglo);
		if($query!==null){
			return "add";
		}else{
			return false;
		}
	}

	public function get_datos($id){
		$pa_consultarporid="CALL pa_consultarporid(?)";
		$arreglo = array("id_alumno" => $id);
		$query=$this->db->query($pa_consultarporid, $arreglo);
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}
	}

		public function actualizar($datos){
		$pa_actualizar="CALL pa_actualizar(?,?,?,?,?,?,?)";
		$arreglo=array("id_alumno" =>$datos["id_alumno"],
			"nombre" =>$datos["nombre"],
			"apellido" =>$datos["apellido"],
			"edad" =>$datos["edad"],
			"id_sexo" =>$datos["sexo"],
			"id_carrera" =>$datos["carrera"],
			"id_ciudad" =>$datos["ciudad"]);
		$query=$this->db->query($pa_actualizar, $arreglo);
		if($query){
			return "edi";
		}else{
			return false;
		}
	}



}