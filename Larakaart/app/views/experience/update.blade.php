	
	{{ Form::open(array('url' => 'experience/update-add', 'post', 'class'=>'form-horizontal')) }}
	
		<fieldset class="the-fieldset form-margin">
			
			<legend class="the-legend text-primary">Information about the experience:</legend>
			
			<div class="col-sm-12">

				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Description: </label>
					<div class="col-sm-4">
						{{ Form::textarea('description', $experience['description'], array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Score: </label>
					<div class="col-sm-4">
						{{ Form::text('score', $experience['cijfer'], array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('score', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Student: </label>
					<div class="col-sm-4">
						{{ Form::select('student', $students, $experience['student_id'], array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('student', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						{{ Form::hidden('expID', $experience['id']) }}
						<button type="submit" class="btn btn-success">Update Experience</button>
					</div>
				</div>
			
			</div>
			
		</fieldset>
		
		{{ Form::token() }}
		
	{{ Form::close() }}	


