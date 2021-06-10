<?php

class Admin_model extends CI_model
{
    public function getAllProducts()
    {
        return $this->db->get('produk')->result_array();
    }

    public function tambahDataProducts()
    {
        $data = [
            "productname" => $this->input->post('itemcode', true),
            "price" => $this->input->post('size', true),
            "image" => $this->input->post('pattern', true),
            "description" => $this->input->post('serialweek', true),
        ];

        $this->db->insert('produk', $data);
    }

    public function hapusDataProducts($id)
    {
        $this->db->delete('produk', ['id' => $id]);
    }

    public function getProductsById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function ubahDataProducts()
    {
        $data = [
            "productname" => $this->input->post('itemcode', true),
            "price" => $this->input->post('size', true),
            "image" => $this->input->post('pattern', true),
            "description" => $this->input->post('serialweek', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('produk', $data);
    }

    public function cariDataProducts()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('productname', $keyword);
        $this->db->or_like('price', $keyword);
        $this->db->or_like('image', $keyword);
        $this->db->or_like('description', $keyword);
        return $this->db->get('produk')->result_array();
    }
}
