<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_basic', 'm');
	}	

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
	}

	public function masuk()
	{
		$data['masuk'] = $this->m->getData('surat_masuk')->result();
		$this->load->view('template/header');
		$this->load->view('masuk/index', $data);
		$this->load->view('template/footer');
	}

	public function ins_masuk()
	{		
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '5120';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$this->session->set_flashdata('toast', 'error:'.$this->upload->display_errors());
			$this->uploadSM(null, 'tambah');
		}
		else{
			$data = $this->upload->data('file_name');
			$this->uploadSM($data, 'tambah');
		}		
		$this->session->set_flashdata('toast', 'success:Data berhasil di tambahkan');
		redirect('Home/masuk','refresh');
	}
	
	public function upd_masuk()
	{
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '5120';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$this->session->set_flashdata('toast', 'error:'.$this->upload->display_errors());
			$this->uploadSM(null, 'update');
		}
		else{
			$data = $this->upload->data('file_name');
			$this->uploadSM($data, 'update');
		}	
		$this->session->set_flashdata('toast', 'success:Data berhasil di update');

		redirect('Home/masuk','refresh');
	}

	public function hapusM($id)
	{
		$w = array('id' => $id, );
		$this->m->del('surat_masuk', $w);
		redirect('Home/masuk','refresh');
	}

	public function uploadSM($dokumen, $jenis){
		if ($dokumen != null && $jenis == 'tambah') {
			$data = array(
				'no_agenda' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_entry' => date('Y-m-d'), 
				'pengirim' => $this->input->post('pengirim'), 
				'nama_peserta' => $this->input->post('peserta'), 
				'nama_pemohon' => $this->input->post('pemohon'), 
				'nrp' => $this->input->post('nrp'), 
				'no_ktpa' => $this->input->post('ktpa'), 
				'alamat' => $this->input->post('alamat'), 
				'no_tlp' => $this->input->post('telpon'), 
				'jenis_klaim' => $this->input->post('claim'), 
				'catatan' => $this->input->post('catatan'), 
				'dokumen' => $dokumen, 
			);     
			$this->m->ins('surat_masuk', $data);
		} elseif($dokumen == null && $jenis == 'tambah') {
			$data = array(
				'no_agenda' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_entry' => date('Y-m-d'), 
				'pengirim' => $this->input->post('pengirim'), 
				'nama_peserta' => $this->input->post('peserta'), 
				'nama_pemohon' => $this->input->post('pemohon'), 
				'nrp' => $this->input->post('nrp'), 
				'no_ktpa' => $this->input->post('ktpa'), 
				'alamat' => $this->input->post('alamat'), 
				'no_tlp' => $this->input->post('telpon'), 
				'jenis_klaim' => $this->input->post('claim'), 
				'catatan' => $this->input->post('catatan'),
			);			     
			$this->m->ins('surat_masuk',$data);
		}elseif($dokumen != null && $jenis == 'update') {
			$data = array(
				'no_agenda' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_entry' => date('Y-m-d'), 
				'pengirim' => $this->input->post('pengirim'), 
				'nama_peserta' => $this->input->post('peserta'), 
				'nama_pemohon' => $this->input->post('pemohon'), 
				'nrp' => $this->input->post('nrp'), 
				'no_ktpa' => $this->input->post('ktpa'), 
				'alamat' => $this->input->post('alamat'), 
				'no_tlp' => $this->input->post('telpon'), 
				'jenis_klaim' => $this->input->post('claim'), 
				'catatan' => $this->input->post('catatan'), 
				'dokumen' => $dokumen, 
			);
			$w = array('id' => $this->uri->segment(3), );     
			$this->m->upd('surat_masuk',$data, $w);
		}else{
			$data = array(
				'no_agenda' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_entry' => date('Y-m-d'), 
				'pengirim' => $this->input->post('pengirim'), 
				'nama_peserta' => $this->input->post('peserta'), 
				'nama_pemohon' => $this->input->post('pemohon'), 
				'nrp' => $this->input->post('nrp'), 
				'no_ktpa' => $this->input->post('ktpa'), 
				'alamat' => $this->input->post('alamat'), 
				'no_tlp' => $this->input->post('telpon'), 
				'jenis_klaim' => $this->input->post('claim'), 
				'catatan' => $this->input->post('catatan'), 
			);
			$w = array('id' => $this->uri->segment(3), );     
			$this->m->upd('surat_masuk',$data, $w);
		}       
	}

	public function keluar()
	{
		$data['keluar'] = $this->m->getData('surat_keluar')->result();
		$this->load->view('template/header');
		$this->load->view('keluar/index', $data);
		$this->load->view('template/footer');
	}

	public function ins_keluar()
	{		
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '5120';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$this->session->set_flashdata('toast', 'error:'.$this->upload->display_errors());
			$this->uploadSK(null, 'tambah');
		}
		else{
			$data = $this->upload->data('file_name');
			$this->uploadSK($data, 'tambah');
		}		
		$this->session->set_flashdata('toast', 'success:Data berhasil di tambahkan');
		redirect('Home/keluar','refresh');
	}
	
	public function upd_keluar()
	{
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '5120';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$this->session->set_flashdata('toast', 'error:'.$this->upload->display_errors());
			$this->uploadSK(null, 'update');
		}
		else{
			$data = $this->upload->data('file_name');
			$this->uploadSK($data, 'update');
		}	

		$this->session->set_flashdata('toast', 'success:Data berhasil di update');
		redirect('Home/keluar','refresh');
	}

	public function hapusK($id)
	{
		$w = array('id' => $id, );
		$this->m->del('surat_keluar', $w);
		$this->session->set_flashdata('toast', 'success:Data berhasil di hapus');
		redirect('Home/keluar','refresh');
	}

	public function uploadSK($dokumen, $jenis){
		if ($dokumen != null && $jenis == 'tambah') {
			$data = array(
				'kode_surat' => $this->input->post('kode'), 
				'no_surat' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_kirim' => date('Y-m-d'), 
				'tujuan' => $this->input->post('tujuan'), 
				'alamat' => $this->input->post('alamat'), 
				'perihal' => $this->input->post('perihal'),
				'catatan' => $this->input->post('catatan'), 
				'dokumen' => $dokumen, 
			);     
			$this->m->ins('surat_keluar', $data);
		} elseif($dokumen == null && $jenis == 'tambah') {
			$data = array(
				'kode_surat' => $this->input->post('kode'), 
				'no_surat' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_kirim' => date('Y-m-d'), 
				'tujuan' => $this->input->post('tujuan'), 
				'alamat' => $this->input->post('alamat'), 
				'perihal' => $this->input->post('perihal'),
				'catatan' => $this->input->post('catatan'), 
			);       
			$this->m->ins('surat_keluar',$data);
		}elseif($dokumen != null && $jenis == 'update') {
			$data = array(
				'kode_surat' => $this->input->post('kode'), 
				'no_surat' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_kirim' => date('Y-m-d'), 
				'tujuan' => $this->input->post('tujuan'), 
				'alamat' => $this->input->post('alamat'), 
				'perihal' => $this->input->post('perihal'),
				'catatan' => $this->input->post('catatan'), 
				'dokumen' => $dokumen, 
			);     
			$w = array('id' => $this->uri->segment(3), );     
			$this->m->upd('surat_keluar',$data, $w);
		}else{
			$data = array(
				'kode_surat' => $this->input->post('kode'), 
				'no_surat' => $this->input->post('no'), 
				'tgl_surat' => $this->input->post('tgl_surat'), 
				'tgl_kirim' => date('Y-m-d'), 
				'tujuan' => $this->input->post('tujuan'), 
				'alamat' => $this->input->post('alamat'), 
				'perihal' => $this->input->post('perihal'),
				'catatan' => $this->input->post('catatan')
			);     
			$w = array('id' => $this->uri->segment(3), );     
			$this->m->upd('surat_keluar',$data, $w);
		}       
	}
}

/* End of file Home.php */
