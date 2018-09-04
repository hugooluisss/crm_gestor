<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header">Administración de trámites</h1>
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
						<label for="txtNombre" class="col-sm-3 control-label">Nombre</label>
						<div class="col-sm-8">
							<input class="form-control" id="txtNombre" name="txtNombre" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-3 control-label">Descripcion</label>
						<div class="col-sm-9">
							<textarea id="txtDescripcion" name="txtDescripcion" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtColor" class="col-sm-3 control-label">Color</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtColor" name="txtColor" type="text" />
						</div>
					</div>
					<div class="form-group">
						<label for="txtPrecio" class="col-sm-3 control-label">Precio</label>
						<div class="col-sm-4">
							<input class="form-control" id="txtPrecio" name="txtPrecio" type="text" />
						</div>
					</div>
					<div class="form-group">
						<label for="selCita" class="col-sm-3 control-label">¿Cita?</label>
						<div class="col-sm-3">
							<select id="selCita" name="selCita" class="form-control">
								<option value="0">No</option>
								<option value="1">Si</option>
							</select>
						</div>
						<label for="selPublicado" class="col-sm-3 control-label">¿Publicado?</label>
						<div class="col-sm-3">
							<select id="selPublicado" name="selPublicado" class="form-control">
								<option value="0">No</option>
								<option value="1">Si</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtPrecio" class="col-sm-3 control-label">Documentación a solicitar</label>
						<div class="col-sm-12">
							<input class="form-control" id="txtDocumentacion" name="txtDocumentacion" type="text" placeholder="Ninguna"/>
							<span class="text-muted">Separada por coma ","</span>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/tramites/winIcono.tpl"}