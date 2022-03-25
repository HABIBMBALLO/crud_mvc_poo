<?php
require_once 'model/ContactModel.php';


class ContactController {

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function viewManager(){
        $view = isset($_GET['view']) ? $_GET['view'] : null;
        switch ($view) {
            case 'ajout':
                $this->includeView($view);
                break;
            case 'modification':
                $this->includeView($view);
                break; 

            default:
            $this->includeView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : null;
        if ($action == 'add') {
            if (isset($_POST['add'])) {
                extract($_POST);
                $this->contactModel->inserer($tel,$prenom,$nom);
                header("location:/CRUD_MVC_POO/index.php");
            }
        }else {
            if ($action == "supprimer") {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $resultat = $this->contactModel->supprimer($id);
                    if ($resultat){
                        header("location:/CRUD_MVC_POO/index.php");
                    }
                }
            }
        }

    }

    public function supprimer($id){
        $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id =:idContact");
        $sql->bindValue(":idContact",$id);
        return $sql->execute();
    }
    public function includeView($page='liste'){
        if ($page != "liste") {
            include 'view/contact/'.$page.'.php';
        }
        else{
            $contacts = $this->contactModel->lister();
            include 'view/contact/'.$page.'.php';
        }
        
        
    }
    
    
    
        
    
}
?>