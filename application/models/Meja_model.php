<?php


class Meja_model extends CI_Model{

    public function tampilkan_meja(){
        return $this->db->get('tb_nomer_meja');
        
    }

    public function hapus_meja($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_nomer_meja');
    }

    public function tambah_meja($data) {
        $this->db->insert('tb_nomer_meja', $data);
    }

    public function cekNomorMeja($nomor_meja)
    {
        $this->db->where('nomor_meja', $nomor_meja);
        $query = $this->db->get('tb_nomer_meja');
        return $query->num_rows() > 0;
    }

    public function getNomorMejaTersedia()
    {
        $this->db->where('status', 'Tersedia');
        $query = $this->db->get('tb_nomer_meja');
        return $query->result();
    }
    
    public function getNomorMejaTidakTersedia()
    {
        $this->db->where('status', 'Tidak Tersedia');
        $query = $this->db->get('tb_nomer_meja');
        return $query->result();
    }

    public function updateStatusMeja($nomor_meja)
    {
        $data = array(
            'status' => 'tidak tersedia' // Atur status menjadi "tidak tersedia"
        );

        $this->db->where('nomor_meja', $nomor_meja);
        $this->db->update('tb_nomer_meja', $data);
    }

    public function get_meja_by_id($id)
    {
        return $this->db->get_where('tb_nomer_meja', ['id' => $id])->row();
    }

    public function update_meja($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_nomer_meja', $data);
    }
}