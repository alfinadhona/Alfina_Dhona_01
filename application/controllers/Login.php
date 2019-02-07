<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->model('Login_model');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            
            $data['title'] = 'Login';
            $this->load->view('login/index_view', $data);
            
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            
            $where = array('username' => $username,'password' => $password );
    
            $cek = $this->Login_model->cek_login($where);
    
            if ($cek > 0) 
            {
                $data_session = array(
                    'status' => 'logged in' //disimpan di array, dibuat kalau nilai ceknya lebih dari 0
                );
                
                $this->session->set_userdata($data_session);
                
                redirect('cafe/index');
            
            } 
            else 
            {
                
                $this->session->set_flashdata('pesan', 'Username atau password salah');
                
                redirect('Login/index');
    
            }
            
        }
        
    }

    public function logout()
    {
        
        $this->session->sess_destroy();
        
        redirect('Login/index');
    }

}

/* End of file Login.php */


?>