<?php


class User_model extends CI_Model {

    public function simpan_user($data) {
        $this->db->insert('tb_user', $data);
        return $this->db->insert_id();
    }

}