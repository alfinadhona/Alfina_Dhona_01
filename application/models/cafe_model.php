<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cafe_model extends CI_Model {

    public function getPelanggan()
    {
        //$query_str = "SELECT * FROM buku";
        //$query = $this->db->query($query_str)->result_array();
        $query = $this->db->get('pelanggan')->result_array();
        return $query;
    }

   public function tambah_data($data)
   {
       $this->db->insert('pelanggan', $data); 
   }

   public function edit_form($where)
   {
       $query = $this->db->get_where('pelanggan',$where)->row_array();
       return $query;
   }

   public function edit_data($where, $data)
   {
       $this->db->where($where);
       $this->db->update('pelanggan', $data);
   }

   public function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pelanggan');
    }

    public function getPelangganById($where)
    {
        // $this->db->join('genre', 'buku.id_genre = genre.id_genre','left');
        
        $query = $this->db->get_where('pelanggan', $where)->row_array();

        return $query;
    }

} 

/* End of file Buku_model.php */


?>
