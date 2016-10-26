<?php 
require_once("header.inc.php") ;
require_once("../classes/article.php");
$a=new article();
$liste= $a-> liste();
?>
<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Article</h2>
					<a href="ajout_article.php" class="btn btn-info btn-md">Nouveau</a>
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>titre</th>
								<th>Date</th>
								<th width="100px"></th>
								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							<?php foreach ($liste as $item) { ?>
							<tr>
								<td><?php echo $item -> _id ; ?></td>
								<td><?php echo $item -> _titre ; ?></td>
								<td><?php echo $item -> _d_ajout; ?></td>
								<td><a href="modification_article.php?id=<?php echo $item -> _id ;?>"
									 class="btn btn-info btn-xs">modifier</a></td>
								<td><a href="article_supp.php?id=<?php echo $item -> _id ;?>" 
									onclick="return confirm('supprimer?')" class="btn btn-danger btn-xs">Suprimer</a></td>

							</tr>
							<?php } ?>
							<!-- ** Fin de la boucle ** -->

							
						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
