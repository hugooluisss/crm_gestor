<?php
global $conf;

$conf['automoviles'] = array(
	'controlador' => 'automoviles.php',
	'vista' => 'automoviles/panel.tpl',
	'descripcion' => 'Administración del catálogo de automoviles',
	'seguridad' => true,
	'js' => array('cliente.class.js'),
	'jsTemplate' => array('automoviles.js'),
	'capa' => LAYOUT_BACKEND);

$conf['listaautomoviles'] = array(
	'controlador' => 'automoviles.php',
	'vista' => 'automoviles/lista.tpl',
	'descripcion' => 'Lista de automoviles',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cautomoviles'] = array(
	'controlador' => 'automoviles.php',
	'descripcion' => 'Controlador de automoviles',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>