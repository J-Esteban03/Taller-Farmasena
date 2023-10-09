<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Producto');
        $this->load->database();
        
	}
    public function index()
	{
		
	}

	public function listado_pro()
    {
        $this->load->library('pagination');
        
        // Configura el paginador
        $config['base_url'] = base_url('productos/listado_pro');
        $config['total_rows'] = $this->Producto->countAll(); // Total de productos en tu tabla
        $config['per_page'] = 10; // Número de productos por página
        $config['uri_segment'] = 3; // Segmento de URI que contiene el número de página
        
        $this->pagination->initialize($config);
        
        // Obtiene el número de página actual del segmento de URI
        $page = $this->uri->segment(3, 0);
        
        // Obtiene los productos paginados
        $vdata['productos'] = $this->Producto->getPaginatedProducts($config['per_page'], $page);
        
        $this->load->view('productos/listado_pro', $vdata);
    }


  

    public function listado_vendedor()
	{
        $vdata['productos'] = $this->Producto->findAll();

        $this->load->view('productos/listado_vendedor', $vdata);
	}  

    
	public function guardar_pro($producto_id = null)
	{
        $vdata["serial"] = $vdata["nombre"] = $vdata["descripcion"] = $vdata["valor"] = $vdata["cantidad"] = "";
        if(isset($producto_id)){
            $producto = $this->Producto->find($producto_id);

            if(isset($producto)){
                $vdata["serial"] = $producto->serial;
                $vdata["nombre"] = $producto->nombre;
                $vdata["descripcion"] = $producto->descripcion;
                $vdata["valor"] = $producto->valor;
                $vdata["cantidad"] = $producto->cantidad;
            }
        }

        
        if($this->input->server("REQUEST_METHOD")== "POST"){

            $data["serial"] = $this->input->post("serial");
            $data["nombre"] = $this->input->post("nombre");
            $data["descripcion"] = $this->input->post("descripcion");
            $data["valor"] = $this->input->post("valor");
            $data["cantidad"] = $this->input->post("cantidad");
    
            
            $vdata["serial"] = $this->input->post("serial");
            $vdata["nombre"] = $this->input->post("nombre");
            $vdata["descripcion"] = $this->input->post("descripcion");
            $vdata["valor"] = $this->input->post("valor");
            $vdata["cantidad"] = $this->input->post("cantidad");

    
            if(isset($producto_id)){
                $this->Producto->update($producto_id, $data);
            }else{
                $this->Producto->insert($data);
            }

        }
        $this->load->view('productos/guardar_pro', $vdata);	     
	}

    public function ver_pro($producto_id = null)
	{
        $producto = $this->Producto->find($producto_id);
        if(isset($producto)){
            $vdata["serial"] = $producto->serial;
            $vdata["nombre"] = $producto->nombre;
            $vdata["descripcion"] = $producto->descripcion;
            $vdata["valor"] = $producto->valor;
            $vdata["cantidad"] = $producto->cantidad;
        }else{
            $vdata['serial'] = $vdata['nombre'] = $vdata['descripcion'] = $vdata['valor'] = $vdata['cantidad'] = "";
        }
        
        $this->load->view('productos/ver_pro', $vdata);
        	
	}

    public function borrar_pro($producto_id = null)
    {
        $this->Producto->delete($producto_id);
        redirect("/productos/listado_pro");
    }

    public function comprar($producto_id) {
        // Obtener la cantidad deseada desde el formulario
        $cantidad_comprada = $this->input->post('cantidad_deseada');
        
        // Obtener el producto
        $producto = $this->Producto->find($producto_id);
        
        if (!$producto) {
            // Manejar el caso en que no se encuentra el producto
            show_404();
        }
    
        // Verificar si la cantidad deseada es válida
        if ($cantidad_comprada <= 0) {
            // Mostrar un mensaje de error si la cantidad es inválida
            echo "La cantidad deseada es inválida.";
            return;
        }
        
        // Calcular el costo total de la compra
        $total = $cantidad_comprada * $producto->valor;
    
        // Obtener la cantidad de dinero ingresada desde el formulario
        $dinero = $this->input->post('dinero');
    
        if ($dinero >= $total) {
            // Calcular el cambio
            $cambio = $dinero - $total;
    
            // Realizar la compra: restar la cantidad comprada de la disponibilidad
            $nueva_cantidad = $producto->cantidad - $cantidad_comprada;
    
            // Actualizar la cantidad disponible en el modelo
            $this->Producto->actualizarCantidad($producto_id, $nueva_cantidad);
    
            // Guardar información de la compra en la base de datos si es necesario
            // ...
    
            // Pasar un mensaje de confirmación a la vista "comprar.php" junto con el cambio
            $mensaje_confirmacion = "¡Compra exitosa! Gracias por su compra.";
            $this->load->view('productos/comprar', ['producto' => $producto, 'cantidad_comprada' => $cantidad_comprada, 'total' => $total, 'cambio' => $cambio, 'mensaje_confirmacion' => $mensaje_confirmacion]);
        } else {
            // Mostrar un mensaje de error si el dinero ingresado no es suficiente
            echo "El dinero ingresado no es suficiente para realizar la compra.";
        }
    }
    
    
    
}

