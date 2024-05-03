<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Seance extends CI_Model {
    public function getOne($id) {
        $this->db->where('idprojectionfilm', $id);
        $query = $this->db->get('projectionfilm'); 
        return $query->row(); 
    }
    public function insert($idFilm,$idSalle,$dateHeureProjection) {
        $sql = "insert into projectionFilm  (idfilm,idsalle,dateheureprojection) values ( %s, %s, %s) ";
        $sql = sprintf($sql,$this->db->escape($idFilm),$this->db->escape($idSalle),$this->db->escape($dateHeureProjection));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->getOne($insert_id);
    }
    public function update($id,$idFilm,$idSalle,$dateHeureProjection) {
        $sql = "update projectionFilm set  idfilm=%s ,idsalle=%s , dateheureprojection=%s  where idprojectionfilm =%s";
        $sql = sprintf($sql,$this->db->escape($idFilm),$this->db->escape($idSalle),$this->db->escape($dateHeureProjection),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function delete($id){
        $sql = "delete from projectionFilm where idprojectionfilm =%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function listAll(){
        $this->db->select("*");
        $this->db->from('projectionFilm');
        $query = $this->db->get();
        return $query->result();  
    }
    // PROJECTION - FILM - SALLE - TYPE
    public function getProjectionFilm($idfilm, $datepf) {
        $this->db->select('pf.idfilm, f.idtype, pf.idprojectionfilm, pf.idsalle, f.nom, f.duree, f.synopsis, t.categorie, s.salle, pf.dateheureprojection');
        $this->db->from('projectionfilm pf');
        $this->db->join('film f', 'pf.idfilm = f.idfilm');
        $this->db->join('salle s', 'pf.idsalle = s.idsalle');
        $this->db->join('type t', 'f.idtype = t.idtype');
        $this->db->where('pf.idfilm', $idfilm);
        $this->db->where('pf.dateheureprojection', $datepf);
        $query = $this->db->get();
        return $query->row();       
    }
    
}
?>