<?php
    class M_matkul extends CI_Model{
        public function getMatkul(){
            $query = $this->db->get('matakuliah');
            return $query->result();
        }

        public function getMatkulById($id){
            $query = $this->db->get_where('matakuliah', array('id' => $id));
            return $query->result();
        }

        public function addMatkul($data){
            $this->db->insert('matakuliah', $data);
        }

        public function editMatkul($id, $data){
            $this->db->where('id', $id);
            $this->db->update('matakuliah', $data);
        }

        public function deleteMatkul($id){
            $this->db->where('id', $id);
            $this->db->delete('matakuliah');
        }
    }
?>