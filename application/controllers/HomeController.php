<?php

class HomeController extends CI_Controller
{


    public function index()
    {
        // Ambil nomor meja yang tersedia
        $nomorMejaTersedia = $this->Meja_model->getNomorMejaTersedia();

        // Ambil nomor meja yang tidak tersedia
        $nomorMejaTidakTersedia = $this->Meja_model->getNomorMejaTidakTersedia();

        // Tambahkan data nomor meja ke dalam array $data
        $data['meja_tersedia'] = $nomorMejaTersedia;
        $data['meja_tidak_tersedia'] = $nomorMejaTidakTersedia;
        $user_id = $this->session->userdata('user_id');
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganByUserId($user_id);

        $data['menus'] = $this->Menu->tampilkan_menu()->result();
        $data['chefs'] = $this->Chefs_model->tampilkan_chefs()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar', $data);
        $this->load->view('home', $data);
        $this->load->view('layouts/footer');
    }

    public function reservation()
    {

        if (!$this->session->userdata('user_id')) {
            // Jika pengguna belum login, arahkan ke halaman login
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Anda Harus Login Dahulu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect(base_url('auth/login'));
        }

        $nama = $this->input->post('nama');
        $nomor_meja = $this->input->post('nomor_meja');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('time');
        $jumlah_orang = $this->input->post('people');
        $pesan = $this->input->post('message');



        $data = array(
            'nama' => $nama,
            'nomor_meja' => $nomor_meja,
            'nomor_telepon' => $nomor_telepon,
            'tanggal' => $tanggal,
            'jam' => $waktu,
            'jumlah_orang' => $jumlah_orang,
            'pesan' => $pesan
        );

        $this->Meja_model->updateStatusMeja($nomor_meja);

        $this->Reservation_model->simpanData($data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Reservation Terkirim!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');

        // Tampilkan pesan sukses
        redirect(base_url('pemesanan'));
    }

    public function pesan()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $isi = $this->input->post('isi');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'isi' => $isi
        );

        $this->Pesan_model->simpanData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Pesan Terkirim!
      </div>');
        redirect(base_url('#contact'));
    }
}
