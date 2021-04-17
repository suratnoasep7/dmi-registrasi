<?php

class Laporan_Transaksi_Model extends CI_Model {

	public function total_registrasi_user()
	{
		$this->db->select('count(*) as total');
		$this->db->from('t_registrasi_user');
		return $this->db->get()->row()->total;
	}

	public function total_registrasi_paket($type = null)
	{
		$this->db->select('count(*) as total');
		$this->db->from('t_transaksi_paket');
		$this->db->join('t_paket', 't_transaksi_paket.id_paket = t_paket.id_paket');
		if ($type != null) {
			$this->db->where(array('t_paket.nama' => $type));
		}
		return $this->db->get()->row()->total;
	}

	public function total_pembayaran_paket()
	{
		$this->db->select('sum(t_paket.biaya) as total');
		$this->db->from('t_transaksi_paket');
		$this->db->join('t_paket', 't_transaksi_paket.id_paket = t_paket.id_paket');
		return $this->db->get()->row()->total;
	}

}
