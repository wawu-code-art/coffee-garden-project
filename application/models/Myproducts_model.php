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
            "image" => $_FILES['image']['name'],
            "description" => $this->input->post('description', true),
        ];
        if ($data['image']) {
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '2048';
            $config['upload_path']      = './assets/img/products/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('products', $data);
    }

    public function hapusMyProducts($id)
    {
        $productbyid = $this->db->get_where('products', ['product_id' => $id])->row_array();
        $old_image = $productbyid['image'];
        unlink(FCPATH . 'assets/img/products/' . $old_image);
        $this->db->delete('products', ['product_id' => $id]);
    }

    public function ubahDataProducts()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "price" => $this->input->post('price', true),
            // "image" => $this->upload(),
            "description" => $this->input->post('description', true),
        ];
        if (!$data['image']) {
            return false;
        }

        $this->db->where('product_id', $this->input->post('id'));
        $this->db->update('products', $data);
    }
}
