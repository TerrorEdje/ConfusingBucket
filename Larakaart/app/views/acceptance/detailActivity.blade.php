<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($activity != null)
        
		<div class="col-sm-6row">
            <h1>{{ $activity['name'] }} </h1>
			<p><span class="text-primary">{{ $organization->name, ' (', $organization->getLocation()->city, ', ', $organization->getLocation()->country, ')' }}</span></p>
			<p>
				<span>{{ $activity['type']}}</span><br>
				@if ($activity['startdate'] != null && $activity['enddate'] != null)
					<span>{{ 'Start: ', date('d-m-Y', strtotime($activity['startdate'])) }}</span><br>
					<span>{{ 'End: ', date('d-m-Y', strtotime($activity['enddate'])) }}</span>
				@endif 
			</p>
		<div>
		
		<div class="row">
			<span class="col-sm-9">{{ $activity['description'] }}</span><br>
		</div>
		
		<div class="col-sm-6 row">
			{{ Form::open(array('url' => 'activity/status/update', 'post', 'class'=>'form-horizontal')) }}
				
				<p>
					<label for="name" class="control-label text-primary">Status: </label>
					{{ Form::select('status', $statuses, $activity['status'], array('class'=>'form-control')) }}
				</p>
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
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> » Acceptance System');
</script>