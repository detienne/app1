<?php 

class Core_Model_Mapper_Article
{
    
    public function find($id)
    {
        $dbTable = new Core_Model_DbTable_Article();
        $rowset = $dbTable->find($id);
        $row = $rowset->current();

        $article = new Core_Model_Article();
        $article->setId($row->article_id);
        $article->setTitre($row->article_titre);
		$article->setResume($row->article_resume);
		$article->setAuteurId($row->auteur_id);
        
        return $article;
        
    }
    
    public function findLasts()
    {
    	$dbTable = new Core_Model_DbTable_Article();
        
        $rowset = $dbTable->fetchAll(
        		$dbTable->select()
        				->order('article_id DESC')
        				->limit(5, 0)
        		);
        $cpt=0;
		
        foreach ($rowset as $row)
        {
        	$articles[$cpt] = new Core_Model_Article();
	        $articles[$cpt]->setId($row->article_id);
	        $articles[$cpt]->setTitre($row->article_titre);
			$articles[$cpt]->setResume($row->article_resume);
			$articles[$cpt]->setAuteurId($row->auteur_id);
			$cpt++;
        }
        return $articles;
    }
}