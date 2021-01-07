<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('m_login');
}
	public function index()
	{
		if($this->m_login->is_logged_in())
    {
        $data['user'] = $this->m_admin->badlb_home();
		$data['ddf'] = $this->m_admin->tbad_home();
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/home/home',$data);
		//$this->load->view('admin/edit/v_e_akademik');
		$this->load->view('admin/inc/footer');

    }else
    {
        redirect("c_login");

    }

		
	}
	function c_d_akademik(){
		$data['user'] = $this->m_admin->tampil_data_akademik()->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/data/v_d_tbad');
		$this->load->view('admin/data/v_d_akademik',$data);
		$this->load->view('admin/inc/footer');
	}
	function c_d_dosen(){
		$data['user'] = $this->m_admin->tampil_data_dosen()->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/data/v_d_tbad');
		$this->load->view('admin/data/v_d_dosen',$data);
		$this->load->view('admin/inc/footer');
	}
	function c_d_badlb(){
		$data['user'] = $this->m_admin->tampil_data_badlb()->result();
		$data['dd_bidang'] = $this->m_admin->bad_dosen(); 
            $data['dd_bidang1'] = $this->m_admin->bad_akademik();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/data/v_d_tbad');
		$this->load->view('admin/data/v_d_badlb',$data);
		$this->load->view('admin/inc/footer');
	}
	function c_d_tbad(){
		$data['user'] = $this->m_admin->tampil_data_tbad()->result();
		$data['dd_bidang'] = $this->m_admin->bad_dosen(); 
            $data['dd_bidang1'] = $this->m_admin->bad_akademik();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/data/v_d_tbad');
		$this->load->view('admin/data/v_d_tbad',$data);
		$this->load->view('admin/inc/footer');
	}
	function c_d_admin(){
		$data['user'] = $this->m_admin->tampil_data_admin()->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/data/v_d_tbad');
		$this->load->view('admin/data/v_d_admin',$data);
		$this->load->view('admin/inc/footer');
	}


//insert 


	
	//akademik
		function simpan_akademik(){
		$matakuliah = $this->input->post('matakuliah');
		$jurusan = $this->input->post('jurusan');
		$SKS = $this->input->post('sks');

		$data = array(
			
			'matakuliah' => $matakuliah,
			'jurusan' => $jurusan,
			'sks' => $SKS
			);
		$this->m_admin->input_data_akademik($data,'akademik');
		redirect('c_admin/c_d_akademik');
}


	//dosen
		function simpan_dosen(){
		$username = $this->input->post('username');
		$nip = $this->input->post('nip');
		$pgkt = $this->input->post('PGKT');
		$tugas_lain = $this->input->post('tugas_lain');
		$hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$status = $this->input->post('status');

		$data = array(
			
			'username' => $username,
			'nip' => $nip,
			'PGKT' => $pgkt,
			'tugas_lain' => $tugas_lain,
			'no_hp' => $hp,
			'alamat' => $alamat,
			'email' => $email,
			'status' => $status
			);
		$this->m_admin->input_data_dosen($data,'dosen');
		redirect('c_admin/c_d_dosen');
}

		//badlb
		function simpan_badlb(){
		$id_bad_lb = $this->input->post('id_bad_lb');
		$nip = $this->input->post('nip');
		$matakuliah = $this->input->post('matakuliah');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');

		$data = array(
			
			'nip' => $nip,
			'matakuliah' => $matakuliah,
			'semester' => $semester,
			'kelas' => $kelas
			);
		$this->m_admin->input_data_badlb($data,'badlb');
		redirect('c_admin/c_d_badlb');
}

//tbad
		function simpan_tbad(){
	$id_bad_lb = $this->input->post('id_bad_lb');
		$nip = $this->input->post('nip');
		$matakuliah = $this->input->post('matakuliah');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');

		$data = array(
			
			'nip' => $nip,
			'matakuliah' => $matakuliah,
			'semester' => $semester,
			'kelas' => $kelas
			);
		$this->m_admin->input_data_tbad($data,'tbad');
		redirect('c_admin/c_d_tbad');
}
		
		//admin
		function simpan_admin(){
	$username = $this->input->post('username');
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		
		$status = "dosen";
         

		$data = array(
			
			'username' => $username,
			'nip' => $nip,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'status' => $status
			);
		$this->m_admin->input_data_admin($data,'admin');
		redirect('c_admin/c_d_admin');
}
//edit

		//akademik
		function edit_akademik($id_akademik){
		$where = array('id_akademik' => $id_akademik);
		$data['user'] = $this->m_admin->edit_data_akademik($where,'akademik')->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/home/home');
		$this->load->view('admin/edit/v_e_akademik',$data);
		$this->load->view('admin/inc/footer');
}

		//dosen
		function edit_dosen($id_dosen){
		$where = array('id_dosen' => $id_dosen);
		$data['user'] = $this->m_admin->edit_data_dosen($where,'dosen')->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/home/home');
		$this->load->view('admin/edit/v_e_dosen',$data);
		$this->load->view('admin/inc/footer');

}
		
		//badlb
		function edit_badlb($id_bad_lb){
		$where = array('id_bad_lb' => $id_bad_lb);
		$data['user'] = $this->m_admin->edit_data_badlb($where,'badlb')->result();
		$data['dd_bidang'] = $this->m_admin->bad_dosen(); 
            $data['dd_bidang1'] = $this->m_admin->bad_akademik();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/home/home');
		$this->load->view('admin/edit/v_e_badlb',$data);
		$this->load->view('admin/inc/footer');
}
//tbad
		function edit_tbad($id_bad){
		$where = array('id_bad' => $id_bad);
		$data['user'] = $this->m_admin->edit_data_tbad($where,'tbad')->result();
		$data['dd_bidang'] = $this->m_admin->tbad_dosen(); 
            $data['dd_bidang1'] = $this->m_admin->tbad_akademik();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/home/home');
		$this->load->view('admin/edit/v_e_tbad',$data);
		$this->load->view('admin/inc/footer');
}


	//admin
		function edit_admin($id_admin){
		$where = array('id_admin' => $id_admin);
		$data['user'] = $this->m_admin->edit_data_admin($where,'admin')->result();
		$this->load->view('admin/inc/sidebar');
		//$this->load->view('admin/home/home');
		$this->load->view('admin/edit/v_e_admin',$data);
		$this->load->view('admin/inc/footer');

}

