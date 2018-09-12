<div style="width: 100%; overflow: auto">
	<table id="tblCitas" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Descripción</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$lista item="row"}
				<tr>
					<td>{$row.fecha}</td>
					<td>{$row.descripcion}</td>
					<td style="text-align: right">
						<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idCita}"><i class="fa fa-times"></i></button>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>