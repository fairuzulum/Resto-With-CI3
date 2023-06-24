<?php

class MenuController extends CI_Controller
{

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

    public function index()
    {

        $data['menus'] = $this->Menu->tampilkan_menu()->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/data_menu', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function detail_menu($id)
    {
        $data['menus'] = $this->Menu->getChefById($id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/detail_menu', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function tambah()
    {

        $nm_menu = $this->input->post('nm_menu');
        $keterangan = $this->input->post('keterangan');
        $category = $this->input->post('category');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];


        if ($gambar == "") {
        } else {
            // Konfigurasi unggah file gambar
            $config['upload_path'] = './uploads/'; // Direktori penyimpanan gambar
            $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diperbolehkan

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_menu' => $nm_menu,
            'keterangan' => $keterangan,
            'category' => $category,
            'harga' => $harga,
            'status' => $stok,
            'gambar' => $gambar
        );
        $this->Menu->tambah_menu($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil ditambah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_menu');
    }

    public function edit($id)
    {
        $where = array('id_menu' => $id);
        $data['menus'] = $this->Menu->edit_menu($where, 'tb_menu')->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/edit_menu', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update()
    {

        $id = $this->input->post('id_menu');
        $nm_menu = $this->input->post('nm_menu');
        $keterangan = $this->input->post('keterangan');
        $category = $this->input->post('category');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $this->input->post('gambar');


         // Mendapatkan informasi gambar yang diupload
         $gambar = $_FILES['gambar']['name'];

         // Jika tidak ada perubahan pada gambar, tetap gunakan gambar lama
         if ($gambar == "") {
             $gambar = $this->input->post('gambar');
         } else {
             // Menghapus gambar lama (optional)
             $where = array('id_menu' => $id);
             $menu = $this->Menu->find($id);
             $old_image = $menu->gambar;
             if ($old_image != "") {
                 $file_path = './uploads/' . $old_image;
                 if (file_exists($file_path)) {
                     unlink($file_path);
                 }
             }
 
             // Konfigurasi unggah file gambar
             $config['upload_path'] = './uploads/'; // Direktori penyimpanan gambar
             $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diperbolehkan
 
             $this->load->library('upload', $config);
             if (!$this->upload->do_upload('gambar')) {
                 echo "Gambar Gagal Diupload!";
             } else {
                 // Mendapatkan nama gambar yang diupload
                 $gambar = $this->upload->data('file_name');
             }
         }
 
 

        $data = array(
            'nama_menu' => $nm_menu,
            'keterangan' => $keterangan,
            'category' => $category,
            'harga' => $harga,
            'status' => $stok,
            'gambar' => $gambar

        );

        $where = array(
            'id_menu' => $id
        );

        $this->Menu->update_data($where, $data, 'tb_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diupdate!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_menu');
    }

    public function hapus($id){
        $where = array('id_menu' => $id);
        $this->Menu->hapus_data($where, 'tb_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_menu');
    }
}
