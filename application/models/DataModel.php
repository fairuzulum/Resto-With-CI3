<?php

class DataModel extends CI_Model
{
    public function getJumlahMenu()
    {
        // Query untuk mengambil jumlah menu dari database
        $this->db->from('tb_menu');
        return $this->db->count_all_results();
    }

    public function getPendapatanMasuk()
    {
        // Query untuk mengambil pendapatan masuk dari database
        // $this->db->select_sum('harga');
        // $result = $this->db->get('tb_pesanan');
        // return $result->row()->harga;

        $this->db->select_sum('harga');
        $result = $this->db->get('tb_pesanan');

        if ($result->num_rows() > 0) {
            return $result->row()->harga;
        } else {
            return 0; // Mengembalikan 0 jika tabel kosong
        }
    }

    public function getTransaksiMasuk()
    {
        // Query untuk mengambil jumlah transaksi masuk dari database
        $this->db->from('tb_invoice');
        return $this->db->count_all_results();
    }

    public function getDataPelanggan()
    {
        // Query untuk mengambil jumlah data pelanggan dari database
        $this->db->from('tb_pelanggan');
        return $this->db->count_all_results();
    }
}
