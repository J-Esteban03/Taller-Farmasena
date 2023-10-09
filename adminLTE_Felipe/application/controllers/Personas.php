<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Persona');
        $this->load->database();
        
	}
    public function index()
	{
		
	}
	public function listado_per()
	{
        $vdata['personas'] = $this->Persona->findAll();

        $this->load->view('personas/listado_per', $vdata);
	}   
    
	public function guardar_per($persona_id = null)
	{
        $vdata["documento"] = $vdata["nombre"] = $vdata["apellido"] = $vdata["correo"] = $vdata["direccion"] = $vdata["perfil"] = $vdata["usuario"] = $vdata["password"] = $vdata["genero"]  = $vdata["año_grado"]  = "";
        if(isset($persona_id)){
            $persona = $this->Persona->find($persona_id);

            if(isset($persona)){
                $vdata["documento"] = $persona->documento;
                $vdata["nombre"] = $persona->nombre;
                $vdata["apellido"] = $persona->apellido;
                $vdata["correo"] = $persona->correo;
                $vdata["direccion"] = $persona->direccion;
                $vdata["perfil"] = $persona->perfil;
                $vdata["usuario"] = $persona->usuario;
                $vdata["password"] = $persona->password;
                $vdata["genero"] = $persona->genero;
                $vdata["año_grado"] = $persona->año_grado;
            }
        }

        
        if($this->input->server("REQUEST_METHOD")== "POST"){

            $data["documento"] = $this->input->post("documento");
            $data["nombre"] = $this->input->post("nombre");
            $data["apellido"] = $this->input->post("apellido");
            $data["correo"] = $this->input->post("correo");
            $data["direccion"] = $this->input->post("direccion");
            $data["genero"] = $this->input->post("genero");
            $data["habilidades"] = $this->input->post("habilidades");
            $data["perfil"] = $this->input->post("perfil");
            $data["usuario"] = $this->input->post("usuario");
            $data["password"] = $this->input->post("password");
            $data["año_grado"] = $this->input->post("año_grado");
    
            
            $vdata["documento"] = $this->input->post("documento");
            $vdata["nombre"] = $this->input->post("nombre");
            $vdata["apellido"] = $this->input->post("apellido");
            $vdata["correo"] = $this->input->post("correo");
            $vdata["direccion"] = $this->input->post("direccion");
            $vdata["perfil"] = $this->input->post("perfil");
            $vdata["usuario"] = $this->input->post("usuario");
            $vdata["genero"] = $this->input->post("genero");
            $vdata["password"] = $this->input->post("password");
            $vdata["año_grado"] = $this->input->post("año_grado");

    
            if(isset($persona_id)){
                $this->Persona->update($persona_id, $data);
            }else{
                $this->Persona->insert($data);
            }

        }
        $this->load->view('personas/guardar_per', $vdata);	     
	}

    public function ver_per($persona_id = null)
	{
        $persona = $this->Persona->find($persona_id);
        if(isset($persona)){
            $vdata["documento"] = $persona->documento;
            $vdata["nombre"] = $persona->nombre;
            $vdata["apellido"] = $persona->apellido;
            $vdata["correo"] = $persona->correo;
            $vdata["direccion"] = $persona->direccion;
            $vdata["genero"] = $persona->genero;
            $vdata["perfil"] = $persona->perfil;
            $vdata["usuario"] = $persona->usuario;
            $vdata["año_grado"] = $persona->año_grado;
        }else{
            $vdata['documento'] = $vdata['nombre'] = $vdata['apellido'] = $vdata['correo'] = $vdata['direccion'] =  $vdata['perfil'] = $vdata['genero'] = "";
        }
        
        $this->load->view('personas/ver_per', $vdata);	
	}

    public function borrar_per($persona_id = null)
    {
        $this->Persona->delete($persona_id);
        redirect("/personas/listado_per");
    }
}

