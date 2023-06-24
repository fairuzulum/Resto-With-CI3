<?php

class PemesananController extends CI_Controller{

    public function __construct()
    {
     parent::__construct();
     if($this->session->userdata('role_id') != '2'){
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
              redirect(base_url('auth/login')); 
     }   
    }

    public function index(){

        $data['menus'] = $this->Menu->tampilkan_menu()->result();
        $this->load->view('layouts/header2');
        $this->load->view('layouts/navbar');
        $this->load->view('pemesanan', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah_ke_keranjang($id){
        $menu = $this->Menu->find($id);

        $data = array(
            'id'      => $menu->id_menu,
            'qty'     => 1,
            'price'   => $menu->harga,
            'name'    => $menu->nama_menu
    );
    
    $this->cart->insert($data);
    redirect(base_url('pemesanan'));
    }

    public function detail_keranjang(){
        $data['cart'] = $this->cart->contents(); // Mengambil data keranjang
    
        $this->load->view('layouts/header3');
        $this->load->view('layouts/navbar');
        $this->load->view('keranjang', $data); // Mengirim data keranjang ke view
        $this->load->view('layouts/footer');
    }
    

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect(base_url('pemesanan/keranjang'));
    }

    public function pembayaran(){
        $user_id = $this->session->userdata('user_id');
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganByUserId($user_id);
    
        $this->load->view('layouts/header4');
        $this->load->view('layouts/navbar');
        $this->load->view('pembayaran',$data);
        $this->load->view('layouts/footer');
    }

    public function proses_pesanan(){

        $nomor_pesanan = $this->Invoice->generate_nomor_pesanan();

        // Menyimpan nomor pesanan di session
        $this->session->set_userdata('nomor_pesanan', $nomor_pesanan);
    
        // Melanjutkan proses pembayaran
        $is_processed = $this->Invoice->index();

        
        if($is_processed){
            $data['nomor_pesanan'] = $nomor_pesanan; // Menyimpan nomor pesanan dalam variabel $data
    
            $this->cart->destroy();
            $this->load->view('layouts/header5');
            $this->load->view('layouts/navbar');
            $this->load->view('proses_pesanan', $data); // Mengirim data nomor pesanan ke view proses_pesanan
            $this->load->view('layouts/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal diproses";
        }
    }



    public function ubah_keranjang()
    {
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');
    
        // Validasi input kuantitas
        if ($qty <= 0) {
            // Jika kuantitas <= 0, hapus item dari keranjang
            $this->cart->remove($rowid);
        } else {
            // Jika kuantitas > 0, update kuantitas item di keranjang
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
    
        redirect(base_url('pemesanan/keranjang'));
    }
    

    public function hapus_item_keranjang($rowid)
    {
        $this->cart->remove($rowid); // Menghapus item dari keranjang
        redirect(base_url('pemesanan/keranjang'));
    }
    



}