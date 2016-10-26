<?php 
require_once("header.inc.php") ;
require_once("../classes/mysql.php");
$id=$_GET['id'];
$q= "SELECT * FROM `article` WHERE `id` = $id";
$m=new Mysql();
$res = $m->get_cnx()->query($q);
$tab=$res->fetch(PDO::FETCH_ASSOC);


?>
 <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Rediger votre Article</h2>
                        <form class="form-horizontal col-xs-8" action="article_mod.php" method="POST">
                            <div class="row">
                                 <div class="form-group">

                                    <label class="col-sm-2 control-label" for=
                                    "subject">id:<?php echo $tab['id'] ?></label>
                                    <input class="form-control col-sm-10"
                                        id="id" name="id" required="" type="text" value="<?php echo $tab['id'] ?>">
                                </div>
                                <div class="form-group">

                                    <label class="col-sm-2 control-label" for=
                                    "subject">Titre:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control col-sm-10"
                                        id="titre" name="titre" required="" type="text" value="<?php echo $tab['titre'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for=
                                    "subject">texte</label>
                                    <div class="col-sm-10">
                                        <input class="form-control col-sm-10"
                                        id="text" name="text" required="" type="text" value="<?php echo $tab['texte'] ?>">
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <form enctype="multipart/form-data" action="util.php" method="post">
                                        <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                                        Envoyez ce fichier : <input name="userfile" type="file" />
                                    </form>
                                </div>
                                 <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("footer.inc.php"); ?>

