@extends('layout.main')

@section('content')	
	{{ Form::open(array('url' => 'story/add')) }}
		Information about the student:</br>
		First name: {{ Form::text('stufirstname') }}</br>
		Insertion: {{ Form::text('stuinsertion') }}</br>
		Surname: {{ Form::text('stusurname') }}</br>
		Email: {{ Form::text('stuemail') }}</br>
		Study: {{Form::select('study',$studies,Input::old('name')) }}</br>
		</br>
		Information about the expierence: </br>
		Story type: {{Form::select('type',$types,Input::old('name')) }}</br>
		Startdate: {{ Form::text('startdate') }}</br>
		Enddate: {{ Form::text('enddate') }}</br>
		Schoolyear: {{ Form::selectRange('schoolyear',1,10) }}</br>
		Website for your story: {{ Form::text('website') }}</br>
		Write here about the expierence:</br>
		{{ Form::textarea('expierence') }}</br>
		</br>
		Information about the organization:</br>
		Name: {{ Form::text('orgname') }}</br>
		Description: </br>{{ Form::textarea('orgdescription') }}</br>
		Streetname: {{ Form::text('orgstreet') }}</br>
		Housenumber: {{ Form::text('orghousenumber') }}</br>
		Zipcode: {{ Form::text('orgzipcode') }}</br>
		City: {{ Form::text('orgcity') }}</br>
		Country: {{ Form::text('orgcountry') }}</br>
		Website: {{ Form::text('orgwebsite') }}</br>
		</br>
		Residence information:</br>
		Street: {{ Form::text('resistreet') }}</br>
		Housenumber: {{ Form::text('resihousenumber') }}</br>
		Zipcode: {{ Form::text('resizipcode') }}</br>
		City: {{ Form::text('resicity') }}</br>
		Country: {{ Form::text('resicountry') }}</br>
		Website: {{ Form::text('resiwebsite') }}</br>
		</br>
		{{Form::submit('Upload Story')}}
		{{Form::token()}}
	{{ Form::close() }}
@stop