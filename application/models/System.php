<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    


	public function simpan_data($DataArray) {
		return $this->db->insert("dataorang", $DataArray);
	}

	public function ambil_data() {
		return $this->db->get('dataorang')->result_array();
	}

	public function cek_nama($Nama = NULL) {
      // sudah di validasi di controller
// 		if (is_null($Nama)) {
// 			return "fungsi cek_nama harus memiliki parameter!";
//         }else if (!$Nama) {
//         	return "nama masih kosong!";
//         }else {
        	$this->db->select('NamaLengkap');
        	
        	$this->db->from('dataorang');
        	
        	$this->db->where('NamaLengkap', $Nama);

        	$datanama = $this->db->get();

        	if ($datanama->num_rows() > 0) {
        		return TRUE;
        	}else {
        		return FALSE;
        	}
    //	    }
	}

	public function hapus_data($IDyangmaudihapus) {
// 		if (is_null($IDyangmaudihapus)) {
// 			return "fungsi hapus_data harus memiliki parameter!";
//         }else if (!$IDyangmaudihapus) {
//         	return "id data yg mau dihapus masih kosong!";
//         }else {
//         	$this->db->select('ID');
        	
//         	$this->db->from('dataorang');
        	
        	$this->db->where('ID', $IDyangmaudihapus);

        	return $this->db->delete('dataorang');
    //    }
	}

}