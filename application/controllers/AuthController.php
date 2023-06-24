<?php

class AuthController extends CI_Controller{
    public function login()
    {

        $this->form_validation->set_rules('username','Username','required', ['required' => 'Username Wajib diisi']);
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('form_login');
  
        }else{
            $auth = $this->Auth->cek_login();
            if($auth == FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau password Salah!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');

              redirect(base_url('auth/login'));
            }else{
                $this->session->set_userdata('user_id', $auth->id_user);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/dashboard');
                            break;
                    case 2 : redirect(base_url());
                    default:break;
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    public function getPelangganData() {
        $user_id = $this->session->userdata('user_id');
        $pelangganData = $this->PelangganModel->getPelangganByUserId($user_id);
        
        return $pelangganData;
    }
    
}