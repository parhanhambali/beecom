<?php 

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

      //  $this->load->helpers(['menuAktif']);
    } 

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('template/dashboard/body', $data);
    }
}