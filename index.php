<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UTM - Département Histoire de l'Art et Archéologie</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/prettify.css">
	<link rel="stylesheet" href="css/override.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/prettydate.js"></script>
    
    <?php
		// Config
		$errorLevel = 0;
		$alert = array();
		$emailFeedback = "ufr.haa.contact@gmail.com";
		
		error_reporting($errorLevel);

		include("inc/functions.php");
		include("inc/pages.php");
		include("inc/feedback.php");
	?>
</head>

<body>
    <?php include("inc/navbar.php"); ?>

	<div class="container">
		<div class="row">
			<div class="span10 offset1">
				<?php include("inc/alert.php"); ?>
			
                <div class="well <?php if(is_form()) {echo("well-form"); } ?>">
					<?php
						include("pages/".$page.".php");
					?>
                </div>
			</div>
		</div>
      
		<?php include("inc/footer.php"); ?>
    </div>
	
	
	<script>
		if(window.outerWidth > 979) {
			document.write('<div class="modal fade hide" id="feedbackModal"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Contact</h3></div><form class="form-horizontal" method="POST" action="#"><div class="modal-body"><?php displayFeebbackFields("modal"); ?></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Annuler</a><button class="btn btn-primary" type="submit" name="submitFeedbackModal">Envoyer</button></div></form></div>');
		}
	</script>
	
	<script>
		$(function () { prettyPrint() });
		$('.carousel').carousel({
			interval: 3000
		});
		
		
		<?php if($feedbackHasError && $feedbackSubmitedFromModal && $page != "feedback") {echo("$('#feedbackModal').modal('show');");} ?>
	</script>
</body>
</html>