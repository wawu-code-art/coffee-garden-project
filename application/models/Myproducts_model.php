<?php

class Myproducts_model extends CI_model
{
    public function getAllMyproducts()
    {
        return $this->db->get('products')->result_array();
    }

    public function getMyproductsById($id)
    {
        return $this->db->get_where('products', ['id_product' => $id])->row_array();
    }

    public function cariDataMyproducts()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('price', $keyword);
        $this->db->or_like('description', $keyword);
        return $this->db->get('products')->result_array();
    }
}
