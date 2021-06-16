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

	public function laporan()
	{
		$data['hewan'] = $this->model('HewanModel')->getAllHewan();

			$pdf = new FPDF('p','mm','A4');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			$pdf->SetFont('Arial','B',14);
			// mencetak string 
			$pdf->Cell(190,7,'LAPORAN HEWAN',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(10,7,'',0,1);
			 
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(85,6,'NAMA HEWAN',1);
			$pdf->Cell(30,6,'NAMA LATIN',1);
			$pdf->Cell(30,6,'HABITAT',1);
			$pdf->Cell(15,6,'STATUS',1);
			$pdf->Cell(25,6,'JENIS',1);
			  $pdf->Ln();
			$pdf->SetFont('Arial','',10);
			 
			foreach($data['hewan'] as $row) {
			    $pdf->Cell(85,6,$row['nama_hewan'],1);
			    $pdf->Cell(30,6,$row['nama_latin'],1);
			    $pdf->Cell(30,6,$row['habitat'],1);
			    $pdf->Cell(15,6,$row['status'],1); 
			    $pdf->Cell(25,6,$row['jenis_hewan'],1);
			    $pdf->Ln(); 
			}
			
			$pdf->Output('D', 'Laporan Hewan.pdf', true);

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
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/hewan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
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