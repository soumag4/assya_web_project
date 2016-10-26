<?php 
require_once("header.inc.php") ;
require_once("classes/article.php");
$article=new article();
$items= $article-> liste();
?>
    <div class="row" id="content">
    		<div class="col-md-9" id="content_text">
    				<?php foreach ($items as $item) { ?>
            <div class="article">
                <h2 class="title"><?php echo $item -> _titre ; ?></h2>
                <img class="article_img" src="upload/<?php echo $item->_image; ?>" >
                <p class="text_article">
                <?php echo $item ->_texte; ?>
                </p>
                <div class="date"><?php echo $item -> _d_ajout; ?></div>
                <div class="details">
                  <span class="post">posted: by assia miraoui /</span>
                 </div>
            </div>
          <?php } ?>             
        </div>
                     
    		<div class="col-md-3 hidden-xs" id="sidebar">
					Sidebar Lorem ipsum, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
    		</div>
    </div>

<?php require_once("footer.inc.php"); ?>
