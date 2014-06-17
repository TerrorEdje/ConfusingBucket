<h1>Please follow the next <span class="text-primary">steps</span> to <span class="text-primary">complete</span> your registration.</h1>
<h2>Step <span class="text-primary">2</span>/2</h2>

<br /><br />

<form action="{{ URL::route('Register-student-post') }}" method="post" class="form-horizontal">

	<div class="form-group">
    	<label for="study" class="col-sm-2 control-label text-primary">Study: </label>
		<div class="col-sm-8">
		   	{{Form::select('study', $studies, Input::old('study'), array('class'=>'form-control'))}}
		</div>
  	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
	    	<!--<button type="submit" class="btn btn-danger">Terug</button>-->
	    	<button type="submit" class="btn btn-success">Register & login</button>
	    </div>
		{{ Form::token() }}
	</div>

</form>