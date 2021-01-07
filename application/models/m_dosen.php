<?php 

class m_dosen extends CI_Model{


function tampil_data_dosen(){
		return $this->db->get('dosen');
	}


    function badlb_home(){
       $query = $this->db->query("SELECT badlb.nip, dosen.username, sum(akademik.sks) as sks from badlb JOIN dosen on dosen.nip = badlb.nip join akademik ON akademik.matakuliah = badlb.matakuliah GROUP by dosen.nip");
        return $query->result();
    }
    function tbad_home(){
       $query = $this->db->query("SELECT tbad.nip, dosen.username, sum(akademik.sks) as sks from tbad JOIN dosen on dosen.nip = tbad.nip join akademik ON akademik.matakuliah = tbad.matakuliah GROUP by dosen.nip");
        return $query->result();
    }
}