$(function(){
	$('.tooltip-top').tooltip({
		'trigger': 'hover',
		'placement': 'top',
		'container': 'body'
	});
	$('.tooltip-right').tooltip({
		'trigger': 'hover',
		'placement': 'right',
		'container': 'body'
	});
	$('.tooltip-left').tooltip({
		'trigger': 'hover',
		'placement': 'left',
		'container': 'body'
	});
	$('.tooltip-bottom').tooltip({
		'trigger': 'hover',
		'placement': 'bottom',
		'container': 'body'
	});

	$('.popover-top').popover({
		'trigger': 'click',
		'placement': 'top',
		'container': 'body'
	});
	$('.popover-right').popover({
		'trigger': 'click',
		'placement': 'right',
		'container': 'body'
	});
	$('.popover-left').popover({
		'trigger': 'click',
		'placement': 'left',
		'container': 'body'
	});
	$('.popover-bottom').popover({
		'trigger': 'click',
		'placement': 'bottom',
		'container': 'body'
	});
	
	$(".delete-button").on('click', function(ev){
		return confirm('Please confirm before you delete this record?');
	});

	$(".force-delete-button").on('click', function(ev){
		return confirm('Please confirm before you delete this record permanently?');
	});

	$(".form-group.has-error textarea, .form-group.has-error input, .form-group.has-error select").on('change blur', function(){
		if($(this).val() != '')
			$(this).closest('.form-group').removeClass('has-error');
	});
});