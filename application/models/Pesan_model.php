<?php

class Pesan_model extends CI_Model{
    public function simpanData($data)
    {
        $this->db->insert('tb_pesan', $data);
    }

    public function tampilkan_data()
    {
        $result = $this->db->get('tb_pesan');
        if ($result->num_rows() >= 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getChefById($id)
    {
        return $this->db->get_where('tb_pesan', array('id' => $id))->row();
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_pesan');
    }
}