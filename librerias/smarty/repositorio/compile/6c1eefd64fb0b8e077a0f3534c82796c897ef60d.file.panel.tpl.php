<?php /* Smarty version Smarty-3.1.11, created on 2018-07-02 19:51:57
         compiled from "templates/plantillas/modulos/home/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14742037355a9d5f5d3d8274-38111219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1eefd64fb0b8e077a0f3534c82796c897ef60d' => 
    array (
      0 => 'templates/plantillas/modulos/home/panel.tpl',
      1 => 1530024050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14742037355a9d5f5d3d8274-38111219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a9d5f5d4a5107_44971617',
  'variables' => 
  array (
    'PAGE' => 0,
    'totalSolicitudesPendientes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9d5f5d4a5107_44971617')) {function content_5a9d5f5d4a5107_44971617($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3>Bienvenido </h3>
	</div>
	<div class="box-body">
		<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombre();?>

	</div>
</div>

<div class="row">
	<div class="col-xs-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				Solicitudes
			</div>
			<div class="panel-body">
				<?php if ($_smarty_tpl->tpl_vars['totalSolicitudesPendientes']->value>0){?>
					<p>Existen <?php echo $_smarty_tpl->tpl_vars['totalSolicitudesPendientes']->value;?>
 solicitudes sin atender</p>
					<div class="text-right">
						<a href="solicitudes" class="btn btn-danger">Ir a solicitudes</a>
					</div>
				<?php }else{ ?>
					<p>No hay solicitudes pendientes</p>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>