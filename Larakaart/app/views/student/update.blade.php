<h3>Update Student</h3>

{{ Form::open(array('route' => 'Student-update-post', 'post', 'class'=>'form-horizontal')) }}
	
<fieldset class="the-fieldset form-margin">
	<legend class="the-legend text-primary">Information about the student:</legend>
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary">Firstname: </label>
			<div class="col-sm-4">
			{{ Form::text('firstname', $student['firstname'], array('class' => 'form-control')) }}
			</div>
			<div class="col-sm-offset-4 col-sm-8 has-error">
				{{ $errors->first('firstname', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
			</div>
		</div>
	</div>
	
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary">Insertion: </label>
			<div class="col-sm-4">
			{{ Form::text('insertion',  $student['insertion'], array('class' => 'form-control')) }}
			</div>
			<div class="col-sm-offset-4 col-sm-8 has-error">
				{{ $errors->first('insertion', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
			</div>
		</div>
	</div>
	
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary">Surname: </label>
			<div class="col-sm-4">
			{{ Form::text('surname',  $student['surname'], array('class' => 'form-control')) }}
			</div>
			<div class="col-sm-offset-4 col-sm-8 has-error">
				{{ $errors->first('surname', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
			</div>
		</div>
	</div>
	
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary">Email: </label>
			<div class="col-sm-4">
			{{ Form::text('email',  $student['email'], array('class' => 'form-control')) }}
			</div>
			<div class="col-sm-offset-4 col-sm-8 has-error">
				{{ $errors->first('email', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
			</div>
		</div>
	</div>
	
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary">Study: </label>
			<div class="col-sm-4">
			{{ Form::select('study', $studies,  $student['study_id'], array('class' => 'form-control')) }}
			</div>
			<div class="col-sm-offset-4 col-sm-8 has-error">
				{{ $errors->first('study', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
			</div>
		</div>
	</div>
	{{ Form::hidden('student_id',$student['id'])}}
	<div class="col-sm-12">
		<div class="form-group">
				<label class="col-sm-4 control-label text-primary"></label>
			<div class="col-sm-4">
				<button type="submit" class="btn btn-success">Update Student</button>	
			</div>
		</div>
	</div>
</fieldset>
	{{ Form::token() }}
{{ Form::close() }}	