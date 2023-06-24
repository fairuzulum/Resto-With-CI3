<?php


class MejaController extends CI_Controller
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
        $data['tables'] = $this->Meja_model->tampilkan_meja()->result();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/bar');
        $this->load->view('admin/data_meja', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function tambah()
    {

        $nomor_meja = $this->input->post('nomor_meja');
        $status = $this->input->post('status');

        // Cek nomor meja sudah ada atau belum
        $nomor_meja_ada = $this->Meja_model->cekNomorMeja($nomor_meja);
        if ($nomor_meja_ada) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Nomor meja sudah ada. Silakan pilih nomor meja lain.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('admin/data_meja');
        }
        $data = array(
            'nomor_meja' => $nomor_meja,
            'status' => $status
        );
        $this->Meja_model->tambah_meja($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Meja Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_meja');
    }

    public function hapus($id)
    {
        $this->Meja_model->hapus_meja($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Meja Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('admin/data_meja');
    }

    public function edit($id)
    {
        $data['meja'] = $this->Meja_model->get_meja_by_id($id);
        $this->load->view('mejacontroller/edit', $data);
    }

    public function update($id)
    {
        $nomor_meja = $this->input->post('nomor_meja');
        $status = $this->input->post('status');

        $meja_sebelumnya = $this->Meja_model->get_meja_by_id($id);
        if ($nomor_meja != $meja_sebelumnya->nomor_meja) {
            $nomor_meja_ada = $this->Meja_model->cekNomorMeja($nomor_meja);
            if ($nomor_meja_ada) {
                // Tampilkan pesan error dan kembali ke halaman yang sesuai
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Nomor meja sudah ada. Silakan pilih nomor meja lain.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/data_meja');
            }
        }
        

        $data = array(
            'nomor_meja' => $nomor_meja,
            'status' => $status,
        );

        $this->Meja_model->update_meja($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Meja Berhasil Diedit!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect(base_url('admin/data_meja'));
    }
}
