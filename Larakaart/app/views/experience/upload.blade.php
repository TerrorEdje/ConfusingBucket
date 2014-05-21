	
	{{ Form::open(array('url' => 'experience/add', 'post', 'class'=>'form-horizontal')) }}
	
		<fieldset class="the-fieldset form-margin">
			
			<legend class="the-legend text-primary">Information about the experience:</legend>
			
			<div class="col-sm-12">
			
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Organization: </label>
					<div class="col-sm-4">
						{{ Form::select('organization', $organizations, Input::old('name'), array('class' => 'form-control', 
						'onchange' => 'setOptions(document.myform.organization.options[document.myform.organization.selectedIndex].value);')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('organization', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>	
				
				
				
				
				
				<script type="text/javascript">	

					var allOrgActivities = new Array();
					@foreach($allOrgActivities as $orgID => $orgActivities)
						var activities = new Array();
						@foreach ($orgActivities as $activity) 
							var activity = { id:{{$activity["id"]}}, name:{{$activity["name"]}} };
							activities.push(activity);
						@endforeach
						allOrgActivities['orgID'] = {{ $orgID }};
						allOrgActivities['orgActivities'] = activities;			
					@endforeach
					
					function setOptions(orgID) {
						var activityDropdown = document.myform.activity;
						activityDropdown.options.length = 0;
						for (var activity in allOrgActivities[orgID]){
							activityDropdown.options[activityDropdown.options.length] = new Option(activity['name'], activity['id']);
						}	
					}

				</script>
				
			
				
				
				
				
				
				
				
				
			
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
				
				<div class="form-group">
					<label for="name" class="col-sm-4 control-label text-primary">Student: </label>
					<div class="col-sm-4">
						{{ Form::select('student', $students, Input::old('name'), array('class' => 'form-control')) }}
					</div>
					<div class="col-sm-offset-4 col-sm-8 has-error">
						{{ $errors->first('student', '<span class="text-danger"><span class="glyphicon glyphicon-remove"></span> :message</span>') }}
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type="submit" class="btn btn-success">Upload Experience</button>
					</div>
				</div>
			
			</div>
			
		</fieldset>
		
		{{ Form::token() }}
		
	{{ Form::close() }}	


