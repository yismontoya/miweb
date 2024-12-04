<?php
class Producto_model extends CI_Model {

    public function obtener_productos() {
        return $this->db->get('productos')->result();
    }

    public function insertar_producto($data) {
        return $this->db->insert('productos', $data);
    }

    public function obtener_producto($id) {
        return $this->db->get_where('productos', ['id' => $id])->row();
    }

    public function actualizar_producto($id, $data) {
        return $this->db->where('id', $id)->update('productos', $data);
    }

    public function eliminar_producto($id) {
        return $this->db->where('id', $id)->delete('productos');
    }
}
