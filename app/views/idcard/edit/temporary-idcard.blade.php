<div class="row-fluid">
	<div class="col-lg-5">
		{{ Form::open(array('url'=>url('idcard', array($idcard->id)), 'method'=>'put', 'class'=>'form-horizontal idcard-form', 'enctype'=>'multipart/form-data', 'autocomplete'=>'off')) }}
			{{ Form::hidden('tm_card_no', $idcard->card_no, array('id'=>'temporary_card_no')) }}
			{{ Form::hidden('type', 'temporary')}}
			<div class="form-group {{($errors->has('tm_name'))?'has-error':''}}">
				{{ Form::label('temporary_name', 'Name', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('tm_name', Input::old('tm_name', $idcard->name), array('id'=>'temporary_name', 'placeholder'=>'Name of card holder', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_school'))?'has-error':''}}">
				{{ Form::label('temporary_school', 'School', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('tm_school', Input::old('tm_school', $idcard->name_of_school), array('id'=>'temporary_school', 'placeholder'=>'Name of school', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_date_of_issue'))?'has-error':''}}">
				{{ Form::label('temporary_date_of_issue', 'Date of Issue', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('tm_date_of_issue', Input::old('tm_date_of_issue', date('d.m.Y', strtotime($idcard->date_of_issue))), array('placeholder'=>'Pick a date', 'class'=>'form-control', 'id'=>'temporary_date_of_issue')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_valid_upto'))?'has-error':''}}">
				{{ Form::label('temporary_validity', 'Valid Upto', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('tm_valid_upto', Input::old('tm_valid_upto', date('d.m.Y', strtotime($idcard->valid_upto))), array('placeholder'=>'Pick a date', 'class'=>'form-control', 'id'=>'temporary_validity')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_contact'))?'has-error':''}}">
				{{ Form::label('temporary_mobile', 'Mobile Number', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::text('tm_contact', Input::old('tm_contact', $idcard->contact), array('id'=>'temporary_mobile', 'placeholder'=>'Card holder contact number', 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_blood_group'))?'has-error':''}}">
				{{ Form::label('temporary_blood_group', 'Blood Group', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::select('tm_blood_group', array('O'=>'O', 'A'=>'A', 'B'=>'B', 'AB'=>'AB'), Input::old('tm_blood_group', $idcard->blood_group), array('id'=>'temporary_blood_group', 'placeholder'=>'', 'class'=>'form-control')) }}
				</div>
			</div>			

			<div class="form-group {{($errors->has('tm_present_address'))?'has-error':''}}">
				{{ Form::label('temporary_present_address', 'Present Address', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::textarea('tm_present_address', Input::old('tm_present_address', $idcard->present_address), array('id'=>'temporary_present_address', 'placeholder'=>'Card holder present address', 'rows'=>3, 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_permanent_address'))?'has-error':''}}">
				{{ Form::label('temporary_permanent_address', 'Permanent Address', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::textarea('tm_permanent_address', Input::old('tm_permanent_address', $idcard->permanent_address), array('id'=>'temporary_permanent_address', 'placeholder'=>'Card holder permanent address', 'rows'=>3, 'class'=>'form-control')) }}
				</div>
			</div>
			<div class="form-group {{($errors->has('tm_picture'))?'has-error':''}}">
				{{ Form::label('temporary_picture', 'Picture', array('class'=>'col-sm-5 control-label')) }}
				<div class="col-sm-7">
					{{ Form::file('tm_picture', array('id'=>'temporary_picture'))}}
					<p class="help-block">Picture cannot be previewed</p>
				</div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-5 col-sm-7">
					<button type="submit" class="btn btn-success" name="save">Save</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
	<div class="col-lg-7">
		<div class="row-fluid">
			<div class="span12">

				<div class="idcard-preview-box">
					<h4><i class="fa fa-eye"></i> Temporary ID Card Preview</h4>

					<div id="temporary_idcard" class="idcard idcard-preview">
						<div class="idcard-front">
							<div class="idcard-header">
								<div class="idcard-pillar"><img src="{{ asset('images/ashoka-pillar.png') }}"></div>
								<span class="idcard-title">DISTRICT INSTITUTE OF EDUCATION AND TRAINING</span>
								<span>GOVERNMENT OF MIZORAM. {{ strtoupper(get_setting('district')) }}</span>
								<h3>IDENTITY CARD</h3>
							</div>
							<div class="idcard-body">
								<div class="idcard-photo">
									@if($idcard->picture != '')
									<img src="{{asset($idcard->picture)}}" width="100%">
									@else
									<i class="icon-user"></i>
									@endif
								</div>
								<div class="idcard-detail">
									<p><span class="idcard-label">Name</span><span class="idcard-separator">:</span><span class="idcard-value name"></span></p>
									<p><span class="idcard-label">School</span><span class="idcard-separator">:</span><span class="idcard-value school"></span></p>
									<p><span class="idcard-label">Date of Issue</span><span class="idcard-separator">:</span><span class="idcard-value issue"></span></p>
									<p><span class="idcard-label">Valid Upto</span><span class="idcard-separator">:</span><span style="color:red" class="idcard-value validity"></span></p>
									<p><span class="idcard-label">Blood Group</span><span class="idcard-separator">:</span><span class="idcard-value blood-group"></span></p>
								</div>
							</div>
							<div class="idcard-footer">
								<div class="idcard-barcode"></div>
							</div>
						</div>
						<div class="idcard-back">
							<h4>Present Address:</h4>
							<pre class="present-address"></pre>
							<h4>Permanent Address:</h4>
							<pre class="permanent-address"></pre>
							<h4>Phone No: <span class="phone-no"></span></h4>
							<div class="idcard-signature">signature of issuing authority</div>
							<div class="terms">
								<hr>
								<ol>
									<li>This card is the property of the Govt. of Mizoram</li>
									<li>Transfer of this card to another person is a punishable crime</li>
									<li>Loss will be reported immediately</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var tm = "{{$idcard->card_no}}";

$(function(){
	temporary_generate_barcode(tm);

	$('#temporary_idcard .validity').text($('#temporary_validity').val());
	$('#temporary_validity').datepicker({
		format: 'dd.mm.yyyy',
		todayBtn: 'linked'
	}).on('changeDate', function(ev){
		$('#temporary_idcard .validity').text($('#temporary_validity').val());
		$('#temporary_validity').datepicker('hide');
	});

	$('#temporary_idcard .issue').text($('#temporary_date_of_issue').val());
	$('#temporary_date_of_issue').datepicker({
		format: 'dd.mm.yyyy',
		todayBtn: 'linked'
	}).on('changeDate', function(ev){
		$('#temporary_idcard .issue').text($('#temporary_date_of_issue').val());
		$('#temporary_date_of_issue').datepicker('hide');
	});

	$('#temporary_idcard .name').text($("#temporary_name").val());
	$("#temporary_name").on('keyup blur', function(){
		$('#temporary_idcard .name').text($(this).val());
	});

	$('#temporary_idcard .school').text($("#temporary_school").val());
	$("#temporary_school").on('keyup blur', function(){
		$('#temporary_idcard .school').text($(this).val());
	});

	$('#temporary_idcard .present-address').text($("#temporary_present_address").val());
	$("#temporary_present_address").on('keyup blur', function(){
		$('#temporary_idcard .present-address').text($(this).val());
	});

	$('#temporary_idcard .permanent-address').text($("#temporary_permanent_address").val());
	$("#temporary_permanent_address").on('keyup blur', function(){
		$('#temporary_idcard .permanent-address').text($(this).val());
	});

	$('#temporary_idcard .phone-no').text($("#temporary_mobile").val());
	$("#temporary_mobile").on('keyup blur', function(){
		$('#temporary_idcard .phone-no').text($(this).val());
	});

	$("#temporary_idcard .blood-group").text($("#temporary_blood_group").val());
	$("#temporary_blood_group").on('change', function(){
		$("#temporary_idcard .blood-group").text($(this).val());
	});
});

function temporary_generate_barcode(temporary_barcode_string) {
	$("#temporary_idcard .idcard-barcode").barcode(temporary_barcode_string, 'code128', {barHeight:12, fontSize:10});
	$("#temporary_card_no").val(temporary_barcode_string);
}
</script>