@extends('layout.main')
@section('content')
<div class="page-header">
	<h1>Dashboard</h1>
</div>

<div id="content">
	<div class="container">

		<div class="row">
			<div class="statistic-list-icon col-lg-4 col-md-4 col-sm-6">
				<div class="panel panel-outline">
					<div class="panel-heading">
						<h3 class="panel-title">Student ID Card Statistics</h3>
					</div>
					<div class="panel-body">
						<ul class="listing list-unstyled">
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>{{Idcard::where('type','=','pre service')->where('valid_upto','>=',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Valid Pre Service Student</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>{{Idcard::where('type','=','pre service')->where('valid_upto','<',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Expired Pre Service Student</p>
							</li>
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>{{Idcard::where('type','=','in service')->where('valid_upto','>=',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Valid In Service Student</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>{{Idcard::where('type','=','in service')->where('valid_upto','<',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Expired In Service Student</p>
							</li>
						 </ul>
					</div>
				</div>
			</div>
			
			<div class="statistic-list-icon col-lg-4 col-md-4 col-sm-6">
				<div class="panel panel-outline">
					<div class="panel-heading">
						<h3 class="panel-title">Faculty &amp; Staff ID Card Statistics</h3>
					</div>
					<div class="panel-body">
						<ul class="listing list-unstyled">
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>{{Idcard::where('type','=','faculty')->where('valid_upto','>=',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Valid Faculty</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>{{Idcard::where('type','=','faculty')->where('valid_upto','<',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Expired Faculty</p>
							</li>
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>{{Idcard::where('type','=','faculty')->where('valid_upto','>=',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Valid Staff</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>103</h4>
							  <p class="sub">Expired Staff</p>
							</li>
						 </ul>
					</div>
				</div>
			</div>

			<div class="statistic-list-icon col-lg-4 col-md-4 col-sm-6">
				<div class="panel panel-outline">
					<div class="panel-heading">
						<h3 class="panel-title">Temporary ID Card Statistics</h3>
					</div>
					<div class="panel-body">
						<ul class="listing list-unstyled">
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>375</h4>
							  <p class="sub">Valid</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>103</h4>
							  <p class="sub">Expired</p>
							</li>
						 </ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@stop