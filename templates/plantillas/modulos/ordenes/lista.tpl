<div class="box">
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
				{foreach from=$lista item="row"}
					<tr>
						<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
						<td>{$row.cliente}</td>
						<td>{$row.tramite}</td>
						<td>{$row.estado}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-default btn-xs" title="Agenda de la orden" orden='{$row.idOrden}' data-toggle="modal" data-target="#winAgenda"><i class="fa fa-bell-o"></i></button> | 
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idOrden}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>