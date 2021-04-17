<?php

class User_Model extends CI_Model {

	protected $table = 't_registrasi_user';

	protected $primaryKey = 'id_registrasi_user';



	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($id, $update)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $update);
	}

	public function delete($id, $update)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $update);
	}

}
