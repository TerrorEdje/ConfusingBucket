

	{{ Form::open(array('url' => 'experience/add'), 'post') }}
	
		Information about the experience:</br>
		
		<p>
		Activity: {{Form::select('activity',$activities,Input::old('name')) }}</br>
		Description: </br>{{ Form::textarea('description') }}</br>
		Score: {{ Form::text('score') }}</br>
		Student: {{Form::select('student',$students) }}</br>
		</p>
	
		</br>
		{{Form::submit('Upload Experience')}}
		{{Form::token()}}
	{{ Form::close() }}
