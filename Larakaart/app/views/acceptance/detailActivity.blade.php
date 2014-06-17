<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($activity != null)
        <div class="row">
            <h1>{{ $activity['name'] }} </h1>
            <p>
				<span>{{ $activity['type'] }}</span><br>
				<span>{{ $activity['description'] }}</span><br>
				<span>{{ $organization->getLocation()->city }}</span><br>
				<span>{{ $organization->getLocation()->country }}</span><br>
            </p>
        </div>
		<div class="row">
			{{ Form::open(array('url' => 'activity/status/update', 'post', 'class'=>'form-horizontal')) }}
			<label for="name" class="control-label text-primary">Status: </label>
            <div>
                {{ Form::select('status', $statuses, $activity['status'], array('class'=>'form-control')) }}
            </div>
			<div>
				<button type="submit" class="btn btn-success">Confirm</button>
			</div>
			
			{{ Form::hidden('activityID', $activity['id']) }}
			
			{{Form::token()}}
		{{ Form::close() }}	
		</div>
	@endif
	
</div>

<script type="text/javascript"> 
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> &raquo; <a href="#" onclick="load(\'{{ URL::route('Acceptance-system') }}\', \'acceptance_cmsmenu\'); return false;">Acceptance System</a> &raquo; {{ $activity['name'] }}');
</script>