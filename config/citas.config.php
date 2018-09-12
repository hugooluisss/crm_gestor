<?php
global $conf;
/*
$conf['citas'] = array(
	'controlador' => 'grupos.php',
	'vista' => 'grupos/panel.tpl',
	'descripcion' => 'Administración del catálogo de tipo de camiones',
	'seguridad' => true,
	'js' => array('grupo.class.js'),
	'jsTemplate' => array('grupos.js'),
	'capa' => LAYOUT_BACKEND);

$conf['listacitas'] = array(
	'controlador' => 'grupos.php',
	'vista' => 'grupos/lista.tpl',
	'descripcion' => 'Lista de grupos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
*/	

$conf['listacitasorden'] = array(
	'controlador' => 'citas.php',
	'vista' => 'ordenes/listaAgendaOrden.tpl',
	'descripcion' => 'Lista de citas agendadas a la orden',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['ccitas'] = array(
	'controlador' => 'citas.php',
	'descripcion' => 'Controlador de citas',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>