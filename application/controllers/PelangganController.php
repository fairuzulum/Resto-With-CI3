<?php

class PelangganController extends CI_Controller{

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

        $data['pelanggan'] = $this->Pelanggan_model->tampilkan_data()->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/data_pelanggan', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function edit($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_by_id($id);
        $this->load->view('pelanggancontroller/edit', $data);
    }

    public function update($id)
    {
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nomor_telepon = $this->input->post('nomor_telepon');
        

        $data = array(
            'nama' => $nama,
            'gender' => $gender,
            'alamat' => $alamat,
            'email' => $email,
            'nomor_telepon' => $nomor_telepon
        );

        $this->Pelanggan_model->update_pelanggan($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pelanggan Berhasil Diedit!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect(base_url('admin/data_pelanggan'));
    }

    public function hapus($id)
    {
        $this->Pelanggan_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pelanggan Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_pelanggan');
    }
}