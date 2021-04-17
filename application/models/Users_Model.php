<?php

class Users_Model extends CI_Model {
    
    protected $table = 't_user';

    protected $primaryKey = 'id';

    public function get() {
		$this->db->select('nama, tempat, tanggal_lahir, jenis_kelamin');
		$this->db->from('t_registrasi_user');
		return $this->db->get();
	}

    public function findByUsername($username)
    {
        $this->db->select('t_user.id, t_user.username, t_user.password, t_user.access_token');
        $this->db->from($this->table);
        $this->db->where(array('t_user.username' => $username));
        return $this->db->get();
    }


    public function findByToken($token) 
    {
        return $this->db->get_where($this->table, array('access_token' => $token));
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
