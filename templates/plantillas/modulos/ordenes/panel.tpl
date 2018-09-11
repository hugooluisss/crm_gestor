<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header">Ordenes</h1>
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
						<label for="txtNombre" class="col-sm-3 control-label">Cliente</label>
						<div class="col-sm-8">
							<input class="form-control" id="txtCliente" name="txtCliente" />
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-sm-3 control-label">Estado</label>
						<div class="col-sm-3">
							<select id="selEstado" name="selEstado" class="form-control">
								{foreach from=$estados item="row"}
									<option value="{$row.idEstado}">{$row.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selTramite" class="col-sm-3 control-label">Trámite</label>
						<div class="col-sm-9">
							<select id="selTramite" name="selTramite" class="form-control">
								{foreach from=$tramites item="row"}
									<option value="{$row.idTramite}">{$row.nombre}</option>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtObservaciones" class="col-sm-3 control-label">Observaciones</label>
						<div class="col-sm-9">
							<textarea id="txtObservaciones" name="txtObservaciones" class="form-control" rows="5"></textarea>
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

{include file=$PAGE.rutaModulos|cat:"modulos/ordenes/winAgenda.tpl"}