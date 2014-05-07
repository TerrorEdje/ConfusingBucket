{{--@extends('layout.main')--}}

{{--@section('content')--}}

	<table class="tblUserStory" rules='cols'>
	<tr ><th>Name</th><th class="otherTDTH">Type</th><th class="otherTDTH">Website</th><th class="otherTDTH">Link</th></tr>
	@foreach ($organizations as $organization)
		<tr>
			<td class="otherTDTH">{{ $organization['name'] }}</td>
			<td class="otherTDTH">{{ $organization['type'] }}</td>
			<td class="otherTDTH">{{ $organization['website'] }}</td>
			<td class="otherTDTH"><a href="#" onclick="load('{{ URL::route('organizationdetail', array($organization['id'])) }}','organizationdetailmenu'); return false;">Detail</a></td>
		</tr>
	@endforeach
	</table>
{{--@stop--}}