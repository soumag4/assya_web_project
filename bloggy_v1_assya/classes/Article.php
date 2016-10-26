<?php
include("Mysql.php");
class Article extends Mysql 
{
	// Attributs de la classe
	private $_id;
	private $_titre;
	private $_image;
	private $_texte;
	private $_d_ajout;

	// Méthode magique pour les setters & getters
	public function __get($property) {
		if (property_exists($this, $property)) {
                return htmlentities( $this->$property );
            }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
        	
            	$this->$property = $value;
        }
    }


    // Autres méthodes
	public function ajouter()
	{
	    try {
	    $q = "INSERT INTO article(id, titre, image, texte, d_ajout) 
	    	  VALUES (null, :titre, :image, :texte, NOW())";
		$stmt = $this->get_cnx()->prepare($q);

		$stmt->bindParam(':titre', $this->_titre);
		$stmt->bindParam(':image', $this->_image);
		$stmt->bindParam(':texte', $this->_texte);

		$stmt->execute();

		return $this->get_cnx()->lastInsertId();
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}

	}
		public function liste()
	{
		$q = "SELECT * FROM article ORDER BY d_ajout ASC";
		$liste = array(); // Tableau VIDE
		$res = $this->get_cnx()->query($q);
		foreach ($res as $row)
		{
			$a = new article();

			$a->_id 	 = $row['id'];
			$a->_texte 	 = $row['texte'];
			$a->_image	 = $row['image'];
			$a->_titre 	 = $row['titre'];
			$a->_d_ajout = $row['d_ajout'];
		
			$liste[]=$a;
		}
		
		return $liste; // Renvoi un tableau d'objets
	}
	public function supprimer()
	{
		$q = "DELETE FROM article WHERE id = :id";
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->bindParam(':id', $this->_id);
		return ($stmt->execute() == true);
	}
	public function count_article(){
		$q = "SELECT COUNT(*) FROM article"; 
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->execute(); 
		$number_of_rows = $stmt->fetchColumn(); 
		return $number_of_rows;
	}
	public function count_contact(){
		$q = "SELECT COUNT(*) FROM contact"; 
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->execute(); 
		$number_of_rows = $stmt->fetchColumn(); 
		return $number_of_rows;
	}
	public function modification(){
		try{
		$q ='UPDATE article SET titre= :titre,  image = :image, texte= :texte, d_ajout=NOW() WHERE id = :id';
	    	
	        $stmt = $this->get_cnx()->prepare($q);
	        $stmt->bindParam(':titre', $this->_titre);
			$stmt->bindParam(':image', $this->_image);
			$stmt->bindParam(':texte', $this->_texte);
			$stmt->bindParam(':id', $this->_id);

			$stmt->execute();

		return $this->get_cnx()->lastInsertId();
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}

         
     
		
	}

}	
