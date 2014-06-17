<h3>Upload Study</h3>

<form action="{{ URL::route('Study-upload-add') }}" method="post" class="form-horizontal">
	<fieldset class="the-fieldset form-margin">
   		<legend class="the-legend text-primary">Study</legend>		
		
		<div class="form-group">
	    	<label for="name" class="col-sm-2 control-label text-primary">Name: </label>
			<div class="col-sm-8">
			   	{{Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name'))}}
			</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('name', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	  	<div class="form-group">
	  		<label for="school" class="col-sm-2 control-label text-primary">School: </label>
	  		<div class="col-sm-8">
	  			{{Form::select('school',$schools,Input::old('school'),array('class' => 'form-control')) }}
	  		</div>
	  		<div class="col-sm-offset-2 col-sm-8 has-error">
	  			{{ $errors->first('school', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
	  		</div>
	  	</div>

	  	<div class="form-group">
	    	<label for="website" class="col-sm-2 control-label text-primary">Description: </label>
	   		<div class="col-sm-8">
	      		{{Form::textarea('description', null, array('class' => 'form-control','placeholder' => 'Description'))}}
	    	</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	<fieldset>					

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<button type="submit" class="btn btn-success">Upload Study</button>
	    </div>
		{{ Form::token() }}
	</div>
</form>

<script type="text/javascript">    
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> ' +
                          '» <a href="#" onclick="load(\'{{ URL::route('Study-cms') }}\', \'study_cmsmenu\'); return false;">Study CMS</a> ' +
                          '» Upload Study');
</script>
