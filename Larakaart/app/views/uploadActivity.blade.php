@extends('layout.main')

@section('content')	

	{{ Form::open(array('url' => 'activity/upload'), 'post') }}
	
		Information about the activity:</br>
		
		Type: {{Form::select('act_type',$types,Input::old('name')) }}</br>
		Name: {{ Form::text('name') }}</br>
		Description: </br>{{ Form::textarea('description') }}</br>
		Startdate: {{ Form::text('startdate') }}</br>
		Enddate: {{ Form::text('enddate') }}</br>
		Study: {{Form::select('study',$studies,Input::old('name')) }}</br>
		Status: {{Form::select('statuses',$statuses,Input::old('name')) }}</br>
		
		</br>
		Information about the experience:</br>
		
		Description: </br>{{ Form::textarea('description') }}</br>
		Score: {{ Form::text('score') }}</br>
	
		</br>
		{{Form::submit('Upload Activity')}}
		{{Form::token()}}
	{{ Form::close() }}
@stop