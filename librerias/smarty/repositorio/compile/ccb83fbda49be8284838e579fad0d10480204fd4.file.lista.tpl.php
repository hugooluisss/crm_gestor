<?php /* Smarty version Smarty-3.1.11, created on 2018-09-11 13:46:26
         compiled from "templates/plantillas/modulos/ordenes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8365875775b930822a607a4-02056786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb83fbda49be8284838e579fad0d10480204fd4' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/lista.tpl',
      1 => 1536691581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8365875775b930822a607a4-02056786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b930822b46b21_49617101',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b930822b46b21_49617101')) {function content_5b930822b46b21_49617101($_smarty_tpl) {?><div class="box">
	<div class="box-body" style="width: 100%; overflow: auto">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Registro</th>
					<th>Cliente</th>
					<th>Trámite</th>
					<th>Estado</th>
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
"><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tramite'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-xs" title="Agenda de la orden" orden='<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
' data-toggle="modal" data-target="#winAgenda"><i class="fa fa-bell-o"></i></button> | 
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>