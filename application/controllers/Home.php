<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('System');		
	}
	
	public function index()
	{	
      	$data = [
        	'tgl_lahir_arr' => $this->DateOpt('tanggal'),
          	'bln_lahir_arr' => $this->DateOpt('bulan'),
          	'thn_lahir_arr' => $this->DateOpt('tahun'),
          	'semuadata'	=> $this->System->ambil_data()
        ];
      
		$this->load->view('home', $data);
	}

	public function SimpanData() {

		if (!$this->input->is_ajax_request())
		{
			redirect("");
		}

		$_POST = json_decode(file_get_contents("php://input"), TRUE);

		$data_arr = array
		            (
		            	"ID"             =>  $this->id_orang(),
		            	"NamaLengkap"    =>  $_POST["NamaLengkap"],
		            	"TanggalLahir"   =>  $_POST["TanggalLahir"],
		            	"BulanLahir"     =>  $_POST["BulanLahir"],
		            	"TahunLahir"     =>  $_POST["TahunLahir"],
		            	"Alamat"         =>  $_POST["Alamat"]
		            );

	    if (!$data_arr["NamaLengkap"]) {
	    	echo json_encode("1");
	    }else if(!$data_arr["TanggalLahir"]) {
	    	echo json_encode("2");
	    }else if(!$data_arr["BulanLahir"]) {
	    	echo json_encode("3");
	    }else if(!$data_arr["TahunLahir"]) {
	    	echo json_encode("4");
	    }else if(!$data_arr["Alamat"]) {
	    	echo json_encode("5");
	    }else if(strlen($data_arr["NamaLengkap"]) < 5) {
	    	echo json_encode("6");
	    }else if(strlen($data_arr["NamaLengkap"]) > 25) {
	    	echo json_encode("7");
	    }else if(strlen($data_arr["Alamat"]) < 10) {
	    	echo json_encode("8");
	    }else if(strlen($data_arr["Alamat"]) > 50) {
	    	echo json_encode("9");
	    }else if(!preg_match("/^[a-zA-Z ]*$/", $data_arr["NamaLengkap"])) {
	    	echo json_encode("10");
	    }else if(!preg_match("/^[a-zA-Z-0-9 ]*$/", $data_arr["Alamat"])) {
	    	echo json_encode("11");
	    }else {
          // nama tidak boleh sama?
	    	if ($this->System->cek_nama($data_arr["NamaLengkap"])) {
	    		echo json_encode("12");
	    	}else {
	    	    if ($this->System->simpan_data($data_arr)) {
	    	    	echo json_encode("13");
	    	    }else {
	    	    	echo json_encode("14");
	    	    }
	    	}
	    }
	}

	public function AmbilData() {

		if (!$this->input->is_ajax_request())
		{
			redirect("");
		}

		$data = $this->System->ambil_data();
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function HapusData() {

		if (!$this->input->is_ajax_request())
		{
			redirect("");
		}
		$_POST = json_decode(file_get_contents("php://input"), TRUE);

		$this->System->hapus_data($_POST['ID']);

		echo json_encode("1");
	}
  
  
  	/**
    * move here from model
    * karena fungsi model untuk interaksi dengan database
    */
    private function DateOpt($Type) {
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
  
  
	private function id_orang()
	{
        return substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMnOoPpQqRrSsTtUuVvWwXxYyZz0123456789"),0,30);
	}
}