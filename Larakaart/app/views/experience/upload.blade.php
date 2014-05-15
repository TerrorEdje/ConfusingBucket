	
	{{ Form::open(array('url' => 'experience/add'), 'post') }}
	
		<fieldset class="the-fieldset form-margin">
			
			<legend class="the-legend text-primary">Information about the experience:</legend>
			
			<div class="col-sm-6">
			
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label text-primary">Activity: </label>
					<div class="col-sm-9">
						{{ Form::select('activity', $activities, Input::old('name'), array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-3 col-sm-9 has-error">
						{{ $errors->first('activity', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>		

				<div class="form-group">
					<label for="name" class="col-sm-3 control-label text-primary">Description: </label>
					<div class="col-sm-9">
						{{ Form::textarea('description', null, array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-3 col-sm-9 has-error">
						{{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label text-primary">Score: </label>
					<div class="col-sm-9">
						{{ Form::text('score', null, array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-3 col-sm-9 has-error">
						{{ $errors->first('score', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label text-primary">Student: </label>
					<div class="col-sm-9">
						{{ Form::select('student', $students, Input::old('name'), array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-3 col-sm-9 has-error">
						{{ $errors->first('student', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
			
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-success">Upload Experience</button>
				</div>	
			
			</div>
			
		</fieldset>
		
		{{ Form::token() }}
		
	{{ Form::close() }}	


