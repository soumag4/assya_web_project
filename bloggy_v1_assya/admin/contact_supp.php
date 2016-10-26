<?php
require_once("../classes/Contact.php");
$id=$_GET['id'];
$c=new contact();
$c-> _id=$id;
$c-> supprimer();
header("location:contact_liste.php");
?>