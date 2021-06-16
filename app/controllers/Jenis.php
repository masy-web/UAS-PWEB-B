<?php

class Jenis extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Data Jenis';
		$data['jenis'] = $this->model('JenisModel')->getAllJenis();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('jenis/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title'] = 'Data Jenis';
		$data['jenis'] = $this->model('JenisModel')->cariJenis();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('jenis/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Jenis';
		$data['jenis'] = $this->model('JenisModel')->getJenisById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('jenis/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Jenis';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('jenis/create', $data);
		$this->view('templates/footer');
	}

	public function simpanJenis()
	{		
		if( $this->model('JenisModel')->tambahJenis($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/jenis');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/jenis');
			exit;	
		}
	}

	public function updateJenis(){	
		if( $this->model('JenisModel')->updateDataJenis($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/jenis');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/jenis');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('JenisModel')->deleteJenis($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/jenis');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/jenis');
			exit;	
		}
	}
}