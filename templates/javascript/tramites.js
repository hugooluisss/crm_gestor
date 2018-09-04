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
			txtTramite: "required",
			txtColor: "required",
			txtDescripcion: "required",
			txtPrecio: {
				required: true
			}
		},
		wrapper: 'span',
		submitHandler: function(form){
			var obj = new TTramite;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				color: $("#txtColor").val(),
				descripcion: $("#txtDescripcion").val(),
				cita: $("#selCita").val(),
				publicado: $("#selPublicado").val(),
				precio: $("#txtPrecio").val(),
				documentacion: $("#txtDocumentacion").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
							
							if ($("#id").val() == ''){
								$("#winUploadImagen").modal();
								$("#winUploadImagen").find("#idTramite").val(datos.identificador);
							}
						}else{
							alert("No se guardó el registro, ocurrió un error");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listatramites", function(data) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TTramite;
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
				
				$("#id").val(el.idTramite);
				$("#txtNombre").val(el.nombre);
				$("#txtColor").val(el.color);
				$("#txtDescripcion").val(el.descripcion);
				$("#txtPrecio").val(el.precio);
				$("#selCita").val(el.cita);
				$("#selPublicado").val(el.publicado);
				$("#txtDocumentacion").val(el.documentacion);
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
	
	$('#winUploadImagen').on('show.bs.modal', function(e){
		$("#idTramite").val($(e.relatedTarget).attr("identificador"));
		$("#imagenUpload").attr("src", $(e.relatedTarget).attr("icono"));
		
		if ($(e.relatedTarget).attr("icono") != '')
			$("#imagenUpload").show();
		else
			$("#imagenUpload").hide();
	});
	
	$('#winUploadImagen').on('hidden.bs.modal', function(e){
		$("#idTramite").val("");
		$("#imagenUpload").show();
		$("#imagenUpload").attr("src", "");
		getLista();
	});
	
	
	$("#txtFotografia").change(function(){
		data = new FormData();
		data.append("imagen", $('input[type=file]')[0].files[0]);
		data.append("id", $('#idTramite').val());
		data.append("action", "upload");
		
		$.ajax({
			url: 'ctramites',
			"data": data,
			type: 'POST',
			contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
			processData: false, // NEEDED, DON'T OMIT THIS
			success: function(resp){
				resp = jQuery.parseJSON(resp);
				if (resp.band){
					$("#imagenUpload").attr("src", resp.ruta);
					$("#imagenUpload").show();
				}else{
					alert("Ocurrió un error al guardar la imagen");
					$("#imagenUpload").hide();
				}
			}
		});
	});
});