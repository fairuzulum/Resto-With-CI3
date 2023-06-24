<?php

use LDAP\Result;

class Invoice extends CI_Model{

    public function index(){
        date_default_timezone_set('Asia/jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nomor_telepon = $this->input->post('nomor');
        $metode_pemabayaran = $this->input->post('metode');
       
        $nomor_pesanan = $this->generate_nomor_pesanan();
        

        $invoice = array(
            'nomor_pesanan' => $nomor_pesanan,
            'nama' => $nama,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon,
            'metode_pembayaran' => $metode_pemabayaran,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice' => $id_invoice,
                'id_menu' => $item['id'],
                'nama_menu' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            );
            $this->db->insert('tb_pesanan', $data);
        }

        return TRUE;
    }

    public function tampilkan_data(){
        $result = $this->db->get('tb_invoice');
        if($result->num_rows() >= 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice){
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if($result->num_rows() >= 0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice){
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function generate_nomor_pesanan(){
        // Menghasilkan nomor pesanan baru
        $prefix = "INV"; // Awalan nomor pesanan
        $date = date('Ymd'); // Format tanggal (misalnya: 20230611)
        $random = rand(100, 999); // Angka acak antara 100 hingga 999
        $nomor_pesanan = $prefix . $date . $random;
        
        return $nomor_pesanan;
    }

   

}