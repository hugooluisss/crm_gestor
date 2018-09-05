<?php /* Smarty version Smarty-3.1.11, created on 2018-09-04 14:06:09
         compiled from "templates/plantillas/modulos/automoviles/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1581417585b8ed5b8cdb424-68493775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2642988f6ccd5bb58d42f6ea5fa74b015f87da4' => 
    array (
      0 => 'templates/plantillas/modulos/automoviles/panel.tpl',
      1 => 1536087967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581417585b8ed5b8cdb424-68493775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b8ed5b8dc78b4_68411056',
  'variables' => 
  array (
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8ed5b8dc78b4_68411056')) {function content_5b8ed5b8dc78b4_68411056($_smarty_tpl) {?><div class="row">
	<div class="col-sm-12">
		<h1 class="page-header">Automoviles</h1>
		<h5 class="text-muted"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNombre();?>
</h5>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">	
					<div class="form-group">
						<label for="txtMarca" class="col-sm-3 control-label">Marca</label>
						<div class="col-sm-9">
							<input class="form-control" id="txtMarca" name="txtMarca" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtModelo" class="col-sm-3 control-label">Modelo</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtModelo" name="txtModelo" type="text" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtAnio" class="col-sm-3 control-label">Año</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtAnio" name="txtAnio" type="text" />
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="text" id="cliente" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>