<?php

class ChefsController extends CI_Controller
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

        $data['chefs'] = $this->Chefs_model->tampilkan_chefs()->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/data_chefs', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function detail_chefs($id)
    {
        $data['chefs'] = $this->Chefs_model->getChefById($id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/detail_chefs', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function tambah()
    {

        $nama = $this->input->post('nama');
        $profesi = $this->input->post('profesi');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $instagram = $this->input->post('instagram');
        $linkedin = $this->input->post('linkedin');
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
            'nama' => $nama,
            'profesi' => $profesi,
            'gender' => $gender,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'linkedin' => $linkedin,
            'gambar' => $gambar
        );
        $this->Chefs_model->tambah_chefs($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_chefs');
    }

    public function edit($id)
    {
        $where = array('id_chefs' => $id);
        $data['chefs'] = $this->Chefs_model->edit_chefs($where, 'tb_chefs')->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/edit_chefs', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_chefs');
        $nama = $this->input->post('nama');
        $profesi = $this->input->post('profesi');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $instagram = $this->input->post('instagram');
        $linkedin = $this->input->post('linkedin');
        $gambar = $this->input->post('gambar');

        // Mendapatkan informasi gambar yang diupload
        $gambar = $_FILES['gambar']['name'];

        // Jika tidak ada perubahan pada gambar, tetap gunakan gambar lama
        if ($gambar == "") {
            $gambar = $this->input->post('gambar');
        } else {
            // Menghapus gambar lama (optional)
            $where = array('id_chefs' => $id);
            $chefs = $this->Chefs_model->find($id);
            $old_image = $chefs->gambar;
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
            'nama' => $nama,
            'profesi' => $profesi,
            'gender' => $gender,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'linkedin' => $linkedin,
            'gambar' => $gambar
        );

        $where = array(
            'id_chefs' => $id
        );

        $this->Chefs_model->update_chefs($where, $data, 'tb_chefs');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diupdate!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_chefs');
    }

    public function hapus($id)
    {
        $where = array('id_chefs' => $id);
        $this->Chefs_model->hapus_data($where, 'tb_chefs');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_chefs');
    }
}
