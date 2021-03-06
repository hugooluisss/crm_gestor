$(document).ready(function(){
	getLista();
	$("#txtNacimiento").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#txtFechaIngreso").datepicker({ dateFormat: 'yy-mm-dd' });
	
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
			txtEmail: {
				required: true,
				email: true,
				remote: {
					url: "cusuarios",
					type: "post",
					data: {
						action: "validaUsuario",
						usuario: function(){
							return $("#id").val()
						}
					}
				}
			},
			txtPass: "required",
			txtNombre: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
		
			var obj = new TUsuario;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				email: $("#txtEmail").val(),
				pass: $("#txtPass").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listausuarios", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del($(this).attr("usuario"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idUsuario);
				$("#txtNombre").val(el.nombre);
				$("#txtEmail").val(el.email);
				$("#txtPass").val(el.pass);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblUsuarios").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});