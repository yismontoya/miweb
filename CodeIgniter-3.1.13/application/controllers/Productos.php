<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
    }

    public function index() {
        $data['productos'] = $this->Producto_model->obtener_productos();
        $this->load->view('productos/index', $data);
    }

    public function crear() {
        $this->load->view('productos/crear');
    }

    public function guardar() {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        ];
        $this->Producto_model->insertar_producto($data);
        redirect('productos');
    }

    public function editar($id) {
        $data['producto'] = $this->Producto_model->obtener_producto($id);
        $this->load->view('productos/editar', $data);
    }

    public function actualizar($id) {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        ];
        $this->Producto_model->actualizar_producto($id, $data);
        redirect('productos');
    }

    public function eliminar($id) {
        $this->Producto_model->eliminar_producto($id);
        redirect('productos');
    }
}
