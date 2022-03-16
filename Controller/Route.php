<?php
 require_once 'Controller/ControllerEtudiant.php'; 
 require_once 'View/view.php';

 class Route{

 private $ctrlEtudiant;

 public function __construct() {
    $this->ctrlEtudiant = new ControllerEtudiant(); 
}

public function routeRequest() { 
     
try {
        if (isset($_GET['action'])) {

                if ($_GET['action'] == 'display') {
                            $this->ctrlEtudiant->list(); 
                }

                else if ($_GET['action'] == 'adduser') {
                       // die($_GET['id']);
                        $this->ctrlEtudiant-> insertEt() ;

                }else if ($_GET['action'] == 'update') {
                        // die($_GET['id']);
                         $this->ctrlEtudiant-> mj($_GET['updateid']) ;
                        
                 }else if ($_GET['action'] == 'delete') {
                        // die($_GET['id']);
                         $this->ctrlEtudiant-> supprimer($_GET['deleteid']) ;
                        
                 }else {
                        throw new Exception("Action not valid");
                } 
        }else{
                throw new Exception("Controller not valid");
        } 
}catch (Exception $e) {

        $this->erreur($e->getMessage()); 
}
 }
   // Affiche une erreur
 private function erreur($msgErreur) {

 $view = new View("Error"); 
 $view->generate(array('msgErreur' => $msgErreur));

 } 

}
  