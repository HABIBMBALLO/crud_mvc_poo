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

    public function modifier($telephone, $prenom, $nom, $id){

    }

    public function supprimer($id){

    }

    public function lister(){
        $query = $this->db->ds->prepare(" SELECT * FROM contact ORDER BY nom");
        $query->execute();
        return $query->fetchAll();
    }
}
?>