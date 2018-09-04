<?php
global $conf;

$conf['grupos'] = array(
	'controlador' => 'grupos.php',
	'vista' => 'grupos/panel.tpl',
	'descripcion' => 'Administración del catálogo de tipo de camiones',
	'seguridad' => true,
	'js' => array('grupo.class.js'),
	'jsTemplate' => array('grupos.js'),
	'capa' => LAYOUT_BACKEND);

$conf['listagrupos'] = array(
	'controlador' => 'grupos.php',
	'vista' => 'grupos/lista.tpl',
	'descripcion' => 'Lista de grupos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cgrupos'] = array(
	'controlador' => 'grupos.php',
	'descripcion' => 'Controlador de grupos',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>