<script>   
	$(function() {
		$( "#calendar" ).datepicker({ dateFormat: 'dd-mm-yy' });
		$( "#calendar2" ).datepicker({ dateFormat: 'dd-mm-yy' });   
	}); 
</script>


<!--	{{ Form::open(array('url' => 'activity/add'), 'post') }}
	
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
	{{ Form::close() }}-->
	
{{ Form::open(array('url' => 'activity/add'), 'post') }}
	<fieldset class="the-fieldset form-margin">
		<legend class="the-legend text-primary">Information about the activity:</legend>
		<table>
			<tr>
				<td style="width: 150px"><label class="text-primary">Organization: </label></td><td>{{Form::select('organization',$organizations, Input::old('name'), array('class'=>'form-control')) }}</td>
				<td style="width: 150px">&nbsp;</td>
				<td style="width: 150px"><label class="text-primary">Startdate: </label></td><td>{{ Form::text('startdate', null, array('class' => 'form-control','placeholder' => 'Startdate', 'id' => 'calendar')) }}</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Type: </label></td><td>{{Form::select('type', $types, Input::old('name'), array('class'=>'form-control')) }}</td>
				<td style="width: 50px">&nbsp;</td>
				<td style="width: 150px"><label class="text-primary">Enddate: </label></td><td>{{ Form::text('enddate', null, array('class' => 'form-control','placeholder' => 'Enddate', 'id' => 'calendar2')) }}</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Name: </label></td><td>{{ Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name')) }}</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Study: </label></td><td>{{Form::select('study', $studies, Input::old('name'), array('class'=>'form-control')) }}</td>
				<td style="width: 50px">&nbsp;</td>
				<td style="width: 150px"><label class="text-primary">Status: </label></td><td>{{Form::select('status', $statuses, Input::old('name'), array('class'=>'form-control')) }}</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td style="width: 150px"><label class="text-primary">Description: </label></td>
			</tr>
			<tr>
				<td colspan="2">{{ Form::textarea('description',null, array('class' => 'form-control uploadActivityTextarea', 'rows' => '10')) }}</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
		</table>
	{{Form::submit('Upload Activity', array('class' => 'btn btn-success'))}}
	</fieldset>
	{{Form::token()}}
{{ Form::close() }}	
	
