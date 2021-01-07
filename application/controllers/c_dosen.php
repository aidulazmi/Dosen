<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dosen extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_dosen');
		$this->load->model('m_login');
}

	public function index()
	{
		$this->load->view('dosen/home/v_d_d_home');
	}

	public function dosen()
	{
		$data['user'] = $this->m_dosen->tampil_data_dosen()->result();
		$this->load->view('dosen/data/v_d_d_dosen',$data);
	}
	public function badlb()
	{
		$data['user'] = $this->m_dosen->badlb_home();
		$this->load->view('dosen/data/v_d_d_badlb',$data);
	}

		public function tbad()
	{
		$data['ddf'] = $this->m_dosen->tbad_home();
		$this->load->view('dosen/data/v_d_d_tbad',$data);
	}

}
