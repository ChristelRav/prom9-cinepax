<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Type extends CI_Model {
    public function getOne($id) {
        $this->db->where('idtype', $id);
        $query = $this->db->get('type'); 
        return $query->row(); 
    }
    public function insert($categorie) {
        $sql = "insert into type (categorie) values (%s) ";
        $sql = sprintf($sql,$this->db->escape($categorie));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->oneAdmin($insert_id);
    }
    public function update($id,$categorie) {
        $sql = "update type set categorie=%s   where idType =%s";
        $sql = sprintf($sql,$this->db->escape($categorie),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function delete($id){
        $sql = "delete from type where idType =%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function listAll(){
        $this->db->select("*");
        $this->db->from('type');
        $query = $this->db->get();
        return $query->result();  
    }
}
?>