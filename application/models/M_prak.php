<?php
    class M_prak extends CI_Model{
        public function addPrak($data){
            $this->db->insert('prak', $data);
        }

        public function getPrak(){
            $query = $this->db->get('prak');
            return $query->result();
        }

        public function getPrakById($id){
            $query = $this->db->get_where('prak', array('id' => $id));
            return $query->result();
        }

        public function editPrak($id, $data){
            $this->db->where('id', $id);
            $this->db->update('prak', $data);
        }

        public function deletePrak($id){
            $this->db->where('id', $id);
            $this->db->delete('prak');
        }
    }
?>