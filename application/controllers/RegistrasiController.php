<?php


class registrasicontroller extends CI_Controller
{

    public function index()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib diisi!'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required', [
            'required' => 'gender Wajib diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib diisi!'
        ]);
        $this->form_validation->set_rules('nomor_telepon', 'no_telepon', 'required', [
            'required' => 'Nomor Telepon Wajib diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Wajib diisi'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required', [
            'reuired' => 'Password wajib diisi'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', [
            'required' => 'Password tidak sama'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registrasi');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 2,
            );
            $user_id = $this->User_model->simpan_user($data);

            if ($user_id) {
                $data_pelanggan = array(
                    'id_user' => $user_id,
                    'nama' => $this->input->post('nama'),
                    'gender' => $this->input->post('gender'),
                    'alamat' => $this->input->post('alamat'),
                    'email' => $this->input->post('email'),
                    'nomor_telepon' => $this->input->post('nomor_telepon')
                );
                $this->Pelanggan_model->simpan_pelanggan($data_pelanggan);
            }



            redirect('auth/login');
        }
    }
}
