<?php
class M_auth extends CI_model
{
    public function login($username, $password)
    {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        if ($query = $this->db->get()) {
            if ($password==$query->row()->password) {
                return $query->row_array();
            } else {
                return false;
            };
        } else {
            return false;
        }
    }
}
