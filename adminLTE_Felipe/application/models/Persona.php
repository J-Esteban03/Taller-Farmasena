<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Model {
    public $table = 'personas';
    public $table_id = 'persona_id';


    public function __construct(){
        $this->load->database();
		// parent::__construct();
	
	}

    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // Funcion para  traer toda la consulta o datos de personas
    function findAll(){
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    //Fumcion para traer los datos de una sola persona; por medio del id
    function find($id){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();
    }

    function update($id, $data){
        $this->db->where($this->table_id,$id);
        $this->db->update($this->table,$data);
    }
    
    function delete($id){
        $this->db->where($this->table_id,$id);
        $this->db->delete($this->table);
    }

}
