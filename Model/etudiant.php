<?php
class Etudiant {

private $_id; 
private $_nom; 
private $_prenom; 
private $_age;
private $_cne;

public function __construct  ($id=NULL, $nom=NULL ,$prenom=NULL, $age=NULL ,  $cne=NULL){ 
    $this->_id = $id ;   
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_age =  $age; 
    $this->_cne = $cne;
}

public function getId() {
    return $this->_id; 
}
public function getNom() {
    return $this->_nom; 
}
public function getPrenom() {
    return $this->_prenom; 
}

public function getAge() {
    return $this->_age; 
}
public function getCne() {
    return $this->_cne; 
}



public function setId($id) {
    $this->_id = (int) $id; 
}

public function setNom($nom) {
    if (is_string($nom)) {
        $this->_nom = $nom; 
    }
    
}

public function setPrenom($prenom) {
    if (is_string($prenom)) {

        $this->_prenom = $prenom; 
    }
}
public function setAge($age) {
    $this->_age = (int) $age; 
    
}
public function setCne($cne) {
    $this->_cne = $cne; 
    
}
    
} ?>