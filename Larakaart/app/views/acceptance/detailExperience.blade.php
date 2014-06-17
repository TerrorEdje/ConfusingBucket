<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($experience != null)
        
		<div class="col-sm-6row">
            <h1>{{ $student }} </h1>
			<p>
				<span class="text-primary">{{ $organization->name, ' (', $organization->getLocation()->city, ', ', $organization->getLocation()->country, ')' }}</span><br>
				<span class="text-primary">{{ $activity['name'], ' (', $activity['type'], ')' }}</span><br>
				@if ($activity['startdate'] != null && $activity['enddate'] != null)
					<span>{{ 'Start: ', date('d-m-Y', strtotime($activity['startdate'])) }}</span><br>
					<span>{{ 'End: ', date('d-m-Y', strtotime($activity['enddate'])) }}</span>
				@endif 
			</p>
		<div>
		
		<div class="row">
			<span class="col-sm-9">{{ $experience['description'] }}</span><br>
		</div>
		
		<div class="row">
			<br>
			@if ($experience['score'] != null)
				<span class="col-sm-9">{{ 'Score: ', $experience['score'] }}</span>
			@endif 
		</div>
		
		<br><br>
		
		<div class="col-sm-6 row">
			{{ Form::open(array('url' => 'experience/status/update', 'post', 'class'=>'form-horizontal')) }}
           
		   <p class="form-group">
				<label for="name" class="col-sm-2 control-label text-primary">Status: </label>
                <span class="col-sm-4">{{ Form::select('status', $statuses, $experience['status'], array('class'=>'form-control')) }}</span>
            </p>
			<div>
				<button type="submit" class="btn btn-success">Confirm</button>
			</div>
			
			{{ Form::hidden('experienceID', $experience['id']) }}
			
			{{Form::token()}}
			{{ Form::close() }}	
		</div>
		
	@endif
	
</div>

<script type="text/javascript"> 
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> &raquo; <a href="#" onclick="load(\'{{ URL::route('Acceptance-system') }}\', \'acceptance_cmsmenu\'); return false;">Acceptance System</a> &raquo; {{ $student }} ');
</script>