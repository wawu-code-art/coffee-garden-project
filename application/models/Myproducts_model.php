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
            "image" => $this->upload(),
            "description" => $this->input->post('description', true),
        ];
        if (!$data['image']) {
            return false;
        }

        $this->db->insert('products', $data);
    }

    public function upload()
    {
        $namaFile = $_FILES['image']['name'];
        $ukuranFile = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpName = $_FILES['image']['tmp_name'];

        // cek apakah ada gambar yang di upload
        if ($error === 4) {
            echo "<script> alert ('please select file!') </script>";
            return false;
        }

        // cek apakah gambar yang di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script> alert ('please select jpg, jpeg, or png file!') </script>";
            return false;
        }

        // cek jika ukuran file terlalu besar
        if ($ukuranFile == 1000000) {
            echo "<script> alert ('file size maximum 1mb!') </script>";
            return false;
        }

        // lolos pengecekan, gambar siap di upload
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, 'base_url()/assets/img/' . $namaFileBaru);
        return $namaFileBaru;
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
            "image" => $this->upload(),
            "description" => $this->input->post('description', true),
        ];
        if (!$data['image']) {
            return false;
        }

        $this->db->where('product_id', $this->input->post('id'));
        $this->db->update('products', $data);
    }
}
