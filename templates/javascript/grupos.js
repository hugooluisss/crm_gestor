$(document).ready(function(){
	$("#txtColor").colorpicker();
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: {
				"required": true,
			},
			txtColor: "required"
		},
		wrapper: 'span',
		submitHandler: function(form){
			var obj = new TGrupo;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				color: $("#txtColor").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("No se guardó el registro, ocurrió un error");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listagrupos", function(data) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TGrupo;
					obj.del({
						"id": $(this).attr("identificador"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idGrupo);
				$("#txtNombre").val(el.nombre);
				$("#txtColor").val(el.color);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"ordering": true,
				"info": true,
			});
		});
	}
});