<?php

class Karyawan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Karyawan";

        $this->load->view('template/dashboard/body', $data);
    }
}