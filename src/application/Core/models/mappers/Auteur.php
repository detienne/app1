<?php 

class Core_Model_Mapper_Auteur
{
    
    public function find($id)
    {
        $dbTable = new Core_Model_DbTable_Auteur();
        $rowset = $dbTable->find($id);
        $row = $rowset->current();

        $auteur = new Core_Model_Auteur();
        $auteur->setId($row->auteur_id);
        $auteur->setNom($row->auteur_nom);
		$auteur->setPrenom($row->auteur_prenom);
        
        return $auteur;
        
    }
}