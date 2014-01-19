$(function(){
	$('#student_validity').datepicker({
		format: 'mm-dd-yyyy',
		todayBtn: 'linked'
	});

	$("#student_idcard .idcard-barcode").barcode('01PS140001', 'code128', {barHeight:10, fontSize:14});
});