<div class="row-fluid">
	<div class="col-lg-5">
		{{ Form::open(array('url'=>'idcard', 'method'=>'POST', 'class'=>'form-horizontal idcard-form', 'enctype'=>'multipart/form-data')) }}
			{{ Form::hidden('st_card_no', $st, array('id'=>'staff_card_no')) }}
			{{ Form::hidden('type', 'staff')}}
			<div class="form-group {{($errors->has('st_name'))?'has-error':''}}">
				{{ Form::label('staff_name', 'Name', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('st_name', Input::old('st_st_name'), array('id'=>'staff_name', 'placeholder'=>'Name of staff', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_designation'))?'has-error':''}}">
				{{ Form::label('staff_designation', 'Designation', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('st_designation', Input::old('st_designation'), array('id'=>'staff_designation', 'placeholder'=>'Staff designation', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_date_of_issue'))?'has-error':''}}">
				{{ Form::label('staff_date_of_issue', 'Date of Issue', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('st_date_of_issue', Input::old('st_date_of_issue'), array('placeholder'=>'Pick a date', 'class'=>'form-control', 'id'=>'staff_date_of_issue')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_contact'))?'has-error':''}}">
				{{ Form::label('staff_mobile', 'Mobile Number', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('st_contact', Input::old('st_contact'), array('id'=>'staff_mobile', 'placeholder'=>'Staff contact number', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_present_address'))?'has-error':''}}">
				{{ Form::label('staff_present_address', 'Present Address', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::textarea('st_present_address', Input::old('st_present_address'), array('id'=>'staff_present_address', 'placeholder'=>'Staff present address', 'rows'=>3, 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_permanent_address'))?'has-error':''}}">
				{{ Form::label('staff_permanent_address', 'Permanent Address', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::textarea('st_permanent_address', Input::old('st_permanent_address'), array('id'=>'staff_permanent_address', 'placeholder'=>'Staff permanent address', 'rows'=>3, 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('st_picture'))?'has-error':''}}">
				{{ Form::label('staff_picture', 'Picture', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::file('st_picture', array('id'=>'staff_picture'))}}
					<p class="help-block">Picture cannot be previewed</p>
				</div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-5 col-sm-7">
					<button type="submit" class="btn btn-primary" name="create">Create</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
	<div class="col-lg-7">
		<div class="row-fluid">
			<div class="span12">

				<div class="idcard-preview-box">
					<h4><i class="fa fa-eye"></i> Staff ID Card Preview</h4>
					<div id="staff_idcard" class="idcard idcard-preview">
						<div class="idcard-front">
							<div class="idcard-header">
								<div class="idcard-pillar"><img src="{{ asset('images/ashoka-pillar.png') }}"></div>
								<span class="idcard-title">DISTRICT INSTITUTE OF EDUCATION AND TRAINING</span>
								<span>GOVERNMENT OF MIZORAM. {{ strtoupper(get_setting('district')) }}</span>
								<h3>IDENTITY CARD</h3>
							</div>
							<div class="idcard-body">
								<div class="idcard-photo">
									<i class="icon-user"></i>
									<!-- <img src="{{asset('avatar/avatar-1.jpg')}}"> -->
								</div>
								<div class="idcard-detail">
									<p><span class="idcard-label">Name</span><span class="idcard-separator">:</span><span class="idcard-value name"></span></p>
									<p><span class="idcard-label">Designation</span><span class="idcard-separator">:</span><span class="idcard-value designation"></span></p>
									<p><span class="idcard-label">Date of Issue</span><span class="idcard-separator">:</span><span class="idcard-value issue"></span></p>
								</div>
							</div>
							<div class="idcard-footer">
								<div class="idcard-barcode"></div>
							</div>
						</div>
						<div class="idcard-back">
							<h4>Phone No: <span class="phone-no"></span></h4>
							<h4>Present Address:</h4>
							<pre class="present-address"></pre>
							<h4>Permanent Address:</h4>
							<pre class="permanent-address"></pre>
							<div class="idcard-signature">signature of issuing authority</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var st = "{{$st}}";

$(function(){
	staff_generate_barcode(st);

	$('#staff_idcard .issue').text($('#staff_date_of_issue').val());
	$('#staff_date_of_issue').datepicker({
		format: 'dd.mm.yyyy',
		todayBtn: 'linked'
	}).on('changeDate', function(ev){
		$('#staff_idcard .issue').text($('#staff_date_of_issue').val());
		$('#staff_date_of_issue').datepicker('hide');
	});

	$('#staff_idcard .name').text($("#staff_name").val());
	$("#staff_name").on('keyup blur', function(){
		$('#staff_idcard .name').text($(this).val());
	});

	$('#staff_idcard .designation').text($("#staff_designation").val());
	$("#staff_designation").on('keyup blur', function(){
		$('#staff_idcard .designation').text($(this).val());
	});

	$('#staff_idcard .present-address').text($("#staff_present_address").val());
	$("#staff_present_address").on('keyup blur', function(){
		$('#staff_idcard .present-address').text($(this).val());
	});

	$('#staff_idcard .permanent-address').text($("#staff_permanent_address").val());
	$("#staff_permanent_address").on('keyup blur', function(){
		$('#staff_idcard .permanent-address').text($(this).val());
	});

	$('#staff_idcard .phone-no').text($("#staff_mobile").val());
	$("#staff_mobile").on('keyup blur', function(){
		$('#staff_idcard .phone-no').text($(this).val());
	});
});

function staff_generate_barcode(staff_barcode_string) {
	$("#staff_idcard .idcard-barcode").barcode(staff_barcode_string, 'code128', {barHeight:18, fontSize:11});
	$("#staff_card_no").val(staff_barcode_string);
}
</script>