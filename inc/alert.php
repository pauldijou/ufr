<?php
if(count($alert) > 0) {
?>
	<div class="alert alert-<?php echo($alert["severity"]); ?> fade in">
		<a href="#" data-dismiss="alert" class="close">×</a>
		<?php echo($alert["content"]); ?>
	</div>
<?php
}
?>