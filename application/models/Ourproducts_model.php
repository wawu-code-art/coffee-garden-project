<?php

class Ourproducts_model extends CI_model
{
    public function getAllOurproducts()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getOurproductsById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function cariDataOurproducts()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('productname', $keyword);
        $this->db->or_like('price', $keyword);
        $this->db->or_like('description', $keyword);
        return $this->db->get('produk')->result_array();
    }
}
