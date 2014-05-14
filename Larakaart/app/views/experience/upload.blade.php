

	<!-- {{ Form::open(array('url' => 'experience/add'), 'post') }}
	
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
	
	@if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>

      <ul>
        @foreach( $errors->all() as $message )
          <li class="text-danger">{{ $message }}</li>
        @endforeach
      </ul>
    @endif -->
	
	{{ Form::open(array('url' => 'experience/add'), 'post') }}
	
	<fieldset class="the-fieldset form-margin">
		
		<legend class="the-legend text-primary">Information about the experience:</legend>
		
		<table>
			<tr>
				<td style="width: 150px"><label class="text-primary">Activity: </label></td>
				<td>{{ Form::select('activity', $activities, Input::old('name')) }}</td>
			</tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Description: </label></td>
				<td>{{ Form::textarea('description') }}</td>
			</tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Score: </label></td>
				<td>{{ Form::text('score') }}</td>
			</tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Student: </label></td>
				<td>{{ Form::select('student', $students, Input::old('name')) }}</td>
			</tr>
		</table>
		
		<button type="submit" class="btn btn-success">Upload Experience</button>
		
	</fieldset>
	{{Form::token()}}
	{{ Form::close() }}	

	@if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>

      <ul>
        @foreach( $errors->all() as $message )
          <li class="text-danger">{{ $message }}</li>
        @endforeach
      </ul>
    @endif

