<?php
class M_prak extends CI_Model
{
    public function addPrak($data)
    {
        $this->db->insert('praktikum', $data);
    }

    public function getPrak()
    {
        $query = $this->db->get('praktikum');
        return $query->result();
    }

    public function getPrakById($id)
    {
        $query = $this->db->get_where('praktikum', array('id' => $id));
        return $query->result();
    }

    public function editPrak($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('praktikum', $data);
    }

    public function deletePrak($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('praktikum');
    }
}
