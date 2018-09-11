$(document).ready(function(){
	$("#txtFecha").datetimepicker({
		format: "Y-m-d H:i",
		step: 30
	});
	
	$('#winAgenda').on('show.bs.modal', function (event) {
		var btn = $(event.relatedTarget);
		$(event.target).attr("orden", btn.attr("orden"));
	});
});