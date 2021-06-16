<?php

class HewanModel {
	
	private $table = 'hewan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllHewan()
	{
		$this->db->query("SELECT hewan.*, jenis.jenis_hewan FROM " . $this->table . " JOIN jenis ON jenis.id = hewan.jenis_id");
		return $this->db->resultSet();
	}

	public function getHewanById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahHewan($data)
	{
		$query = "INSERT INTO hewan (nama_hewan, nama_latin, habitat, status, jenis_id, jumlah) VALUES(:nama_hewan, :nama_latin, :habitat, :status, :jenis_id, :jumlah)";
		$this->db->query($query);
		$this->db->bind('nama_hewan', $data['nama_hewan']);
		$this->db->bind('nama_latin', $data['nama_latin']);
		$this->db->bind('habitat', $data['habitat']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('jenis_id', $data['jenis_id']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataHewan($data)
	{
		$query = "UPDATE hewan SET nama_hewan=:nama_hewan, nama_latin=:nama_latin, habitat=:habitat, habitat=:habitat, status=:status, jenis_id=:jenis_id, jumlah=:jumlah WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama_hewan', $data['nama_hewan']);
		$this->db->bind('nama_latin', $data['nama_latin']);
		$this->db->bind('habitat', $data['habitat']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('jenis_id', $data['jenis_id']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteHewan($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariHewan()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama_hewan LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}