<?php

class dashboardcontroller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Anda Belum Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
            redirect(base_url('auth/login'));
        }
    }



    public function index()
    {

        $this->load->model('DataModel');
        $data['jumlah_menu'] = $this->DataModel->getJumlahMenu();
        $data['pendapatan_masuk'] = $this->DataModel->getPendapatanMasuk();
        $data['transaksi_masuk'] = $this->DataModel->getTransaksiMasuk();
        $data['data_pelanggan'] = $this->DataModel->getDataPelanggan();



        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/layouts/footer');
    }
}
