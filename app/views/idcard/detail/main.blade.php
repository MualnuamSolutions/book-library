<?php $idcard = Idcard::where('card_no', '=', $card_no)->first(); ?>
	
<div class="row">
	<div class="col-lg-12">
	@if($idcard)
		@if($idcard->type == 'pre service' || $idcard->type == 'in service')
		@include('idcard.detail.student-idcard', array('data'=>$idcard))

		@elseif($idcard->type == 'faculty')
		@include('idcard.detail.faculty-idcard', array('data'=>$idcard))

		@elseif($idcard->type == 'staff')
		@include('idcard.detail.staff-idcard', array('data'=>$idcard))

		@elseif($idcard->type == 'temporary')
		@include('idcard.detail.temporary-idcard', array('data'=>$idcard))

		@endif
		<script type="text/javascript">
		$(function(){
			$("#idcard_{{$idcard->id}} .idcard-barcode").barcode('{{$idcard->card_no}}', 'code128', {barHeight:18, fontSize:11});
		});
		</script>		
	@else
		<p>Invalid ID Card or ID Card not found!</p>
	@endif
	
	</div>
</div>
