$(document).ready(function(){
	getLista();
	
	$("#txtCliente").autocomplete({
		"source": function(term, response){
			$.post("cclientes", {
				"action": "autocomplete",
				"q": term
			}, function(data){
				response(data);
			}, "json")
		},
		"select": function (event, ui){
			console.log(ui.item);
			$("#txtCliente").val(ui.item.nombre);
			$("#txtCliente").attr("identificador", ui.item.idCliente);
			return false;
		}
	});
	
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
			txtCliente: "required",
			selTramite: "required",
			txtObservaciones: "required"
		},
		wrapper: 'span',
		submitHandler: function(form){
			var obj = new TOrden;
			obj.add({
				id: $("#id").val(), 
				cliente: $("#txtCliente").attr("identificador"), 
				tramite: $("#selTramite").val(),
				observaciones: $("#txtObservaciones").val(),
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
		$.get("listaordenes", function(data) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TOrden;
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
				
				$("#id").val(el.idOrden);
				$("#txtCliente").val(el.cliente);
				$("#txtCliente").attr("identificador", el.idCliente);
				$("#selTramite").val(el.idTramite);
				$("#txtObservaciones").val(el.observaciones);
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