//insert edit

	//akademik
	
	function update_akademik(){
		$id_akademik = $this->input->post('id_akademik');
		$matakuliah = $this->input->post('matakuliah');
		$jurusan = $this->input->post('jurusan');
		$SKS = $this->input->post('sks');


		$data = array(

			'matakuliah' => $matakuliah,
			'jurusan' => $jurusan,
			'sks' => $SKS
			);

	$where = array(
		'id_akademik' => $id_akademik
	);

	$this->m_admin->update_data_akademik($where,$data,'akademik');
		redirect('c_admin/c_d_akademik');
}

	//dosen

			function update_dosen(){
				$id_dosen = $this->input->post('id_dosen');
				$username = $this->input->post('username');
				$nip = $this->input->post('nip');
				$pgkt = $this->input->post('PGKT');
				$tugas_lain = $this->input->post('tugas_lain');
				$hp = $this->input->post('no_hp');
				$alamat = $this->input->post('alamat');
				$email = $this->input->post('email');
				$status = $this->input->post('status');

				$data = array(
					
					'username' => $username,
					'nip' => $nip,
					'PGKT' => $pgkt,
					'tugas_lain' => $tugas_lain,
					'no_hp' => $hp,
					'alamat' => $alamat,
					'email' => $email,
					'status' => $status
					);

				$where = array(
					'id_dosen' => $id_dosen
				);

				$this->m_admin->update_data_dosen($where,$data,'dosen');
					redirect('c_admin/c_d_dosen');
			}


		//badlb
	function update_badlb(){
		$id_bad_lb = $this->input->post('id_bad_lb');
		$nip = $this->input->post('nip');
		$matakuliah = $this->input->post('matakuliah');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');


		$data = array(

			'nip' => $nip,
			'matakuliah' => $matakuliah,
			'semester' => $semester,
			'kelas' => $kelas
			);

	$where = array(
		'id_bad_lb' => $id_bad_lb
	);

	$this->m_admin->update_data_badlb($where,$data,'badlb');
		redirect('c_admin/c_d_badlb');
}	
			//badlb
	function update_tbad(){
		$id_bad = $this->input->post('id_bad');
		$nip = $this->input->post('nip');
		$matakuliah = $this->input->post('matakuliah');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');


		$data = array(

			'nip' => $nip,
			'matakuliah' => $matakuliah,
			'semester' => $semester,
			'kelas' => $kelas
			);

	$where = array(
		'id_bad' => $id_bad
	);

	$this->m_admin->update_data_tbad($where,$data,'tbad');
		redirect('c_admin/c_d_tbad');
}


	function update_admin(){
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		
		$status = "dosen";


		$data = array(

			'username' => $username,
			'nip' => $nip,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'status' => $status
			);

	$where = array(
		'id_admin' => $id_admin
	);

	$this->m_admin->update_data_admin($where,$data,'admin');
		redirect('c_admin/c_d_admin');
}

//delete

		//akdemik
		
		function hapus_akademik($id_akademik){
		$where = array('id_akademik' => $id_akademik);
		$this->m_admin->hapus_data_akademik($where,'akademik');
		redirect('c_admin/c_d_akademik');
	
		}


		//dosen
		function hapus_dosen($id_dosen){
		$where = array('id_dosen' => $id_dosen);
		$this->m_admin->hapus_data_dosen($where,'dosen');
		redirect('c_admin/c_d_dosen');
	
		}

		//bad_lb
		function hapus_badlb($id_bad_lb){
		$where = array('id_bad_lb' => $id_bad_lb);
		$this->m_admin->hapus_data_badlb($where,'badlb');
		redirect('c_admin/c_d_badlb');
	
		}

		//tbad
		function hapus_tbad($id_bad){
		$where = array('id_bad' => $id_bad);
		$this->m_admin->hapus_data_tbad($where,'tbad');
		redirect('c_admin/c_d_tbad');
	
		}

		//Admin
		function hapus_admin($id_admin){
		$where = array('id_admin' => $id_admin);
		$this->m_admin->hapus_data_admin($where,'admin');
		redirect('c_admin/c_d_admin');
	
		}

//laporan

		//badlb

		function c_l_badlb()
		{
			$data['user'] = $this->m_admin->badlb_home();
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/laporan/v_l_badlb',$data);
			$this->load->view('admin/inc/footer');
		}
				function c_l_tbad()
		{
			$data['ddf'] = $this->m_admin->tbad_home();
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/laporan/v_l_tbad',$data);
			$this->load->view('admin/inc/footer');
		}
}
