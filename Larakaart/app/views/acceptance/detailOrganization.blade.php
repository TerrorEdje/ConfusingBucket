<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($organization != null)
        <div class="row">
            <h1>{{ $organization['name'] }} </h1>
            <p>
                <span>{{ $organization['type'] }}</span><br>
				<span>{{ $organization['descrption'] }}</span><br>
				<span>{{ $organization->getLocation()->city }}</span><br>
				<span>{{ $organization->getLocation()->country }}</span><br>
				<span>{{ $organization->getLocation()->streetname }}</span><br>
				<span>{{ $organization->getLocation()->number }}</span><br>
				<span>{{ $organization->getLocation()->zipcode }}</span><br>
                <a target="_blank" href="http://{{$organization['website']}}">{{ $organization['website'] }}</a>
            </p>
        </div>
		<div class="row">
			{{ Form::open(array('url' => 'Update-organization-status', 'post', 'class'=>'form-horizontal')) }}
			<label for="name" class="control-label text-primary">Status: </label>
            <div>
                {{ Form::select('status', $statuses, $organization['status'], array('class'=>'form-control')) }}
            </div>
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