<h3>Update Study</h3>

<form action="{{ URL::route('Study-update-add') }}" method="post" class="form-horizontal">
	<fieldset class="the-fieldset form-margin">
   		<legend class="the-legend text-primary">{{$study['name']}}</legend>
		<input name="study_id" type="hidden" value="{{$study['id']}}">
		
		<div class="form-group">
	    	<label for="name" class="col-sm-2 control-label text-primary">Name: </label>
			<div class="col-sm-8">
			   	{{Form::text('name',$study['name'], array('class' => 'form-control','placeholder' => 'Name'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('name', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	  	<div class="form-group">
	  		<label for="school" class="col-sm-2 control-label text-primary">School: </label>
	  		<div class="col-sm-8">
	  			{{Form::select('school',$schools,$study['school_id'],array('class' => 'form-control')) }}
	  		</div>
	  		<div class="col-sm-offset-2 col-sm-8 has-error">
	  			{{ $errors->first('school', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
	  		</div>
	  	</div>	

	  	<div class="form-group">
	    	<label for="website" class="col-sm-2 control-label text-primary">Description: </label>
	   		<div class="col-sm-8">
	      		{{Form::textarea('description', $study['description'], array('class' => 'form-control','placeholder' => 'Description'))}}
	    	</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	<fieldset>					

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<button type="submit" class="btn btn-warning">Update study</button>
	    </div>
		{{ Form::token() }}
	</div>
</form>

<script type="text/javascript">    
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> ' +
                          '&raquo; <a href="#" onclick="load(\'{{ URL::route('Study-cms') }}\', \'study_cmsmenu\'); return false;">Study CMS</a> ' +
                          '&raquo; Update Study');
</script>
