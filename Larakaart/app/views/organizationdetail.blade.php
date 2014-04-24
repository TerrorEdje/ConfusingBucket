@extends('layout.main')

@section('content')
	@foreach ($errors as $error)
		<p class="error">{{ $error }}</p>
	@endforeach
	
	@if ($organization != null)
		<h1>{{ $organization['name'] }}</h1>
		<p>
			{{ $organization['type'] }} <br/>
			<a target="_blank" href="http://{{$organization['website']}}">{{ $organization['website'] }}</a>
		</p>
		@if (count($activities) != 0)
			<h2 onClick="$('#activities').toggle();">Activities</h2>
			<div id="activities">
					@foreach ($activities as $activity)
						<div class="col-sm-6 col-md-4" id="thumbnailactivities">
							<div class="caption">
								<h3>{{ $activity['name'] }}</h3>
								<p>
									@if ($activity['status'] == 'Open')
										<b class="statusopen">{{ $activity['status'] }}</b>
									@else
										<b class="statusclosed">{{$activity['status']}}</b>
									@endif
									<br/>
									{{ $activity['type'] }}	{{ $activity->getStudyName()}} <br/>
									@if ($activity['startdate'] != null)
										Start date: {{ $activity['startdate'] }}<br/>
									@endif
									@if ($activity['enddate'] != null)
										End date: {{ $activity['enddate'] }}<br/>
									@endif
								</p>
								@if ($activity['description'] != null)
								<p>
									{{$activity['description'] }}<br/>
								</p>
								@endif
							</div>
						</div>
					@endforeach
			</div>
		@endif
	@endif
@stop