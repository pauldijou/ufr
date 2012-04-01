<div id="myCarouselWrapper" class="visible-desktop" style="margin-bottom: 15px;">
	<h1>Bienvenue au département d'Histoire de l'Art et Archéologie</h1>
	<?php
		$list_img = array();
		
		// Ajout des images a la liste
		// $list_img[] = array("title" => "Titre caption", "summary" => "Content caption", "src" => "4.JPG");
		$list_img[] = array("src" => "1.JPG");
		$list_img[] = array("src" => "4.JPG");
		$list_img[] = array("src" => "9.JPG");
		$list_img[] = array("src" => "11.JPG");
		$list_img[] = array("src" => "17.JPG");
		$list_img[] = array("src" => "23.JPG");
		
		// Taille
		$carousel_width = 600;
		$carousel_height = 400;
		
		// Affichage automatique
		if(count($list_img) > 0) {
	?>
	<div style="width:<?php echo($carousel_width); ?>px;height:<?php echo($carousel_height); ?>px;margin:0px auto;">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
			
			<?php
				$i = 0;
				foreach($list_img as $img) {
					$i++;
			?>
				<div class="item <?php if($i == 1) {echo("active");} ?>">
					<div id="myCarouselImg<?php echo($i); ?>"></div>
					<?php
						if(strlen($img["title"]) > 0 || strlen($img["summary"]) > 0) {
					?>
					<div class="carousel-caption">
						<?php if(strlen($img["title"]) > 0) { echo("<h4>".$img["title"]."</h4>"); } ?>
						<?php if(strlen($img["summary"]) > 0) { echo("<p>".$img["summary"]."</p>"); } ?>
					</div>
					<?php
						}
					?>
				</div>
		   <?php
				}
			?>
			
			</div>
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<?php
       	  $i = 0;
       	  $script_carousel = "<script>if(window.outerWidth > 979) { ";
       	  foreach($list_img as $img) {
       	    $i++;
            $script_carousel .= '$("#myCarouselImg'.$i.'").replaceWith(\'<img src="img/'.$img["src"].'" style="width:'.$carousel_width.'px;height:'.$carousel_height.'px;"/>\');';
          }
          $script_carousel .= ' } else { $("#myCarouselWrapper").remove() }</script>';
       	 
          echo($script_carousel);
		}
	?>
</div>

<div class="visible-desktop">
 <blockquote class="pull-right" style="text-align: justify;">
 L'UFR d'Histoire de l'Art et Archéologie a le plaisir de vous accueillir cette année avec une nouvelle offre de formation encore plus complète et diversifiée. Le site WEB de l'UFR d'Histoire de l'Art et Archéologie est un instrument essentiel de notre communication. Il met à votre disposition les informations utiles pour votre parcours de formation tout au long de l'année.
 <br/><br/>
 A votre service et au plaisir de vous compter parmi nos étudiant(e)s.
 <br/><br/>
 <small>C. MANGE, Directeur du département Histoire de l'Art et Archéologie</small>
 <small>
 E. GALBOIS, Directrice adjointe du département Histoire de l'Art et Archéologie
 </small>
 </blockquote>
 <br style="clear:both;"/>
</div>

<?php
	$list_news = array();
	
	// Ajout des actualites a la liste
	// 1) News avec contenu dépliable
	// $list_news[] = array('title' => 'Titre', 'date' => '2012-03-22T16:00:00Z', 'summary' => '<p>Résumé avant le bouton</p>', 'content' => '<p>Contenu affiché après clic sur le bouton</p>');
	// 2) News sans contenu dépliable
	// $list_news[] = array('title' => 'Titre', 'date' => '2012-03-22T16:00:00Z', 'summary' => '<p>Résumé avant le bouton</p>');
	// 3) Format ISO de la date :
	// aaaa-mm-jjThh:mi:ssZ (ex : 2012-03-22T21:54:34Z)
	// aaaa : année sur 4 chiffres (ex : 2012)
	// mm : mois sur 2 chiffres de 01 à 12 (ex : 03)
	// jj : jour sur 2 chiffres de 01 à 31 (ex : 01)
	// hh : heure sur 2 chiffres de 00 à 23 (ex : 20)
	// mi : minutes sur 2 chiffres de 00 à 59 (ex : 58)
	
	
	$list_news[] = array('title' => 'Calendrier des examens de session 1 du 2<sup>nd</sup> semestre',
	                     'date' => '2012-03-22T16:28:00Z', 
	                     'summary' => '<p>Accéder au <a href="pdf/Calendrier-Dpt-Histoire-de-l-art-2eme-semestre-2b.pdf" target="_blank">calendrier des examens du 2<sup>nd</sup> semestre</a></p>');
	
	$list_news[] = array('title' => 'Consultation des copies',
	                     'date' => '2010-03-02T09:05:02Z',
	                     'summary' => '<p>La consultation des copies aura lieu le jeudi 15 mars de 12h à 14h en salle H110</p>');
	
	
	// Affichage automatique
	if(count($list_news) > 0) {
?>
	<h1>Actualités</h1>
<?php
		$i = 0;
		foreach($list_news as $news) {
			$i++;
?>
	<div class="news">
	    <h2><?php echo($news["title"]); ?></h2>
		<p class="prettyDate" title="<?php echo($news["date"]); ?>"></p>
	    <?php echo($news["summary"]); ?>
		<?php
			if(array_key_exists("content", $news))
			{
		?>
				<p>
					<button class="btn btn-primary" data-toggle="collapse" data-target="#news-content-<?php echo($i); ?>" onclick="$(this).toggleClass('expanded').toggleClass('btn-primary').toggleClass('btn-danger')">
						<span class="show-news">
							<i class="icon-search icon-white"></i>
							Lire la suite...
						</span>
						<span class="hide-news">
							<i class="icon-remove icon-white"></i>
							Masquer
						</span>
					</button>
				</p>
		
				<div id="news-content-<?php echo($i); ?>" class="collapse">
					<?php echo($news["content"]); ?>
				</div>
		<?php
			}
		?>
	</div>
	
	<script>
		$("div.news .prettyDate").prettyDate();
		setInterval(function(){ $("div.news .prettyDate").prettyDate(); }, 10000);
	</script>

<?php
		}
	}
?>