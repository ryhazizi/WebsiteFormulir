<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function DateOpt($Type) {
		 switch ($Type) {
		 	case "tanggal":
		 		$a=array();

				for ($b=1;$b<=31;$b++) {
					$a[$b]=$b;
				}

	  			return $a;
		 	break;
		 	case "Tanggal":
		 		$a=array();

				for ($b=1;$b<=31;$b++) {
					$a[$b]=$b;
				}

	  			return $a;
		 	break;
		 	case "bulan":
		 		return array("1" => "Januari","2" => "Februari","3" => "Maret","4" => "April","5" => "Mei","6" => "Juni","7" => "Juli","8" => "Agustus","9" => "September","10" => "Oktober","11" => "November","12" => "Desember");
		 	break;
		 	case "Bulan":
		 		return array("1" => "Januari","2" => "Februari","3" => "Maret","4" => "April","5" => "Mei","6" => "Juni","7" => "Juli","8" => "Agustus","9" => "September","10" => "Oktober","11" => "November","12" => "Desember");
		 	break;
		 	case "tahun":
		 		$c=array();

		 		for ($d = 1950;$d <= date("Y");$d++) {
		 		   $c[$d]=$d;
		 		}

		 		return $c;
		 	break;
		 	case "Tahun":
		 		$c=array();

		 		for ($d = 1950;$d <= date("Y");$d++) {
		 		   $c[$d]=$d;
		 		}

		 		return $c;
		 	break;
		 	default:
		 	   return "Tipe tidak tersedia";
		 	break;
		 }
	}

	public function id_orang()
	{
        return substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMnOoPpQqRrSsTtUuVvWwXxYyZz0123456789"),0,30);
	}

	public function simpan_data($DataArray) {
		return $this->db->insert("dataorang", $DataArray);
	}

	public function ambil_data() {
		return $this->db->get('dataorang')->result_array();
	}

	public function cek_nama($Nama = NULL) {
		if (is_null($Nama)) {
			return "fungsi cek_nama harus memiliki parameter!";
        }else if (!$Nama) {
        	return "nama masih kosong!";
        }else {
        	$this->db->select('NamaLengkap');
        	
        	$this->db->from('dataorang');
        	
        	$this->db->where('NamaLengkap', $Nama);

        	$datanama = $this->db->get();

        	if ($datanama->num_rows() > 0) {
        		return TRUE;
        	}else {
        		return FALSE;
        	}
        }
	}

	public function hapus_data($IDyangmaudihapus) {
		if (is_null($IDyangmaudihapus)) {
			return "fungsi hapus_data harus memiliki parameter!";
        }else if (!$IDyangmaudihapus) {
        	return "id data yg mau dihapus masih kosong!";
        }else {
        	$this->db->select('ID');
        	
        	$this->db->from('dataorang');
        	
        	$this->db->where('ID', $IDyangmaudihapus);

        	return $this->db->delete('dataorang');
        }
	}

}