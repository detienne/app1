<?php 

/**
 * 
 * Controller d'article de l'application
 * 
 * @category    App1
 * @package     Core
 */

class ArticleController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $articleMapper = new Core_Model_Mapper_Article();
        $auteurMapper = new Core_Model_Mapper_Auteur();
		$this->view->articles = $articleMapper->findLasts();
		foreach ($this->view->articles as $article)
		{
			$article->auteur = $auteurMapper->find($article->getAuteurId());
		}
    }
}