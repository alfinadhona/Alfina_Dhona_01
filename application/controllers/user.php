<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function index()
    {
        $this->load->view('v_home');
    }
    
    public function inputUser()
    {
        $this->load->model('cafe_model');
        $nama_pelanggan = $this->input->post('name');
        $id_meja = $this->input->post('id_meja');
        // $person = $this->input->post('person');
        $datetime = $this->input->post('datetime');

        $data = array (

            'nama_pelanggan'=> $nama_pelanggan,
            'id_meja' => $id_meja,
            // 'person' => $person,
            'datetime' => '2019-01-11 12:00:00',
            
        );

        $this->cafe_model->tambah_data($data);

        $this->session->set_flashdata('sukses', 'ditambahkan');

        redirect('user/index');
        
        
    }

}

/* End of file user.php */


?>