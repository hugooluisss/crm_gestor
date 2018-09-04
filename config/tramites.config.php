<?php
global $conf;

$conf['tramites'] = array(
	'controlador' => 'tramites.php',
	'vista' => 'tramites/panel.tpl',
	'descripcion' => 'Administración del catálogo de trámites',
	'seguridad' => true,
	'js' => array('tramite.class.js'),
	'jsTemplate' => array('tramites.js'),
	'capa' => LAYOUT_BACKEND);

$conf['listatramites'] = array(
	'controlador' => 'tramites.php',
	'vista' => 'tramites/lista.tpl',
	'descripcion' => 'Lista de tramites',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ctramites'] = array(
	'controlador' => 'tramites.php',
	'descripcion' => 'Controlador de tramites',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>