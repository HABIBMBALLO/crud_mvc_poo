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
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    extract($_POST);
                    $this->contactModel->inserer($tel,$prenom,$nom);
                    header("location:/CRUD_MVC_POO/index.php");
                }
                break;
                case 'supprimer':
                    if (isset($_GET['id'])) {
                        // $id = $_GET['id'];
                        $resultat = $this->contactModel->supprimer($id);
                        if ($resultat){
                            header("location:/CRUD_MVC_POO/index.php");
                        }
                    }
                    break;
                    case 'modification':
                        if (isset($_POST['modif'])) {
                            extract($_POST);
                            $this->contactModel->modifier($tel,$prenom,$nom,$id);
                            header("location:/CRUD_MVC_POO/index.php");
                        }
                        break;
            
            default:
                # code...
                break;
        }
        if ($action == 'add') {
            if (isset($_POST['add'])) {
                extract($_POST);
                $this->contactModel->inserer($tel,$prenom,$nom);
                header("location:/CRUD_MVC_POO/index.php");
            }
        }

    }

    public function supprimer($id){
        $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id =:idContact");
        $sql->bindValue(":idContact",$id);
        return $sql->execute();
    }

    public function includeView($page='liste'){
        if ($page == "liste") {
            $contacts = $this->contactModel->lister();
            include 'view/contact/'.$page.'.php';
        }
        else {
            if ($page == "modification" && isset($_GET['id'])) {
                $contacts = $this->contactModel->findContactById($_GET['id']);
                include 'view/contact/'.$page.'.php';
            }else{

                include 'view/contact/'.$page.'.php';
            }
            
            }
        }
        
    }
    

?>
