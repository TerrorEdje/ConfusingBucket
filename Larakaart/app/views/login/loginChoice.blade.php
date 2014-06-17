@extends('layout.main')

@section('content')

<a href="#" onclick="load('{{ URL::route('Home') }}','linkButton'); return false;"><span class="glyphicon glyphicon-book"></span>
Register as student</a>

<br />
<br />

<a href="#" onclick="load('{{ URL::route('Home') }}','linkButton'); return false;"><span class="glyphicon glyphicon-briefcase"></span>
Register as organization</a>

@stop