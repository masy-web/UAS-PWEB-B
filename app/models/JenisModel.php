<?php

class JenisModel {
	
	private $table = 'jenis';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllJenis()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getJenisById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahJenis($data)
	{
		$query = "INSERT INTO jenis (jenis_hewan) VALUES(:jenis_hewan)";
		$this->db->query($query);
		$this->db->bind('jenis_hewan',$data['jenis_hewan']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataJenis($data)
	{
		$query = "UPDATE jenis SET jenis_hewan=:jenis_hewan WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('jenis_hewan',$data['jenis_hewan']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteJenis($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariJenis()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE jenis_hewan LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}