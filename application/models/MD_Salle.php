<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Salle extends CI_Model {
    public function getOne($id) {
        $this->db->where('idsalle', $id);
        $query = $this->db->get('salle'); 
        return $query->row(); 
    }
    public function insert($salle, $maxplace) {
        $sql = "insert into salle (salle,maxPlace) values ( %s, %s) ";
        $sql = sprintf($sql,$this->db->escape($salle),$this->db->escape($maxplace));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->getOne($insert_id);
    }
    public function update($id,$salle, $maxplace) {
        $sql = "update salle set salle=%s , maxPlace=%s   where idSalle =%s";
        $sql = sprintf($sql,$this->db->escape($salle),$this->db->escape($maxplace),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function delete($id){
        $sql = "delete from salle where idSalle =%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function listAll(){
        $this->db->select("*");
        $this->db->from('salle');
        $query = $this->db->get();
        return $query->result();  
    }
}
?>