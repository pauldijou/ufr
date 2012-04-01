<?php
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "home";
}

$authorized_pages = array();
$authorized_pages[] = "home";
$authorized_pages[] = "mot-direction";
$authorized_pages[] = "equipe-pedagogique";
$authorized_pages[] = "equipe-administrative";
$authorized_pages[] = "conseil-ufr";
$authorized_pages[] = "licence";
$authorized_pages[] = "licence1";
$authorized_pages[] = "licence2";
$authorized_pages[] = "licence3";
$authorized_pages[] = "licence3";
$authorized_pages[] = "licence-bidisciplinaire";
$authorized_pages[] = "option-nonspecialiste";
$authorized_pages[] = "master-recherche";
$authorized_pages[] = "master-prehistoire";
$authorized_pages[] = "master-antiquite";
$authorized_pages[] = "master-medieval";
$authorized_pages[] = "master-patrimoine";
$authorized_pages[] = "master-professionnel-regie";
$authorized_pages[] = "master-professionnel-patrimoine";
$authorized_pages[] = "etudes-doctorales";
$authorized_pages[] = "ressources-pedagogiques";
$authorized_pages[] = "associations";
$authorized_pages[] = "feedback";

$form_pages = array();
$form_pages[] = "feedback";

if(!in_array($page,$authorized_pages)) {
	$page = "404";
}

function is_active($menu_page) {
	global $page;
	return ($page == $menu_page);
}

function is_form() {
	global $page, $form_pages;
	return (in_array($page, $form_pages));
}
?>