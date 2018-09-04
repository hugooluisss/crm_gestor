<div class="box">
	<div class="box-body" style="width: 100%; overflow: auto">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.nombre}</td>
						<td>{$row.correo}</td>
						<td>{$row.telefono}</td>
						<td style="text-align: right">
							<a href="automoviles/{$row.idCliente}-{str_replace(" ", "", $row.nombre)}/" class="btn btn-primary btn-xs" title="Automoviles" datos='{$row.json}'><i class="fa fa-car" aria-hidden="true"></i></a>
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idCliente}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>