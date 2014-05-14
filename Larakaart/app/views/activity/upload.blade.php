
	{{ Form::open(array('url' => 'activity/add'), 'post') }}
	
		Information about the activity:</br>
		
		<p>
			Organization: 	{{ Form::select('organization', $organizations,Input::old('name')) }} 
							{{ $errors->first('organization', '<span class="text-danger">:message</span>') }}</br>
							
			Type: 			{{ Form::select('type', $types, Input::old('name')) }} 
							{{ $errors->first('type', '<span class="text-danger">:message</span>') }}</br>
				  
			Name: 			{{ Form::text('name') }} 
							{{ $errors->first('name', '<span class="text-danger">:message</span>') }}</br>
				  
			Description: </br>
							{{ Form::textarea('description') }} 
							{{ $errors->first('description', '<span class="text-danger">:message</span>') }}</br>
			
			Startdate: 		{{ Form::text('startdate') }} 
							{{ $errors->first('startdate', '<span class="text-danger">:message</span>') }}</br>
					   
			Enddate: 		{{ Form::text('enddate') }} 
							{{ $errors->first('enddate', '<span class="text-danger">:message</span>') }}</br>
					 
			Study: 			{{ Form::select('study', $studies,Input::old('name')) }} 
							{{ $errors->first('study', '<span class="text-danger">:message</span>') }}</br>
				   
			Status: 		{{ Form::select('status', $statuses,Input::old('name')) }} 
							{{ $errors->first('status', '<span class="text-danger">:message</span>') }}</br>
		</p>
		
		{{Form::submit('Upload Activity')}}
		{{Form::token()}}
	{{ Form::close() }}
