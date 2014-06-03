<h3>Upload School</h3>

<form action="{{ URL::route('School-upload-add') }}" method="post" class="form-horizontal">
	<fieldset class="the-fieldset form-margin">
   		<legend class="the-legend text-primary">School</legend>		
		
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
	    	<label for="website" class="col-sm-2 control-label text-primary">Website: </label>
	   		<div class="col-sm-8">
	      		{{Form::text('website', null, array('class' => 'form-control','placeholder' => 'Website'))}}
	    	</div>
			<div class="col-sm-offset-2 col-sm-8 has-error">
				{{ $errors->first('website', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
			</div>
	  	</div>

	<fieldset>					

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<!--<button type="submit" class="btn btn-danger">Terug</button>-->
	    	<button type="submit" class="btn btn-success">Upload School</button>
	    </div>
		{{ Form::token() }}
	</div>
</form>


