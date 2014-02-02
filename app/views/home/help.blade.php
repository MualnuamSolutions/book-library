@extends('layout.main')
@section('content')
<script type="text/javascript" src="{{asset('lib/flowplayer/flowplayer-3.2.13.min.js')}}"></script>
<div class="page-header">
	<h1>Help Videos</h1>
</div>

<div id="content">
	<div class="container">
		<!-- Video Start -->
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player1"></a>
				<h5>Author Edit</h5>
			</div>
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player2"></a>
			</div>
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player3"></a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player4"></a>
				<h5>Author Edit</h5>
			</div>
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player5"></a>
			</div>
			<div class="col-lg-4 col-md-4">
				<a
				 href="{{asset('help-videos/author-edit.flv')}}"
				 style="display:block;width:100%;height:250px"  
				 id="player6"></a>
			</div>
		</div>
		<!-- Video End -->
	</div>
</div>

<script type="text/javascript">
$(function(){});
flowplayer("player1", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
flowplayer("player2", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
flowplayer("player3", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
flowplayer("player4", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
flowplayer("player5", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
flowplayer("player6", "{{asset('lib/flowplayer/flowplayer-3.2.18.swf')}}", {clip: {autoPlay: false,autoBuffering: true}});
</script>
@stop