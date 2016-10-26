<?php require_once("header.inc.php");
require_once("../classes/article.php");
$a=new article();
$nb_article= $a->count_article();
$nb_contact= $a->count_contact();
 ?>
<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>

					<div class="alert alert-success">
						Nombre d'articles :<?php echo $nb_article ?>
					</div>

					<div class="alert alert-success">
						Nombre de demande de contact :<?php echo $nb_contact ?>
					</div>

				</div>
				
				<!--<form enctype="multipart/form-data" action="upload.php" method="post">
				
					Envoyez ce fichier : <input name="userfile" type="file" />
					<input type="submit" value="Envoyer le fichier" />
				</form>-->

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>