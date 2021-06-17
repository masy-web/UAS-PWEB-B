<?php

class Hewan extends Controller {

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
		$data['title'] = 'Data Hewan';
		$data['hewan'] = $this->model('HewanModel')->getAllHewan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('hewan/index', $data);
		$this->view('templates/footer');
	}
	public function lihatlaporan()
	{
		$data['title'] = 'Data Laporan Hewan';
		$data['hewan'] = $this->model('HewanModel')->getAllHewan();
		$this->view('hewan/lihatlaporan', $data);
	}

	
	public function cari()
	{
		$data['title'] = 'Data Hewan';
		$data['hewan'] = $this->model('HewanModel')->cariHewan();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('hewan/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id){

		$data['title'] = 'Detail Hewan';
		$data['jenis'] = $this->model('JenisModel')->getAllJenis();
		$data['hewan'] = $this->model('HewanModel')->getHewanById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('hewan/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Hewan';
		$data['jenis'] = $this->model('JenisModel')->getAllJenis();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('hewan/create', $data);
		$this->view('templates/footer');
	}

	public function simpanHewan(){

		if( $this->model('HewanModel')->tambahHewan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/hewan');
			exit;
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/hewan');
			exit;
		}
	}

	public function updateHewan(){
		if( $this->model('HewanModel')->updateDataHewan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','di ubah','success');
			header('location: '. base_url . '/hewan');
			exit;
		}else{
			Flasher::setMessage('Gagal','di ubah','danger');
			header('location: '. base_url . '/hewan');
			exit;
		}
	}

	public function hapus($id){
		if( $this->model('HewanModel')->deleteHewan($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/hewan');
			exit;
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/hewan');
			exit;
		}
	}
}
