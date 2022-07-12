<?php

class M_users extends CI_model
{
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        if ($query = $this->db->get()) {
            if ($password == $query->row()->password) {
                return $query->row_array();
            } else {
                return false;
            };
        } else {
            return false;
        }
    }

    public function getDataUsers(){
        $query = $this->db->get('users');
        return $query->result();
    }
    public function addData($data){
        $this->db->insert('users', $data);
    }
    public function getData($nim){
        $query = $this->db->get_where('users', array('nim' => $nim));
        return $query->result();
    }
    
    public function editData($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('users', $data);
    }

    public function delete($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('users');
    }
}
