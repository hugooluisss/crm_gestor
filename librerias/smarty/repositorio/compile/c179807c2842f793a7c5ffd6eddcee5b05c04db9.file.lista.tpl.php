<?php /* Smarty version Smarty-3.1.11, created on 2018-09-04 13:35:51
         compiled from "templates/plantillas/modulos/tramites/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10467314575b8ed0878b5a43-21142099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c179807c2842f793a7c5ffd6eddcee5b05c04db9' => 
    array (
      0 => 'templates/plantillas/modulos/tramites/lista.tpl',
      1 => 1536084370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10467314575b8ed0878b5a43-21142099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b8ed0878cb384_57606933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8ed0878cb384_57606933')) {function content_5b8ed0878cb384_57606933($_smarty_tpl) {?><div class="box">
	<div class="box-body" style="width: 100%; overflow: auto">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-xs" title="Subir ícono" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTramite'];?>
" icono="<?php echo $_smarty_tpl->tpl_vars['row']->value['icono'];?>
" data-toggle="modal" data-target="#winUploadImagen"><i class="fa fa-image"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTramite'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>