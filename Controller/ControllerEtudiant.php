<?php
require_once 'Model/Etudiant.php'; 
require_once 'Model/EtudiantTransaction.php';
require_once 'View/view.php'; 

class ControllerEtudiant {
private $etudiant ;
private $etudiantTransaction;

public function __construct() {

    $this->etudiant = new Etudiant();
    $this->etudiantTransaction = new EtudiantTransaction(); 
}
// Affiche la liste de tous les étudiants 

public function list() {
        $ets = $this->etudiantTransaction->getList(); 
       $view = new View("List"); 
       $view->generate(array('ets' => $ets));
} 

// une nouvelle action get one Etudiant
public function getOne($id) {

    
   
    $etudiant = $this->etudiantTransaction->getO($id); 
   $view = new View("Etudiant"); 
   $view->generate(array('etudiant' => $etudiant));
} 

// Ajouter un étudiant à la liste

public function insertEt()
   
 {
    
    $view =new View ("Form");
    $view->generate(array('etudiant'=>$this->etudiant));
        if(isset($_POST['submit'])){
    
            
    
         $nom= $this->etudiant-> setNom($_POST['nom']);
         $prenom=$this->etudiant-> setPrenom($_POST['prenom']);
         $age=$this->etudiant-> setAge($_POST['age']);
        $cne= $this->etudiant-> setCne($_POST['cne']);
         $etudiantt= $this->etudiantTransaction->add($this->etudiant); 
           
          
            
         header("Location:http://localhost/etudiantvf/Routing.php?action=display");
           }
     }

// Modifier les infos d'un étudiant
     

public function mj($id)
{
    

    $etudiant = $this->etudiantTransaction->getOne($id);

    $view=new View ("ListeUp");
    $view->generate(array('etudiant'=>$etudiant)); 

        
if(isset($_POST['update'])){

   
                        $this->etudiant->setId($id);
                       
                        if(isset($_POST['nom']))
                            $this->etudiant->setNom($_POST['nom']) ;
                            
                         if(isset($_POST['prenom']))
                         $this->etudiant->setPrenom($_POST['prenom']) ;
                        if(isset($_POST['age']))
                        $this->etudiant->setAge($_POST['age']) ;
                        if(isset($_POST['cne']))
                        $this->etudiant->setCne($_POST['cne']) ;


                        
          $this->etudiantTransaction->update($this->etudiant);   
                  

  header("Location:http://localhost/etudiantvf/Routing.php?action=display");

}
}

 // supprimmer un étudiant de notre liste
         
    
   public function supprimer($id){
    
   
    $this->etudiantTransaction->delete($id);

    header("Location:http://localhost/etudiantvf/Routing.php?action=display");
  
}
    
    


    
    }   

