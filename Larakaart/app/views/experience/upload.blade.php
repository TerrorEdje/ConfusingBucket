	
	{{ Form::open(array('url' => 'experience/add', 'post', 'class'=>'form-horizontal')) }}
	<h3>Upload Experience</h3>
	
		<fieldset class="the-fieldset form-margin">
			
			<legend class="the-legend text-primary">Information about the experience:</legend>
			
			<div class="col-sm-12">
			
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Activity: </label>
					<div class="col-sm-4">
						{{ Form::select('activity', $activities, Input::old('name'), array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('activity', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>		

				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Description: </label>
					<div class="col-sm-4">
						{{ Form::textarea('description', null, array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Score: </label>
					<div class="col-sm-4">
						{{ Form::text('score', null, array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('score', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				@if(checkAccess('Admin'))
					<div class="form-group">
						<label for="name" class="col-sm-4 control-label text-primary">Student: </label>
						<div class="col-sm-4">
							{{ Form::select('student', $students, Input::old('name'), array('class' => 'form-control')) }}
						</div>
						<div class="col-sm-offset-4 col-sm-8 has-error">
							{{ $errors->first('student', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
						</div>
					</div>
				@elseif(checkAccess('Student'))
					<?php
						$user = User::find(Auth::user()->id);
						$usertype = Usertype::where('user_id','=',$user->id)->first();
					?>
					{{ Form::hidden('student', $usertype->student_id) }}
				@endif
				
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						{{ Form::hidden('orgID', $orgID) }}
						<button type="submit" class="btn btn-success">Upload Experience</button>
					</div>
				</div>
			
			</div>
			
		</fieldset>
		
		{{ Form::token() }}
		
	{{ Form::close() }}	

<script type="text/javascript">    
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> ' +
                          '» <a href="#" onclick="load(\'{{ URL::route('Experience-cms-list') }}\', \'experience_cmsmenu\'); return false;">Experience CMS</a> ' +
                          '» Upload Experience');
</script>
