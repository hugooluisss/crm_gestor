<?php /* Smarty version Smarty-3.1.11, created on 2018-09-11 13:55:59
         compiled from "templates/plantillas/modulos/ordenes/winAgenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14292002535b980b35387802-88924833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc210a20b71e0e8cf50630f9d402bf026afc870' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winAgenda.tpl',
      1 => 1536692083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14292002535b980b35387802-88924833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b980b353aadb7_98009571',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b980b353aadb7_98009571')) {function content_5b980b353aadb7_98009571($_smarty_tpl) {?><div class="modal" tabindex="-1" role="dialog" id="winAgenda">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title">Agenda/Citas de la orden</h5>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddCita" class="form-horizontal" onsubmit="javascript: return false;">
					<div class="row">
						<label class="col-xs-4" for="txtFecha">Fecha</label>
						<label class="col-xs-6" for="txtDescripcion">Descripción</label>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<input type="text" id="txtFecha" class="form-control" readonly="true" />
						</div>
						<div class="col-xs-6">
							<input type="text" id="txtDescripcion" class="form-control" />
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-primary btn-block">Agregar</button>
						</div>
					</div>
				</form>
			
				<div id="dvListaAgenda">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>