<?php

class PesanController extends CI_Controller{

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
        $data['pesan'] = $this->Pesan_model->tampilkan_data();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/pesan', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function detail_pesan($id)
    {
        $data['pesan'] = $this->Pesan_model->getChefById($id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/detail_pesan', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function hapus($id)
    {
        $this->Pesan_model->hapusData($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect(base_url('admin/pesan'));
    }

    
}