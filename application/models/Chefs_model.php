<?php

class Chefs_model extends CI_Model{

    public function tampilkan_chefs(){
        return $this->db->get('tb_chefs');
    }

    public function getChefById($id)
    {
        return $this->db->get_where('tb_chefs', array('id_chefs' => $id))->row();
    }

    public function tambah_chefs($data) {
        $this->db->insert('tb_chefs', $data);
    }

    public function edit_chefs($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_chefs($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where, $table){
        // Ambil data foto sebelum menghapus
        $this->db->select('gambar');
        $this->db->where($where);
        $query = $this->db->get($table);
        $result = $query->row();
    
        // Hapus data dari database
        $this->db->where($where);
        $this->db->delete($table);
    
        // Hapus foto terkait jika ada
        if ($result && $result->gambar) {
            $file_path = './uploads/' . $result->gambar;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    public function find($id){
        
        $result = $this->db->where('id_chefs', $id)
                           ->limit(1)
                           ->get('tb_chefs');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}