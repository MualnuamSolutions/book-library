@extends('layout.print')
@section('content')
<div id="student_idcard">
							<div class="idcard-header">
								<span>DISTRICT INSTITUTE OF EDUCATION AND TRAINING</span>
								<span>{{ strtoupper(get_setting('district')) }} DISTRICT:MIZORAM</span>
								<span>IDENTITY CARD</span>
							</div>
							<div class="idcard-body">
								<div class="idcard-photo">
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
@stop