<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cafe extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('cafe_model');

        if($this->session->userdata('status') != 'logged in' )
        {
            
            redirect('Login/index');

        }
        
    }

    public function index()
    {
        $data['title'] = 'Index';

        if ($this->input->get('keyword')) 
        {
            $keyword = $this->input->get('keyword');
        }
        else {
            $data['pelanggan'] = $this->cafe_model->getPelanggan();
        }

        $this->load->view('admin_view', $data);
        $this->load->view('templates/footer');
        
    }

    

    public function tambah()
    {
        $data['title'] = 'Tambah Data';

        $this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('id_meja', 'Table', 'required');
        // $this->form_validation->set_rules('person', 'Person', 'required');
        $this->form_validation->set_rules('datetime', 'Date Time', 'required','callback_checkDateFormat');
        
        
        

        if ($this->form_validation->run() == FALSE)  //kalau validadasinya salah akan diproses yang if
        {

            $this->load->view('cafe/tambah_view',$data);
            $this->load->view('templates/footer');
        } 
        else //kalau benar, maka akan diproses yang else
        {
                $nama_pelanggan = $this->input->post('nama_pelanggan');
                $id_meja = $this->input->post('id_meja');
                // $person = $this->input->post('person');
                $datetime = $this->input->post('datetime');   
        
                      
        
                $data = array('nama_pelanggan'=> $nama_pelanggan,
                              'id_meja' => $id_meja,
                            //   'person' => $person,
                              'datetime' => $datetime
                            );       //untuk menyimpan data dalam bentuk array
        
                $this->cafe_model->tambah_data($data); //data ditambahkan.. supaya diarahkan ke tabel mahasiswa

                $this->session->set_flashdata('sukses', 'ditambahkan'); //notif
                
                redirect('cafe/index'); //akan dikembalikan ke buku/index.
        }
        
        
    }

    public function edit($id_pelanggan)
    {
        $data['title'] = 'Edit Data';

        $where = array('id_pelanggan' => $id_pelanggan); 

        $this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('id_meja', 'Table', 'required');
        // $this->form_validation->set_rules('person', 'Person', 'required');
        $this->form_validation->set_rules('datetime', 'Date Time', 'required','callback_checkDateFormat');

        
        if ($this->form_validation->run() == FALSE) 
        {
            
            $data['cafe'] = $this->cafe_model->getPelangganById($where);
            // $data['genre'] = $this->Buku_model->getGenre();
            $this->load->view('templates/header', $data);
            $this->load->view('cafe/edit_view',$data);
            $this->load->view('templates/footer');
        
        } 
        else 
        {
            $nama_pelanggan = $this->input->post('nama_pelanggan');
            $id_meja = $this->input->post('id_meja');
            // $person = $this->input->post('person');
            $datetime = $this->input->post('datetime'); 

            $data = array('nama_pelanggan'=> $nama_pelanggan,
                              'id_meja' => $id_meja,
                            //   'person' => $person,
                              'harga' => $harga,
                              'datetime' => $datetime
                            );   

            $this->cafe_model->edit_data($where, $data);

            $this->session->set_flashdata('sukses', 'Berhasil Update Data');

            redirect('cafe/index');
        }
        

    }

   

    public function hapus($id_pelanggan)
    {
        $where = array('id_pelanggan' => $id_pelanggan);
        $this->cafe_model->hapus_data($where);
        $this->session->set_flashdata('sukses', 'Berhasil Hapus Data');
        
        redirect('cafe/index');
        
    }


    public function detail($id_pelanggan)
    {
        $data['title'] = 'Detail Buku';

        $where = array('id_pelanggan' => $id_pelanggan);
        $data['pelanggan'] = $this->cafe_model->getPelangganById($where);

        // $this->load->view('templates/header', $data);
            $this->load->view('cafe/detail_view',$data);
            $this->load->view('templates/footer');
        
    }

}

/* End of file Buku.php */

?>