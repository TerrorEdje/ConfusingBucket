<div class="container">

    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    @if ($experience != null)
        <div class="row">
            <p>{{ $experience['description'] }} </p>
            <p>
				<span>{{ $activity['name'] }}</span><br>
            </p>
        </div>
		<div class="row">
			{{ Form::open(array('url' => 'experience/status/update', 'post', 'class'=>'form-horizontal')) }}
			<label for="name" class="control-label text-primary">Status: </label>
            <div>
                {{ Form::select('status', $statuses, $experience['status'], array('class'=>'form-control')) }}
            </div>
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
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> &raquo; Acceptance System');
</script>