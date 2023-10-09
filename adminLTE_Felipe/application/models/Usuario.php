<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Usuario extends CI_Model{
	
	public $table = 'usuarios';
    public $table_id = 'usuario_id';

    public function __construct(){
        $this->load->database();
    }

    

    function find($id){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();
    }

    function findAll(){
        $this->db->select();
        $this->db->from($this->table);
       
        $query = $this->db->get();
        return $query->result();
    }

    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();

    }

    function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
       

    }

    function delete($id){
        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
        

    }

    public function validarIngreso($email, $password){
		$this->db->select('email, tipo');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('estado', 'ACTIVO');
		$registros = $this->db->get('usuarios')->result();

		if (sizeof($registros)==0) {
			return false;
		}else{
			return true;
		}
	}

	public function getUsuarioByEmail($email){
		$this->db->select("tipo, estado");
		$this->db->where('email', $email);
		$registros = $this->db->get('usuarios')->result();

		if (sizeof($registros)!=0) {
			return $registros[0];
		}else{
			return null;
		}
	}

    public function buscar_por_username($buscar)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->like('username', $buscar); // Búsqueda por Username
        $query = $this->db->get();
        return $query->result();
    }
    
}
