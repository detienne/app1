<?php 

class Core_Model_Auteur
{
	private $id;
	
	private $nom;
	
	private $prenom;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $nom
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * @return the $prenom
	 */
	public function getPrenom() {
		return $this->prenom;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $nom
	 */
	public function setNom($nom) {
		$this->nom = $nom;
	}

	/**
	 * @param field_type $prenom
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

}