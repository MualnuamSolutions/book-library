		<div id="idcard_{{$data->id}}" class="idcard idcard-preview">
			<div class="idcard-front">
				<div class="idcard-header">
					<div class="idcard-pillar"><img src="{{ asset('images/ashoka-pillar.png') }}"></div>
					<span class="idcard-title">DISTRICT INSTITUTE OF EDUCATION AND TRAINING</span>
					<span>GOVERNMENT OF MIZORAM. {{ strtoupper(get_setting('district')) }}</span>
					<h3>IDENTITY CARD</h3>
				</div>
				<div class="idcard-body">
					<div class="idcard-photo">
						@if($data->picture != '')
						<img src="{{asset($idcard->picture)}}" width="100%">
						@else
						<i class="icon-user"></i>
						@endif
					</div>
					<div class="idcard-detail">
						<p><span class="idcard-label">Name</span><span class="idcard-separator">:</span><span class="idcard-value name">{{$data->name}}</span></p>
						<p><span class="idcard-label">Class</span><span class="idcard-separator">:</span><span class="idcard-value class">{{ucwords($data->type)}}</span></p>
						<p><span class="idcard-label">Session</span><span class="idcard-separator">:</span><span class="idcard-value session">{{$data->session}}</span></p>
						<p><span class="idcard-label">Date of Issue</span><span class="idcard-separator">:</span><span class="idcard-value issue">{{$data->date_of_issue}}</span></p>
						<p><span class="idcard-label">Valid Upto</span><span class="idcard-separator">:</span><span style="color:red !important;" class="idcard-value validity">{{$data->valid_upto}}</span></p>
						<p><span class="idcard-label">Blood Group</span><span class="idcard-separator">:</span><span class="idcard-value blood-group">{{$data->blood_group}}</span></p>
					</div>
				</div>
				<div class="idcard-footer">
					<div class="idcard-barcode"></div>
				</div>
			</div>
			<div class="idcard-back">
				<h4>Present Address:</h4>
				<pre class="present-address">{{$data->present_address}}</pre>
				<h4>Permanent Address:</h4>
				<pre class="permanent-address">{{$data->permanent_address}}</pre>
				<h4>Phone No: <span class="phone-no">{{$data->contact}}</span></h4>
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
		