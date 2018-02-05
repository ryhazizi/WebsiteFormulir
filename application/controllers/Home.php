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
		$data["tgl_lahir_arr"]   = $this->System->DateOpt("tanggal");
		$data["bln_lahir_arr"]   = $this->System->DateOpt("bulan");
		$data["thn_lahir_arr"]   = $this->System->DateOpt("tahun");
		$data["semuadata"]       = $this->System->ambil_data();
		$this->load->view('home', $data);
	}

	public function SimpanData() {

		if (!$_SERVER['HTTP_X_REQUESTED_WITH'])
		{
			redirect("");
		}

		$_POST = json_decode(file_get_contents("php://input"), TRUE);

		$data_arr = array
		            (
		            	"ID"             =>  $this->System->id_orang(),
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

		if (!$_SERVER['HTTP_X_REQUESTED_WITH'])
		{
			redirect("");
		}

		$data = $this->System->ambil_data();
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function HapusData() {

		if (!$_SERVER['HTTP_X_REQUESTED_WITH'])
		{
			redirect("");
		}

		$_POST = json_decode(file_get_contents("php://input"), TRUE);

		$data_arr = array
		            (
		            	"ID"             =>  $_POST["ID"]
		            );

		$this->System->hapus_data($data_arr["ID"]);

		echo json_encode("1");
	}
}
