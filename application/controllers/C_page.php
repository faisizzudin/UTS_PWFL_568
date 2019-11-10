<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_page extends CI_Controller
{
	public function index()
	{
		$data['mhs']=$this->M_mahasiswa->ambildatasiswa();
		$this->load->view('V_mahasiswa',$data);
	}

	public function tambahdata()
	{
		
		$this->load->view('V_formtambah');
	}

	public function editdata($id)
	{
		$data['mhs']=$this->M_mahasiswa->ambileditdata($id);
		$this->load->view('V_formedit', $data);
	}
}