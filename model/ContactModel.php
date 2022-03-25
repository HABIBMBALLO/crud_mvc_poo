<?php
require_once 'DB.php';
class ContactModel{
    private $db;

    public function __construct()
    {
        //instentiation de la classe db
        $this->db = new DB();
    }
    public function inserer($tel,$prenom,$nom)
    {
        //preparer la requette
        $queryPrepare = $this->db->ds->prepare(
            "INSERT INTO contact(prenom, nom, telephone) VALUES (?, ?, ?)");
        // executer les requette
        return $queryPrepare->execute(array($prenom, $nom, $tel));

    }  
    
    public function modifier($tel, $prenom, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE contact SET tel = ?, prenom = ?, nom = ? WHERE id = ?");
        return $query->execute(array($tel,$prenom,$nom,$id));
    }

    public function supprimer($id){
        
    }

    public function lister(){
        $query = $this->db->ds->prepare(" SELECT * FROM contact ORDER BY nom");
        $query->execute();
        return $query->fetchAll();
    }

    public function findContactById(){
        $query = $this->db->ds->prepare(" SELECT * FROM contact WHERE id =?");
        $query->execute(array('$id'));
        return $query->fetch();
    }
}
?>