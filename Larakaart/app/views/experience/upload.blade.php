	
	{{ Form::open(array('url' => 'experience/add'), 'post') }}
	
	<fieldset class="the-fieldset form-margin">
		
		<legend class="the-legend text-primary">Information about the experience:</legend>
		
		<div class="col-sm-6">
		
			<div class="form-group">
				<label class="text-primary">Activity: </label>
				<div>
					{{ Form::select('activity', $activities, Input::old('name'), array('class' => 'form-control')) }}
				</div>
				<div>
					{{ $errors->first('activity', '<span class="text-danger">:message</span>') }}
				</div>
			</div>		

			<div class="form-group">
				<label class="text-primary">Description: </label>
				<div>
					{{ Form::textarea('description', null, array('class' => 'form-control')) }}
				</div>
				<div>
					{{ $errors->first('description', '<span class="text-danger">:message</span>') }}
				</div>
			</div>
			
			<div class="form-group">
				<label class="text-primary">Score: </label>
				<div>
					{{ Form::text('score', null, array('class' => 'form-control')) }}
				</div>
				<div>
					{{ $errors->first('score', '<span class="text-danger">:message</span>') }}
				</div>
			</div>
			
			<div class="form-group">
				<label class="text-primary">Student: </label>
				<div>
					{{ Form::select('student', $students, Input::old('name'), array('class' => 'form-control')) }}
				</div>
				<div>
					{{ $errors->first('student', '<span class="text-danger">:message</span>') }}
				</div>
			</div>
		
		<button type="submit" class="btn btn-success">Upload Experience</button>
		
		</div>
		
	</fieldset>
	{{Form::token()}}
	{{ Form::close() }}	


