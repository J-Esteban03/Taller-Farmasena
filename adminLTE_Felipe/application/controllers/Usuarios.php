<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Usuario');
        $this->load->database();
        
	}
    public function index()
	{
		
	}
	public function listado_usu()
	{
        $vdata['usuarios'] = $this->Usuario->findAll();

        $this->load->view('usuarios/listado_usu', $vdata);
	}   
    
	public function guardar_usu($usuario_id = null)
	{
        $vdata["username"] = $vdata["email"] = $vdata["password"] = $vdata["tipo"] = $vdata["estado"] = "";
        if(isset($usuario_id)){
            $usuario = $this->Usuario->find($usuario_id);

            if(isset($usuario)){
                $vdata["username"] = $usuario->username;
                $vdata["email"] = $usuario->email;
                $vdata["password"] = $usuario->password;
                $vdata["tipo"] = $usuario->tipo;
                $vdata["estado"] = $usuario->estado;
                
            }
        }

        
        if($this->input->server("REQUEST_METHOD")== "POST"){

            $data["username"] = $this->input->post("username");
            $data["email"] = $this->input->post("email");
            $data["password"] = $this->input->post("password");
            $data["tipo"] = $this->input->post("tipo");
            $data["estado"] = $this->input->post("estado");
    
            
            $vdata["username"] = $this->input->post("username");
            $vdata["email"] = $this->input->post("email");
            $vdata["tipo"] = $this->input->post("tipo");
            $vdata["estado"] = $this->input->post("estado");

    
            if(isset($usuario_id)){
                $this->Usuario->update($usuario_id, $data);
            }else{
                $this->Usuario->insert($data);
            }

        }
        $this->load->view('usuarios/guardar_usu', $vdata);	     
	}

    public function ver_usu($usuario_id = null)
	{
        $usuario = $this->Usuario->find($usuario_id);
        if(isset($usuario)){
            $vdata["username"] = $usuario->username;
            $vdata["email"] = $usuario->email;
            $vdata["tipo"] = $usuario->tipo;
            $vdata["estado"] = $usuario->estado;
        }else{
            $vdata['username'] = $vdata['email'] = $vdata['tipo'] = $vdata['estado'] = "";
        }
        
        $this->load->view('usuarios/ver_usu', $vdata);	
	}

    public function borrar_usu($usuario_id = null)
    {
        $this->Usuario->delete($usuario_id);
        redirect("/usuarios/listado_usu");
    }

    public function mostrar_dashboard(){
        // Obtén los datos del usuario actual
        $usuario_id = $this->session->userdata('usuario_id');
        $usuario = $this->Usuario->find($usuario_id);

        // Pasa los datos del usuario a la vista
        $data['usuario'] = $usuario;

        // Cargar la vista con los datos del usuario
        $this->load->view('Dashboard/plantilla', $data);
    }

    public function buscar_por_username()
    {
        $buscar = $this->input->post('buscar');

        if ($buscar) {
            $vdata['usuarios'] = $this->Usuario->buscar_por_username($buscar);
        } else {
            $vdata['usuarios'] = $this->Usuario->findAll();
        }

        $this->load->view('usuarios/listado_usu', $vdata);
    }



}

