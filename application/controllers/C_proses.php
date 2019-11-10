<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller {

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		if (!$this->form_validation->run()==false) {
			$this->M_mhs->tambah_mhs();
			$this->session->set_flashdata('berhasil','data berhasil ditambahkan!');
			redirect('c_page/');
		}else {
			$this->session->set_flashdata('gagal','data gagal ditambahkan!');
			redirect('c_page/tambahmhs');
		}
	}

	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim','nim','required');
		// $this->form_validation->set_rules('nama','nama','required');
		// $this->form_validation->set_rules('jk','jk','required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('no_hp','no_hp','required');
		if ($this->form_validation->run()!=false) {
			$this->M_mahasiswa->edit_mhs();
			$this->session->set_flashdata('berhasil','data berhasil diedit!');
			redirect('c_page');
		}else{
			$this->session->set_flashdata('gagal','data gagal diedit!');
			redirect('c_page/editdata');
		}
	}
		
	public function hapusmhs($id){
		if ($id != "") {
			$this->M_mahasiswa->hapus_mhs($id);
			// $this->session->set_flashdata('berhasil','data berhasil dihapus!');
			redirect('c_page/');
		}else{
			// $this->session->set_flashdata('gagal','data gagal dihapus!');
			redirect('c_page/');
		}
	}

}