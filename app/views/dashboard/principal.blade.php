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
							  <label class="label-danger"><i class="fa fa-trash-o"></i></label>
							  <h4>{{Idcard::withTrashed()->where('type','=','pre service')->count() - Idcard::where('type','=','pre service')->count()}}</h4>
							  <p class="sub">Deleted Pre Service Student</p>
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
							<li>
							  <label class="label-danger"><i class="fa fa-trash-o"></i></label>
							  <h4>{{Idcard::withTrashed()->where('type','=','in service')->count() - Idcard::where('type','=','in service')->count()}}</h4>
							  <p class="sub">Deleted In Service Student</p>
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
							  <?php //$valid_faculty = Idcard::where('type','=','faculty')->count() ?>
							  <h4>{{$valid_faculty = Idcard::where('type','=','faculty')->count()}}</h4>
							  <p class="sub">Valid Faculty</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-trash-o"></i></label>
							  <h4>{{Idcard::withTrashed()->where('type','=','faculty')->count() - $valid_faculty}}</h4>
							  <p class="sub">Deleted Faculty</p>
							</li>
							<li>
							  <label class="label-success"><i class="fa fa-check"></i></label>
							  <h4>{{$valid_staff = Idcard::where('type','=','staff')->count()}}</h4>
							  <p class="sub">Valid Staff</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-trash-o"></i></label>
							  <h4>{{Idcard::withTrashed()->where('type','=','staff')->count() - $valid_staff}}</h4>
							  <p class="sub">Deleted Staff</p>
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
							  <h4>{{Idcard::where('type','=','temporary')->where('valid_upto','>=',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Valid</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-times"></i></label>
							  <h4>{{Idcard::where('type','=','temporary')->where('valid_upto','<',DB::raw('DATE(NOW())'))->count()}}</h4>
							  <p class="sub">Expired</p>
							</li>
							<li>
							  <label class="label-danger"><i class="fa fa-trash-o"></i></label>
							  <h4>{{Idcard::withTrashed()->where('type','=','temporary')->count() - Idcard::where('type','=','temporary')->count()}}</h4>
							  <p class="sub">Deleted</p>
							</li>
						 </ul>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@stop