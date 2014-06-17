<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($organization != null)
        <div class="col-sm-6 row">
            <h1>{{ $organization['name'] }} </h1>
            <p>
                <span class="text-primary">{{ $organization['type'] }}</span><br>
		</div>
		<div class="row">
				<span class="col-sm-9">{{ $organization['description'] }}</span><br>
		</div>
		<div class="col-sm-6 row">
				<span>{{ $organization->getLocation()->city }}, </span>
				<span>{{ $organization->getLocation()->country }}</span><br>
				<span>{{ $organization->getLocation()->zipcode }}</span><br>
				<span>{{ $organization->getLocation()->streetname }}</span>
				<span>{{ $organization->getLocation()->number }}</span><br>
                <a target="_blank" href="http://{{$organization['website']}}">{{ $organization['website'] }}</a>
            </p>
			{{ Form::open(array('url' => 'organization/status/update', 'post', 'class'=>'form-horizontal')) }}
			<p>
				<label for="name" class="control-label text-primary">Status: </label>
				{{ Form::select('status', $statuses, $organization['status'], array('class'=>'form-control')) }}
			</p>
			<div>
				<button type="submit" class="btn btn-success">Confirm</button>
			</div>
			
			{{ Form::hidden('organizationID', $organization['id']) }}
			
			{{Form::token()}}
		{{ Form::close() }}	
		</div>
	@endif
	
</div>

<script type="text/javascript"> 
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> » Acceptance System');
</script>