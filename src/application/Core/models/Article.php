<?php 


class Core_Model_Article
{
    private $id;
    
    private $titre;
    
    private $resume;
    
    private $auteurPrenom;
    
    private $auteurNom;
    
    private $auteurId;
    
	/**
	 * @return the $auteurId
	 */
	public function getAuteurId() {
		return $this->auteurId;
	}

	/**
	 * @param field_type $auteurId
	 */
	public function setAuteurId($auteurId) {
		$this->auteurId = $auteurId;
	}

	/**
	 * @return the $auteurPrenom
	 */
	public function getAuteurPrenom() {
		return $this->auteurPrenom;
	}

	/**
	 * @return the $auteurNom
	 */
	public function getAuteurNom() {
		return $this->auteurNom;
	}

	/**
	 * @param field_type $auteurPrenom
	 */
	public function setAuteurPrenom($auteurPrenom) {
		$this->auteurPrenom = $auteurPrenom;
	}

	/**
	 * @param field_type $auteurNom
	 */
	public function setAuteurNom($auteurNom) {
		$this->auteurNom = $auteurNom;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $titre
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * @return the $resume
	 */
	public function getResume() {
		return $this->resume;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $titre
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
	}

	/**
	 * @param field_type $resume
	 */
	public function setResume($resume) {
		$this->resume = $resume;
	}  
    
}