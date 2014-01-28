<?php
$idcards = Idcard::whereRaw('id IN ('.$id.')')->orderBy('card_no','asc')->get();
$ctr = 0;
?>
@foreach($idcards as $idcard)
	
	<?php $ctr++; ?>
	
	<div class="row print-row {{($ctr%4 == 0)?'print-page-break':''}}">
		<div class="col-lg-12">
	
	@if($idcard->type == 'pre service' || $idcard->type == 'in service')
	@include('idcard.print.student-idcard', array('data'=>$idcard))

	@elseif($idcard->type == 'faculty')
	@include('idcard.print.faculty-idcard', array('data'=>$idcard))

	@elseif($idcard->type == 'staff')
	@include('idcard.print.staff-idcard', array('data'=>$idcard))

	@elseif($idcard->type == 'temporary')
	@include('idcard.print.temporary-idcard', array('data'=>$idcard))

	@endif
	
	<script type="text/javascript">
	$(function(){
		$("#idcard_{{$idcard->id}} .idcard-barcode").barcode('{{$idcard->card_no}}', 'code128', {barHeight:18, fontSize:11});
	});
	</script>
		</div>
	</div>
@endforeach