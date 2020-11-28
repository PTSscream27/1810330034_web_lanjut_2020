<?php

/**
 * 
 */
class M_mahasiswa extends CI_Model
{
	
	private $table = 'mahasiswa';

	public function semuaData()
	{
		// select * from mahasiswa
		// mysqli_fetch_object()
		return $this->db->get($this->table)->result();
	}

	public function simpanData($data)
	{
		$this->db->insert($this->table, $data);


	}
}