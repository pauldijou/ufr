<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		
			<a class="brand" href="?page=home">Histoire de l'Art et Archéologie</a>
			
			<div class="nav-collapse">
				<ul class="nav">
					<li class="divider-vertical"></li>
					<li class="<?php if(is_active("home")) {echo("active");} ?>"><a href="?page=home">Accueil</a></li>
					
					<li class="divider-vertical"></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Découvrir le Département<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="<?php if(is_active("mot-direction")) {echo("active");} ?>"><a href="?page=mot-direction">Les mots de la direction</a></li>
							<li class="<?php if(is_active("equipe-pedagogique")) {echo("active");} ?>"><a href="?page=equipe-pedagogique">Equipe pédagogique</a></li>
							<li class="<?php if(is_active("equipe-administrative")) {echo("active");} ?>"><a href="?page=equipe-administrative">Equipe administrative</a></li>
							<li class="<?php if(is_active("conseil-ufr")) {echo("active");} ?>"><a href="?page=conseil-ufr">Conseil d'UFR</a></li>
						</ul>
					</li>
					
					<li class="divider-vertical"></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Les Formations<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="nav-header">La Licence</li>
							<li class="<?php if(is_active("licence")) {echo("active");} ?>"><a href="?page=licence">Généralités</a></li>
							<li class="<?php if(is_active("licence1")) {echo("active");} ?>"><a href="?page=licence1">Licence 1</a></li>
							<li class="<?php if(is_active("licence2")) {echo("active");} ?>"><a href="?page=licence2">Licence 2</a></li>
							<li class="<?php if(is_active("licence3")) {echo("active");} ?>"><a href="?page=licence3">Licence 3</a></li>
							<li class="<?php if(is_active("licence-bidisciplinaire")) {echo("active");} ?>"><a href="?page=licence-bidisciplinaire">Licence bi-disciplinaire</a></li>
							<li class="<?php if(is_active("option-nonspecialiste")) {echo("active");} ?>"><a href="?page=option-nonspecialiste">Options non spécialistes</a></li>
							<li class="divider"></li>
							<li class="nav-header">Le Master recherche</li>
							<li class="<?php if(is_active("master-recherche")) {echo("active");} ?>"><a href="?page=master-recherche">Généralités</a></li>
							<li class="<?php if(is_active("master-prehistoire")) {echo("active");} ?>"><a href="?page=master-prehistoire">Préhistoire</a></li>
							<li class="<?php if(is_active("master-antiquite")) {echo("active");} ?>"><a href="?page=master-antiquite">Antiquité</a></li>
							<li class="<?php if(is_active("master-medieval")) {echo("active");} ?>"><a href="?page=master-medieval">Médiéval</a></li>
							<li class="<?php if(is_active("master-patrimoine")) {echo("active");} ?>"><a href="?page=master-patrimoine">Moderne et Contemporain</a></li>
							<li class="divider"></li>
							<li class="nav-header">Le Master professionnel</li>
							<li class="<?php if(is_active("master-professionnel-patrimoine")) {echo("active");} ?>"><a href="?page=master-professionnel-patrimoine">Patrimoine</a></li>
							<li class="<?php if(is_active("master-professionnel-regie")) {echo("active");} ?>"><a href="?page=master-professionnel-regie">Régie des oeuvres d'art</a></li>
							<li class="divider"></li>
							<li class="<?php if(is_active("etudes-doctorales")) {echo("active");} ?>"><a href="?page=etudes-doctorales">Les Etudes doctorales</a></li>
						</ul>
					</li>
					
					<li class="divider-vertical"></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Vie étudiante<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="<?php if(is_active("ressources-pedagogiques")) {echo("active");} ?>"><a href="?page=ressources-pedagogiques">Ressources pédagogiques</a></li>
							<li class="<?php if(is_active("associations")) {echo("active");} ?>"><a href="?page=associations">Associations étudiantes</a></li>
						</ul>
					</li>
					
					<li class="divider-vertical"></li>
					
					<li class="<?php if(is_active("aide")) {echo("active");} ?>"><a href="?page=aide">Aide</a></li>
					
					<li class="divider-vertical"></li>
					
					<li class="show-on-large-screen"><a data-toggle="modal" href="#feedbackModal">Contact</a></li>
					<li class="show-on-small-screen <?php if(is_active("feedback")) {echo("active");} ?>"><a href="?page=feedback">Contact</a></li>
					<li class="divider-vertical"></li>
				</ul>
			</div>
		</div>
	</div>
</div>