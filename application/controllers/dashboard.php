<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        $this->load->view('dashboard/include/header_view');
        $this->load->view('dashboard/dashboard_view.php');
        $this->load->view('dashboard/include/footer_view');
    }
    
    public function logout(){
        session_destroy();
        redirect('/');
    }
}

