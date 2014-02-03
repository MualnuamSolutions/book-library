@extends('layout.main')
@section('content')
<div class="page-header">
	<h1>Dashboard</h1>
</div>

<div id="content">
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-lg-12 text-center text-danger">
						<h1>Released by Director School Education</h1>
						<h3><b>Venue: SCERT</b></h3>
						<h3><b>Date - 4<sup>th</sup> February 2014, 10:30AM</b></h3>
						<hr>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="stat-block stat-success" onclick="document.location='{{url('issue?page=1&amp;limit=30&amp;status=active&amp;search=')}}'">
							<div class="icon">
								<i class="fa fa-cog"></i>
							</div>
							<div class="details">
								<div class="number">{{Transaction::whereRaw('returned_at is null')->count()}}</div>
								<div class="description">Current Issue</div>
							</div>               
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="stat-block stat-info" onclick="document.location='{{url('issue')}}'">
							<div class="icon">
								<i class="fa fa-cogs"></i>
							</div>
							<div class="details">
								<div class="number">{{Transaction::count()}}</div>
								<div class="description">Total Issues</div>
							</div>               
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="stat-block stat-primary" onclick="document.location='{{url('book')}}'">
							<div class="icon">
								<i class="fa fa-book"></i>
							</div>
							<div class="details">
								<div class="number">
									{{Book::count()}}
								</div>
								<div class="description">                           
									Total Books
								</div>
							</div>               
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="stat-block stat-danger" onclick="document.location='{{url('member')}}'">
							<div class="icon">
								<i class="fa fa-group"></i>
							</div>
							<div class="details">
								<div class="number">{{Member::count()}}</div>
								<div class="description">Total Members</div>
							</div>               
						</div>
					</div>
				</div><!-- /.row -->

			</div>
		</div>
	</div>
</div>
@stop