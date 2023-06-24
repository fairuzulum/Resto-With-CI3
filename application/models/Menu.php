<?php


class Menu extends CI_Model{
    public function tampilkan_menu(){
        return $this->db->get('tb_menu');
    }
    public function getChefById($id)
    {
        return $this->db->get_where('tb_menu', array('id_menu' => $id))->row();
    }

    public function tambah_menu($data) {
        $this->db->insert('tb_menu', $data);
    }

    public function edit_menu($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
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
        
        $result = $this->db->where('id_menu', $id)
                           ->limit(1)
                           ->get('tb_menu');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

}