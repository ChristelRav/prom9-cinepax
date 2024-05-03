<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Film extends CI_Model {
    public function getOne($id) {
        $this->db->where('idfilm', $id);
        $query = $this->db->get('film'); 
        return $query->row(); 
    }
    public function insert($idType, $nom) {
        $sql = "insert into film (idType,nom) values ( %s, %s) ";
        $sql = sprintf($sql,$this->db->escape($idType),$this->db->escape($nom));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->oneAdmin($insert_id);
    }
    public function update($id,$idType, $nom, $duree,$synopsis) {
        $sql = "update film set idType=%s ,nom=%s , duree=%s , synopsis=%s  where idFilm =%s";
        $sql = sprintf($sql,$this->db->escape($idType),$this->db->escape($nom),$this->db->escape($duree),$this->db->escape($synopsis),$this->db->escape($id));
        $this->db->query($sql);
    }
    public function delete($id){
        $sql = "delete from film where idFilm =%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function listAll(){
        $this->db->select("*");
        $this->db->from('film');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();  
    }
    // FILM - TYPE
    public function listFilmType(){
        $this->db->select("*");
        $this->db->from('film f');
        $this->db->join('type t', 't.idtype = f.idtype');
        $query = $this->db->get();
        return $query->result();  
    }
    // INSERT ALL
    public function insertAll($idType, $nom , $duree, $synopsis) {
        $sql = "insert into film (idType,nom,duree,synopsis) values ( %s, %s, %s, %s) ";
        $sql = sprintf($sql,$this->db->escape($idType),$this->db->escape($nom),$this->db->escape($duree),$this->db->escape($synopsis));
        $this->db->query($sql);

        $insert_id = $this->db->insert_id();
        return $this->getOne($insert_id);
    }
    // FILM & PROJECTION
    public function listScreenMovie() {
        $this->db->select("f.idfilm,f.synopsis,f.duree,f.nom, pf.dateheureprojection");
        $this->db->from('projectionfilm pf ');
        $this->db->join('film f', 'pf.idfilm = f.idfilm');
        $this->db->where('pf.dateHeureProjection >', 'CURRENT_TIMESTAMP', FALSE);
        $this->db->order_by('f.nom, pf.dateheureprojection', 'DESC');
        $query = $this->db->get();
        $resultats = array();
        foreach ($query->result() as $row) {
            $resultats[$row->idfilm]['idfilm'] = $row->idfilm;
            $resultats[$row->idfilm]['synopsis'] = $row->synopsis;
            $resultats[$row->idfilm]['nom'] = $row->nom;
            $resultats[$row->idfilm]['duree'] = $row->duree;
            $resultats[$row->idfilm]['datepf'][] = $row->dateheureprojection;
        }
        return $resultats;
    }
    
}
?>