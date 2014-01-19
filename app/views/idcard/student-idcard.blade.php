<div class="row-fluid">
	<div class="span6">
		{{ Form::open(array('url'=>'idcard', 'method'=>'POST', 'class'=>'form-horizontal')) }}
			{{ Form::hidden('type', 'student') }}
			<div class="control-group">
				{{ Form::label('student_name', 'Name', array('class'=>'control-label')) }}
				<div class="controls">
					{{ Form::text('name', '', array('id'=>'student_name', 'placeholder'=>'Name of the student', 'class'=>'span10')) }}
				</div>
			</div>
			<div class="control-group">
				{{ Form::label('student_class', 'Class', array('class'=>'control-label')) }}
				<div class="controls">
					{{ Form::select('class', array('PSTE'=>'PSTE', 'In Service'=>'In Service'), '', array('id'=>'student_class', 'class'=>'span10')) }}
				</div>
			</div>
			<div class="control-group">
				{{ Form::label('student_session', 'Session', array('class'=>'control-label')) }}
				<div class="controls">
					{{ Form::text('session', '', array('placeholder'=>'Ex: ' . date('Y') . ' - ' . (date('Y')+1), 'class'=>'span10')) }}
				</div>
			</div>
			<div class="control-group">
				{{ Form::label('student_validity', 'Valid Upto', array('class'=>'control-label')) }}
				<div class="controls">
					{{ Form::text('valid_upto', '', array('placeholder'=>'Pick a date', 'class'=>'span10', 'id'=>'student_validity')) }}
				</div>
			</div>
		{{ Form::close() }}
	</div>
	<div class="span6">
		<div class="row-fluid">
			<div class="span12">
				<section class="module">
					<div class="module-head">
						<b>Front</b>
					</div><!--/.module-head-->
					<div class="module-body">
						<div id="student_idcard">
							<div class="idcard-header text-center pull-left">
								<span>DISTRICT INSTITUTE OF EDUCATION AND TRAINING</span>
								<span>{{ strtoupper(get_setting('district')) }} DISTRICT:MIZORAM</span>
								<span>IDENTITY CARD</span>
							</div>
							<div class="idcard-body pull-left">
								<div class="idcard-photo pull-left">
									<i class="icon-user"></i>
								</div>
								<div class="idcard-detail pull-left">
									<table>
										<tr><td>Name</td><td>:</td><td>ALAN LALHRIATPUIA</td></tr>
										<tr><td>Class</td><td>:</td><td></td></tr>
										<tr><td>Session</td><td>:</td><td></td></tr>
										<tr><td>Valid Upto</td><td>:</td><td></td></tr>
									</table>
									<div class="idcard-barcode"></div>
								</div>
							</div>
						</div>
					</div><!--/.module-body-->
				</section>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<section class="module">
					<div class="module-head">
						<b>Back</b>
					</div><!--/.module-head-->
					<div class="module-body">
						
					</div><!--/.module-body-->
				</section>
			</div>
		</div>
	</div>
</div>