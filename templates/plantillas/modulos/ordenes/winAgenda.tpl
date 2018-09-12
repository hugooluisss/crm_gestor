<div class="modal" tabindex="-1" role="dialog" id="winAgenda">
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
							<input type="text" id="txtFecha" name="txtFecha" class="form-control" readonly="true" />
						</div>
						<div class="col-xs-6">
							<input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" />
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-primary btn-block">Agregar</button>
						</div>
					</div>
				</form>
				<br />
				<div id="dvListaAgenda">
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="idCita" />
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>