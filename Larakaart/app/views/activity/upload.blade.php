<script>   
	$(function() {
		$( "#calendar" ).datepicker({ dateFormat: 'yy-mm-dd' });
		$( "#calendar2" ).datepicker({ dateFormat: 'yy-mm-dd' });   
	}); 
</script>

{{ Form::open(array('url' => 'activity/add', 'post', 'class'=>'form-horizontal')) }}
	<fieldset class="the-fieldset form-margin">
		<legend class="the-legend text-primary">Information about the activity:</legend>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Organization: </label>
                <div class="col-sm-9">
                    {{Form::select('organization',$organizations, Input::old('name'), array('class'=>'form-control')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('organization', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Type: </label>
                <div class="col-sm-9">
                    {{Form::select('type', $types, Input::old('name'), array('class'=>'form-control')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('type', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Name: </label>
                <div class="col-sm-9">
                    {{ Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('name', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Study: </label>
                <div class="col-sm-9">
                    {{Form::select('study', $studies, Input::old('study'), array('class'=>'form-control')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('study', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Start date: </label>
                <div class="col-sm-9">
                    {{ Form::text('startdate', null, array('class' => 'form-control','placeholder' => 'Startdate', 'id' => 'calendar')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('startdate', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">End date: </label>
                <div class="col-sm-9">
                    {{ Form::text('enddate', null, array('class' => 'form-control','placeholder' => 'Enddate', 'id' => 'calendar2')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('enddate', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label text-primary">Status: </label>
                <div class="col-sm-9">
                    {{Form::select('status', $statuses, Input::old('name'), array('class'=>'form-control')) }}
                </div>
                <div class="col-sm-offset-3 col-sm-9 has-error">
                    {{ $errors->first('status', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
        </div>
        
        
        <div class="col-sm-12">
            <div class="form-group">
                <label for="name" class="col-sm-1 control-label text-primary">Description: </label>
                <div class="col-sm-12">
                    {{ Form::textarea('description',null, array('class' => 'form-control uploadActivityTextarea', 'rows' => '10')) }}
                </div>
                <div class="col-sm-12 has-error">
                    {{ $errors->first('description', '<span class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> :message</span>') }}
                </div>
            </div>
        </div>
        
		<div class="col-sm-12">
            <button type="submit" class="btn btn-success">Upload Activity</button>
        </div>
	</fieldset>
	{{Form::token()}}
{{ Form::close() }}	

	
