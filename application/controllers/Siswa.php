<?php 
	/**
	* 
	*/
	class Siswa extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Datasiswa');
		}
		public function tabel_siswa()
		{
			$data['siswa']=$this->Datasiswa->all();
			$this->load->view('modul/datatable');
			$this->load->view('tabel_siswa',$data);
		}
		public function insert()
		{
			
		}
	}