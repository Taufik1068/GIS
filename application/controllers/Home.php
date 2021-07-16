<?php

class Home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petshop_model');

	}

	public function index()
	{
		$data['judul'] = 'PetShop Di Bandar Lampung';
		$this->load->view('templates/header');
		$this->load->view('Home/index');
		$this->load->view('templates/footer');
		
	}
	public function map2()
		{
			$data['petshop'] = $this->petshop_model->getAllpetshop();
			$this->load->view('Home/index');
			$this->load->view('templates/footer');
			
	}
}
