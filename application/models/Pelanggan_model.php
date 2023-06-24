<?php


class Pelanggan_model extends CI_Model{

    public function simpan_pelanggan($data) {
        $this->db->insert('tb_pelanggan', $data);
    }

    public function getPelangganByUserId($user_id) {
        $this->db->where('id_user', $user_id);
        return $this->db->get('tb_pelanggan')->row();
    }

    public function tampilkan_data(){
        return $this->db->get('tb_pelanggan');
    }

    public function get_pelanggan_by_id($id)
    {
        return $this->db->get_where('tb_pelanggan', ['id' => $id])->row();
    }

    public function update_pelanggan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_pelanggan', $data);
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_pelanggan');
    }
}