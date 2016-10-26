<?php 
require_once("header.inc.php") ;
?>
 <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Rediger votre Article</h2>
                        <form class="form-horizontal col-xs-8" action="ajout_article_action.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for=
                                    "subject">Titre:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control col-sm-10"
                                        id="anas" name="title" required="" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for=
                                    "subject">Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id=
                                        "subject" name="subject"
                                        required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                        Select image to upload:
                                        <input type="file" name="userfile" id="userfile">
                                </div>
                                <input type="submit" value="Envoyer" class="btn btn-default">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php require_once("footer.inc.php"); ?>
