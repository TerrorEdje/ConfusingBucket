

	{{ Form::open(array('url' => 'activity/add'), 'post') }}
	
		Information about the activity:</br>
		
		<p>
		Organization: {{Form::select('organization',$organizations,Input::old('name')) }}</br>
		Type: {{Form::select('type',$types,Input::old('name')) }}</br>
		Name: {{ Form::text('name') }}</br>
		Description: </br>{{ Form::textarea('description') }}</br>
		Startdate: {{ Form::text('startdate') }}</br>
		Enddate: {{ Form::text('enddate') }}</br>
		Study: {{Form::select('study',$studies,Input::old('name')) }}</br>
		Status: {{Form::select('status',$statuses,Input::old('name')) }}</br>
		</p>
		
		{{Form::submit('Upload Activity')}}
		{{Form::token()}}
	{{ Form::close() }}
