$(document).ready(function(){
	$("#txtFecha").datetimepicker({
		format: "Y-m-d H:i",
		step: 30
	});
	
	$('#winAgenda').on('show.bs.modal', function (event) {
		var btn = $(event.relatedTarget);
		$(event.target).attr("orden", btn.attr("orden"));
		
		getLista();
	});
	
	$("#frmAddCita").validate({
		debug: true,
		rules: {
			txtFecha: "required",
			txtDescripcion: "required"
		},
		wrapper: 'span',
		submitHandler: function(form){
			var obj = new TCita;
			obj.add({
				id: $("#idCita").val(), 
				orden: $('#winAgenda').attr("orden"),
				fecha: $("#txtFecha").val(), 
				descripcion: $("#txtDescripcion").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmAddCita").get(0).reset();
							getLista();
						}else{
							alert("No se guardó el registro, ocurrió un error");
						}
					}
				}
			});
        }

    });
    
    function getLista(){
	    $.post("listacitasorden", {
	    	orden:  $('#winAgenda').attr("orden")
	    }, function(data){
			$("#dvListaAgenda").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TCita;
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
			
			$("#tblCitas").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"ordering": true,
				"info": true,
			});
		});
    }
});