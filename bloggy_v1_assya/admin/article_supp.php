<?php
require_once("../classes/article.php");
$id=$_GET['id'];
$a=new article();
$a-> _id=$id;
$a-> supprimer();
header("location:article_liste.php");
?>