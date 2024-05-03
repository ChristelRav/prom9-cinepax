<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Produit extends CI_Model {
    public function getOne($id) {
        $this->db->where('idproduit', $id);
        $query = $this->db->get('produit'); 
        return $query->row(); 
    }
    public function insert($produit, $prix) {
        $sql = "insert into produit (produit,prix) values ( %s, %s) ";
        $sql = sprintf($sql,$this->db->escape($produit),$this->db->escape($prix));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->getOne($insert_id);
    }
    public function update($id,$produit, $prix) {
        $sql = "update produit set produit=%s , prix=%s   where idProduit =%s";
        $sql = sprintf($sql,$this->db->escape($produit),$this->db->escape($prix),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function delete($id){
        $sql = "delete from produit where idProduit =%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function listAll(){
        $this->db->select("*");
        $this->db->from('produit');
        $query = $this->db->get();
        return $query->result();  
    }
}
?>