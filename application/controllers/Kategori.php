<?php 

class Kategori extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Kategori";
        $this->load->view('template/dashboard/body', $data);
    }
}