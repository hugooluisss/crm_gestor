<?php /* Smarty version Smarty-3.1.11, created on 2018-09-04 13:35:50
         compiled from "templates/plantillas/modulos/tramites/winIcono.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6787350495b8ed086c91337-24041436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88d1bc8826f1851d58826fb8596354c8a2f46a6' => 
    array (
      0 => 'templates/plantillas/modulos/tramites/winIcono.tpl',
      1 => 1536084370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6787350495b8ed086c91337-24041436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b8ed086c93e67_69851714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8ed086c93e67_69851714')) {function content_5b8ed086c93e67_69851714($_smarty_tpl) {?><div id="winUploadImagen" class="modal fade" role="dialog" datos="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Subir ícono</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="txtFotografia" class="col-sm-2 control-label">Ícono</label>
					<div class="col-sm-2">
						<input type="file" id="txtFotografia" name="txtFotografia"/>
						<input type="hidden" id="idTramite" value=""/>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						<img id="imagenUpload" src="" class="img-responsive"/>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>