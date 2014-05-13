{{ Form::open(array('url' => 'organization/add'), 'post') }}
	<h1>Organization</h1>
	Name: {{ Form::text('name') }}</br>
	Type: {{Form::select('type',$types,Input::old('name')) }}</br>
	Website: {{ Form::text('website') }}</br>
	Description: </br>{{ Form::textarea('description') }}</br>
	<h1>Adress</h1>
	Street: {{ Form::text('streetname') }} Number: {{ Form::text('number') }}</br>
	City: {{ Form::text('city') }}</br>
	Zipcode: {{ Form::text('zipcode') }} </br>
	Country: {{ Form::text('country') }} </br>
	
	{{Form::submit('Upload Organization')}}
	{{Form::token()}}
{{ Form::close() }}