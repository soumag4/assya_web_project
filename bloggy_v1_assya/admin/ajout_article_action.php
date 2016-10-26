<?php

$uploaddir = '../upload/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);



echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';
	// Récupérer les valeurs des champs
	$titre= $_POST['title'];
	$sujet= $_POST['subject'];
	$img=$_FILES['userfile']['name'];

	require_once("../classes/Article.php");
	$article = new Article();
	$article->_titre = $titre;
	$article->_texte = $sujet;
	$article->_image=$img;
	
	
	
	$article->ajouter();
	header("Location:article_liste.php");
