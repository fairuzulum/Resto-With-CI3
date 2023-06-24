<?php

class InvoiceController extends CI_Controller{

    public function __construct()
    {
     parent::__construct();
     if($this->session->userdata('role_id') != '1'){
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Anda Belum Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
              redirect(base_url('auth/login')); 
     }   
    }

    public function index(){
        $data['invoice'] = $this->Invoice->tampilkan_data();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->Invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('admin/layouts/footer');
    }
}