<?php

class Reservation_model extends CI_Model
{
    public function simpanData($data)
    {
        $this->db->insert('tb_reservation', $data);
    }

    public function tampilkan_data()
    {
        $this->db->order_by('tanggal', 'DESC'); // Mengurutkan data berdasarkan tanggal secara descending
        $result = $this->db->get('tb_reservation');
        if ($result->num_rows() >= 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getChefById($id)
    {
        return $this->db->get_where('tb_reservation', array('id' => $id))->row();
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_reservation');
    }


}
