<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_mahasiswa extends CI_Model
{
	public function ambildatasiswa()
	{
		$query=$this->db-> get('tbl_mahasiswa');
		return $query-> result_array();
	}

	public function tambahdata()
	{
		$query=$this->db-> get('tbl_mahasiswa');
		return $query-> result_array();
	}

	public function ambileditdata($id)
	{
		$this->db->where('id',$id);
		$query=$this->db-> get('tbl_mahasiswa');
		return $query-> result_array();
	}

	public function tambah_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'namamahasiswa' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		return $this->db->insert('tbl_mahasiswa',$data);
	}

	public function edit_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'namamahasiswa' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$id_surat_lama = $this->input->post('id');
		$this->db->where('id', $id_surat_lama);
		return $this->db->update('tbl_mahasiswa',$data);
	}

	public function hapus_mhs($id){
		return $this->db->delete('tbl_mahasiswa',array('id' =>$id));
	}

	public function ambildatanim(){
		$query = $this->db->get('log');
		return $query->result_array();
	}

}
