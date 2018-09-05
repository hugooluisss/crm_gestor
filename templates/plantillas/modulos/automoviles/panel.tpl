<div class="row">
	<div class="col-sm-12">
		<h1 class="page-header"><a href="clientes" class="btn btn-link" title="Regresar a clientes"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a> Automoviles</h1>
		<h5 class="text-muted">{$cliente->getNombre()}</h5>
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
						<div class="col-sm-3">
							<select id="txtAnio" name="txtAnio" class="form-control">
								{assign var="anio" value=date('Y')+1}
								{while $anio > (date('Y')-50)}
									<option value="{$anio}">{$anio}</option>
									{$anio--}
								{/while}
							</select>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="cliente" value="{$cliente->getId()}"/>
				</div>
			</div>
		</form>
	</div>
</div>