@extends('layout.main')

@section('content')
	<h1>Please follow the next <span class="text-primary">steps</span> to <span class="text-primary">complete</span> your registration.</h1>
	<h2>Step <span class="text-primary">1</span>/2</h2>

	<br /><br />

	<div class="buttonDiv">

		<div class="choiceButton">

			<a href="#" class="btn btn-danger btn-lg" onclick="load('{{ URL::route('register-student-get') }}'); return false;"><span class="glyphicon glyphicon-book"></span>&nbsp;Register as student</a>

		</div>
		
		<br />

		<div class="choiceButton">

			<a href="#" class="btn btn-danger btn-lg" onclick="load('{{ URL::route('register-organization-get') }}'); return false;"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Register as organization</a>

		</div>

	</div>

	<div class="subNote">
	
		<p class="text-primary">If you cancel the registration you have to do it again next time.</p>

		<br />

	</div>
@stop