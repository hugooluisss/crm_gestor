<?php /* Smarty version Smarty-3.1.11, created on 2018-09-11 21:37:00
         compiled from "templates/plantillas/modulos/ordenes/listaAgendaOrden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10895339195b987aca6770f6-94026090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647d621a8f641bd6f9efcf406438f75a7b7ec956' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/listaAgendaOrden.tpl',
      1 => 1536719817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10895339195b987aca6770f6-94026090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b987aca728d88_22665760',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b987aca728d88_22665760')) {function content_5b987aca728d88_22665760($_smarty_tpl) {?><div style="width: 100%; overflow: auto">
	<table id="tblCitas" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Descripción</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCita'];?>
"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>