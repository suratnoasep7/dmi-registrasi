<?php

class Transaksi_Paket_Model extends CI_Model {

	protected $table = 't_transaksi_paket';

	protected $primaryKey = 'id_transaksi_paket';

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
