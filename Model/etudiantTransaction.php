<?php
class EtudiantTransaction {

private $_db; // Instance de PDO

public function __construct() {
        $this->_db = new PDO('mysql:host=localhost;dbname=etudiants;charset=utf8', 'root', ''); 
}
public function add($et) {
    $q = $this->_db->prepare("INSERT INTO etudiant (nom, prenom, age,cne) VALUES(:nom, :prenom, :age,:cne )");
    $q->bindValue(':nom', $et->getNom()); 
    $q->bindValue(':prenom', $et->getPrenom() ); 
    $q->bindValue(':age', $et->getAge(), PDO::PARAM_INT);
    $q->bindValue(':cne', $et->getCne());
    $q->execute(); 
}
public function delete($id) {
    $id = (int) $id;
    $q = $this->_db->prepare("DELETE FROM etudiant WHERE id_etudiant = :id");
    $q->bindValue(':id', $id, PDO::PARAM_INT);
    $q->execute();
}



public function getList() {
 
    $ets = [];
    $q = $this->_db->query('SELECT * FROM etudiant ORDER BY id_etudiant');
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
       // die($donnees['nom']);
         $p = new Etudiant($donnees['id_etudiant'], $donnees['nom'] , $donnees['prenom'] , $donnees['age']  , $donnees['cne']);

         array_push($ets , $p);
        //$ets.push($p) ; 
    }
return $ets; 

}
public function update($et) {
    $q = $this->_db->prepare('UPDATE etudiant SET nom = :nom, prenom = :prenom, age = :age,cne=:cne WHERE id_etudiant =:id');
                

    $q->bindValue(':nom', $et->getNom() ); 
    $q->bindValue(':prenom', $et->getPrenom()); 
    $q->bindValue(':age',$et->getAge(), PDO::PARAM_INT );
    $q->bindValue(':cne', $et->getCne());
    $q->bindValue(':id', $et->getId());
    
    $q->execute(); 

}

public function setDb(PDO $db) {
    $this->_db = $db; 

}

public function getOne($id){
    $id = (int) $id;
    $q = $this->_db->query('SELECT id_etudiant, nom, prenom, age, cne FROM etudiant WHERE id_etudiant = '.$id); 
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    return new Etudiant($donnees['id_etudiant'],$donnees['nom'] , $donnees['prenom'] , $donnees['age']  , $donnees['cne']);
}

}
?>