<?php
class petshop extends CI_Controller {
    public function __construct()
{

    parent::__construct();
    $this->load->model('petshop_model');	


}
    public function index()
    {
        $data['petshop'] = $this->petshop_model->getAllpetshop();
        $data['judul'] = 'PetShop Di Bandar Lampung';
        $this->load->view('templates/header', $data);
        $this->load->view('petshop/index', $data);
    }
    public function tambah()
    {
        $data['petshop'] = $this->petshop_model->getAllpetshop();
        $data['judul'] = 'Tambah Data ';
        $this->load->view('templates/header', $data);
        $this->load->view('petshop/tambah');
    }
    public function proses_tambah_data()
    {
        $this->petshop_model->proses_tambah_data();
        redirect('petshop');
    }
    public function hapus_data($id)
    {
        $this->petshop_model->hapus_data($id);
        redirect('petshop');
    }
}