<?php

class Paket_Model extends CI_Model {

	protected $table = 't_paket';

	protected $primaryKey = 'id_paket';

	public function paket()
	{
		$this->db->select('id_paket, nama, biaya');
		$this->db->from($this->table);
		return $this->db->get();
	}

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
