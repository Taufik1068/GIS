<?php

class Lokasi_Model extends CI_Model
{
    public function getloc()
    {
        return $this->db->get('petshop')->result_array();
    }

    public function tambahdatapetshop()
    {
        $data = [

            "petshop" => $this->input->post('petshop', true),
            "koordinat" => $this->input->post('koordinat', true),


        ];

        $this->db->insert('petshop', $data);
    }

    public function hapusDatapetshop($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('petshop');
    }

    public function getpetshopById($id)
    {
        return $this->db->get_where('petshop', ['id' => $id])->row_array();
    }


    public function ubahpetshop()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "petshop" => $this->input->post('petshop', true),
            "koordinat" => $this->input->post('koordinat', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('petshop', $data);
    }

    public function cariDatapetshop()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('petshop', $keyword);
        return $this->db->get('petshop')->result_array();
    }
}