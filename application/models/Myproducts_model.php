<?php

class Myproducts_model extends CI_model
{
    public function getAllMyproducts()
    {
        return $this->db->get('products')->result_array();
    }

    public function getMyproductsById($id)
    {
        return $this->db->get_where('products', ['product_id' => $id])->row_array();
    }

    public function cariDataMyproducts()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('price', $keyword);
        $this->db->or_like('description', $keyword);
        return $this->db->get('products')->result_array();
    }

    public function tambahMyProducts()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "price" => $this->input->post('price', true),
            "image" => $this->input->post('image', true),
            "description" => $this->input->post('description', true),
        ];

        $this->db->insert('products', $data);
    }

    public function hapusMyProducts($id)
    {
        $this->db->delete('products', ['product_id' => $id]);
    }

    public function ubahDataProducts()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "price" => $this->input->post('price', true),
            "image" => $this->input->post('image', true),
            "description" => $this->input->post('description', true),
        ];

        $this->db->where('product_id', $this->input->post('id'));
        $this->db->update('products', $data);
    }
}
