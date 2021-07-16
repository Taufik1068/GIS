<?php
class petshop_model extends CI_model {
    public function getAllpetshop()
    {
        return $query = $this->db->get('petshop')->result_array();

    }
    public function proses_tambah_data()
    {
        $data =[
            "petshop" => $this->input->post('petshop'),
            "koordinat" => $this->input->post('koordinat'),
            
        ];

        $this->db->insert('petshop', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('petshop');
    }
   
}