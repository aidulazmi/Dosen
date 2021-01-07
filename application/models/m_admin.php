<?php 

class m_admin extends CI_Model{

	//data akademik
	function tampil_data_akademik(){
		return $this->db->get('akademik');
	}

	function input_data_akademik($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_akademik($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data_akademik($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_akademik($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	



	//dosen
	function tampil_data_dosen(){
		return $this->db->get('dosen');
	}

	function input_data_dosen($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_dosen($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data_dosen($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_dosen($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


	//BADLB
	function tampil_data_badlb(){
		return $this->db->get('badlb');
	}

	function input_data_badlb($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_badlb($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data_badlb($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_badlb($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function bad_akademik(){
       $query = $this->db->query("SELECT * FROM akademik");
        return $query->result();
    }
    function bad_dosen(){
       $query = $this->db->query("SELECT * FROM dosen");
        return $query->result();
    }

	//BADT
function tampil_data_tbad(){
		return $this->db->get('tbad');
	}

	function input_data_tbad($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_tbad($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data_tbad($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_tbad($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function tbad_akademik(){
       $query = $this->db->query("SELECT * FROM akademik");
        return $query->result();
    }
    function tbad_dosen(){
       $query = $this->db->query("SELECT * FROM dosen");
        return $query->result();
    }



    //home
    function badlb_home(){
       $query = $this->db->query("SELECT badlb.nip, dosen.username, sum(akademik.sks) as sks from badlb JOIN dosen on dosen.nip = badlb.nip join akademik ON akademik.matakuliah = badlb.matakuliah GROUP by dosen.nip");
        return $query->result();
    }
    
    function tbad_home(){
       $query = $this->db->query("SELECT tbad.nip, dosen.username, sum(akademik.sks) as sks from tbad JOIN dosen on dosen.nip = tbad.nip join akademik ON akademik.matakuliah = tbad.matakuliah GROUP by dosen.nip");
        return $query->result();
    }


    //admin

    function tampil_data_admin(){
		return $this->db->get('admin');
	}

	function input_data_admin($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_admin($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function edit_data_admin($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_admin($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}