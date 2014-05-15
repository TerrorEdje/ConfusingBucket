{{HTML::script('assets/js/geocode.js')}}
<div class="row">
    @foreach ($errors as $error)
        <p class="text-danger">{{ $error }}</p>
    @endforeach
</div>

<form action="{{ URL::route('Organization-update-add') }}" method="post" class="form-horizontal">
	<fieldset class="the-fieldset form-margin">
   		<legend class="the-legend text-primary">Organization</legend>
		<input name="organization_id"type="hidden" value="{{$organization['id']}}">
		<input name="location_id" type="hidden" value="{{$location['id']}}">
		<div class="form-group">
	    	<label for="name" class="col-sm-2 control-label">Name: </label>
			<div class="col-sm-8">
			   	<input type="text" class="form-control" id="name" name="name" value="{{$organization['name']}}">
			</div>
			@if($errors->has('name'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('name')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="type" class="col-sm-2 control-label">Type: </label>
			<div class="col-sm-8">
			   	<select class="form-control" id="type" name="type">
					<option value="{{$organization['type']}}">{{$organization['type']}}</option>
					@foreach($types as $type)
						@if($organization['type'] != $type)
							<option value="{{$type}}">{{$type}}</option>
						@endif
					@endforeach
				</select>
			</div>
			@if($errors->has('type'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('type')}}</h5>
				</div>
			@endif
	  	</div>

	  	<div class="form-group">
	    	<label for="website" class="col-sm-2 control-label">Website: </label>
	   		<div class="col-sm-8">
	      		<input type="text" class="form-control" id="website" name="website" value="{{$organization['website']}}">
	    	</div>
	    	@if($errors->has('website'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('website')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="description" class="col-sm-2 control-label">Description: </label>
	   		<div class="col-sm-8">
                <textarea name="description" class="form-control" id="description" cols="50" rows="10">{{$organization['description']}}</textarea>
	    	</div>
	    	@if($errors->has('description'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('description')}}</h5>
				</div>
			@endif
	  	</div>
        
        <legend class="the-legend text-primary">Address</legend>
        
        <div class="form-group">
	    	<label for="streetname" class="col-sm-2 control-label">Street: </label>
			<div class="col-sm-6">
			   	<input type="text" class="form-control address" id="streetname" name="streetname" value="{{$location['streetname']}}">
			</div>
			@if($errors->has('streetname'))
				<div class="col-sm-offset-2 col-sm-6 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('streetname')}}</h5>
				</div>
			@endif
            <label for="number" class="col-sm-1 control-label">No: </label>
			<div class="col-sm-1">
			   	<input type="text" class="form-control address" id="number" name="number" value="{{$location['number']}}">
			</div>
			@if($errors->has('number'))
				<div class="col-sm-offset-8 col-sm-1 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('number')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="city" class="col-sm-2 control-label">City: </label>
			<div class="col-sm-8">
			   	<input type="text" class="form-control address" id="city" name="city" value="{{$location['city']}}">
			</div>
			@if($errors->has('city'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('city')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="zipcode" class="col-sm-2 control-label">Zipcode: </label>
			<div class="col-sm-8">
			   	<input type="text" class="form-control" id="zipcode" name="zipcode" value="{{$location['zipcode']}}">
			</div>
			@if($errors->has('zipcode'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('zipcode')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="country" class="col-sm-2 control-label">Country: </label>
			<div class="col-sm-8">
			   	<input type="text" class="form-control address" id="country" name="country" value="{{$location['country']}}">
			</div>
			@if($errors->has('country'))
				<div class="col-sm-offset-2 col-sm-8 has-error">
					<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('country')}}</h5>
				</div>
			@endif
	  	</div>
        
        <div class="form-group">
	    	<label for="country" class="col-sm-2 control-label">Location: </label>
			<div class="col-sm-8">
			   	<div id="location-canvas" style="width: 100%; height: 300px;"></div>
            </div>
	  	</div>

	<fieldset>					

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<!--<button type="submit" class="btn btn-danger">Terug</button>-->
	    	<button type="submit" class="btn btn-success">Update Organization</button>
	    </div>
		{{ Form::token() }}
	</div>
</form>


