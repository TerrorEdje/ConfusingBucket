	<div class="container">
	    <div class="jumbotron">

			<h1>Inloggen</h1>
			<h4 class="text-muted">U kunt hier beneden inloggen, of <a href="{{ URL::route('account-create') }}"><big class="text-primary">hier aanmelden</big></a>.</h4>

			@if(Session::has('global'))
				<h4 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ Session::get('global') }}</h4>
			@endif

			<div class="align-center">
				<form action="{{ URL::route('account-login') }}" method="post" class="form-horizontal">
					
						<fieldset class="the-fieldset form-margin">
        					<legend class="the-legend">Way to heaven</legend>
						
							<div class="form-group">
						    	<label for="inputGebruikersnaam" class="col-sm-3 control-label">Gebruikersnaam</label>
								<div class="col-sm-8">
								   	<input type="text" class="form-control" id="inputGebruikersnaam" placeholder="Gebruikersnaam" name="gebruikersnaam" {{ (Input::old('gebruikersnaam')) ? 'value="'.e(Input::old('gebruikersnaam')).'"': '' }}>
								</div>
								@if($errors->has('gebruikersnaam'))
									<div class="col-sm-offset-3 col-sm-8 has-error">
										<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('gebruikersnaam')}}</h5>
									</div>
								@endif
						  	</div>

						  	<div class="form-group">
						    	<label for="inputPassword1" class="col-sm-3 control-label">Wachtwoord</label>
						   		<div class="col-sm-8">
						      		<input type="password" class="form-control" id="inputPassword1" placeholder="Wachtwoord" name="wachtwoord">
						    	</div>
						    	@if($errors->has('wachtwoord'))
									<div class="col-sm-offset-3 col-sm-8 has-error">
										<h5 class="text-danger"><span class="glyphicon glyphicon-remove form-control-feedback"></span> {{ $errors->first('wachtwoord')}}</h5>
									</div>
								@endif
						  	</div>

						<fieldset>					

						<legend class="the-legend subtext-margin"></legend>

						<div class="checkbox">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8">
								    <label>
									    <input type="checkbox" name="cookkie">Ingelogt blijven.
								    </label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
						    	<!--<button type="submit" class="btn btn-danger">Terug</button>-->
						    	<button type="submit" class="btn btn-success">Inloggen</button>
						    </div>
							{{ Form::token() }}
						</div>

				</form>
			</div>
		</div>
	</div>