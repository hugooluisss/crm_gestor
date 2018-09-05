<?php /* Smarty version Smarty-3.1.11, created on 2018-09-05 09:29:31
         compiled from "templates/plantillas/modulos/automoviles/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19512306495b8fe84bceb4c0-34065488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4c4574a97e08338770ab29e216ecce4890c46b' => 
    array (
      0 => 'templates/plantillas/modulos/automoviles/lista.tpl',
      1 => 1536087370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19512306495b8fe84bceb4c0-34065488',
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
  'unifunc' => 'content_5b8fe84bd468a3_03629476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8fe84bd468a3_03629476')) {function content_5b8fe84bd468a3_03629476($_smarty_tpl) {?><div class="box">
	<div class="box-body" style="width: 100%; overflow: auto">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Anio</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marca'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modelo'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['anio'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idAuto'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>