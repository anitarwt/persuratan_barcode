<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Surat Masuk';
		$this->load->view('surat-index', $this->data);
	}
	public function index_bagian()
	{
		$this->data['pageTitle'] = 'Surat Masuk';
		$this->load->view('disposisi-index-action-bagian', $this->data);
	}
	public function index_staff()
	{
		$this->data['pageTitle'] = 'Surat Masuk';
		$this->load->view('disposisi-index-list', $this->data);
	}
	public function input()
	{
		$this->data['pageTitle'] = 'Input Surat';
		$this->load->view('surat-input', $this->data);
	}
	public function detail_surat()
	{
		$this->data['pageTitle'] = 'Detail Surat';
		$this->load->view('surat-detail', $this->data);
	}
	public function detail_disposisi()
	{
		$this->data['pageTitle'] = 'Detail Surat';
		$this->load->view('disposisi-detail', $this->data);
	}
	public function cari_surat()
	{
		$this->data['pageTitle'] = 'Pencarian Surat';
		$this->load->view('surat-cari', $this->data);
	}
	public function edit_surat(){
		$this->data['pageTitle'] = 'Edit Surat';
		$this->load->view('surat_edit',$this->data);
	}

	public function detail_surat_bagian(){
		$this->data['pageTitle'] = 'Detail Surat Bagian';
		$this->load->view('surat_detail_bagian',$this->data);
	}

}
